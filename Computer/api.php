<?php
declare(strict_types=1);
$config = require __DIR__ . '/config.php';
$isHttps = !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off';
session_set_cookie_params(['httponly'=>true, 'samesite'=>'Lax', 'secure'=>$isHttps]);
session_start();
header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');

function respond(array $data, int $code=200): never {
    http_response_code($code);
    echo json_encode($data, JSON_UNESCAPED_UNICODE);
    exit;
}
function body(): array {
    $raw=file_get_contents('php://input');
    $data=json_decode($raw ?: '{}', true);
    return is_array($data) ? $data : [];
}
function adminOnly(): void {
    if (empty($_SESSION['lab_admin'])) respond(['ok'=>false,'error'=>'Admin login required.'], 401);
}
try {
    $pdo = new PDO(
        "mysql:host={$config['db_host']};dbname={$config['db_name']};charset=utf8mb4",
        $config['db_user'], $config['db_pass'],
        [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC]
    );
    $action = $_GET['action'] ?? 'records';
    if ($action === 'login' && $_SERVER['REQUEST_METHOD']==='POST') {
        $b=body();
        if (hash_equals((string)$config['admin_user'], (string)($b['username'] ?? '')) &&
            hash_equals((string)$config['admin_pass'], (string)($b['password'] ?? ''))) {
            session_regenerate_id(true);
            $_SESSION['lab_admin']=true;
            respond(['ok'=>true]);
        }
        respond(['ok'=>false,'error'=>'Incorrect username or password.'], 401);
    }
    if ($action === 'logout' && $_SERVER['REQUEST_METHOD']==='POST') {
        $_SESSION=[];
        if (ini_get('session.use_cookies')) {
            $p=session_get_cookie_params();
            setcookie(session_name(), '', time()-42000, $p['path'], $p['domain'], $p['secure'], $p['httponly']);
        }
        session_destroy();
        respond(['ok'=>true]);
    }
    if ($action === 'records' && $_SERVER['REQUEST_METHOD']==='GET') {
        $rows=$pdo->query('SELECT pc_no AS `no`, config, status, problem, repair_details AS repairDetails, notes, updated_at AS updatedAt FROM computers ORDER BY pc_no')->fetchAll();
        foreach ($rows as &$row) { $row['no']=(int)$row['no']; }
        respond(['records'=>$rows, 'isAdmin'=>!empty($_SESSION['lab_admin'])]);
    }
    if ($action === 'save' && $_SERVER['REQUEST_METHOD']==='POST') {
        adminOnly();
        $b=body(); $r=$b['record'] ?? [];
        $no=filter_var($r['no'] ?? null, FILTER_VALIDATE_INT);
        $oldNo=$b['oldNo'] ?? null;
        $configText=trim((string)($r['config'] ?? ''));
        $status=trim((string)($r['status'] ?? 'OK'));
        $allowed=['OK','KEYBOARD NOT WORKING','MOUSE NOT WORKING','MOUSE SCROLL NOT WORKING','CPU NOT WORKING','CPU UNDER REPAIR','PENDING'];
        if (!$no || $no<1 || $configText==='' || !in_array($status,$allowed,true)) respond(['ok'=>false,'error'=>'Invalid PC number, configuration, or status.'],400);
        $fields=[$no,$configText,$status,trim((string)($r['problem']??'')),trim((string)($r['repairDetails']??'')),trim((string)($r['notes']??'')),trim((string)($r['updatedAt']??date('Y-m-d H:i:s')))];
        if ($oldNo === null || $oldNo === '') {
            $st=$pdo->prepare('INSERT INTO computers (pc_no,config,status,problem,repair_details,notes,updated_at) VALUES (?,?,?,?,?,?,?)');
            $st->execute($fields);
        } else {
            $st=$pdo->prepare('UPDATE computers SET pc_no=?,config=?,status=?,problem=?,repair_details=?,notes=?,updated_at=? WHERE pc_no=?');
            $st->execute([...$fields,(int)$oldNo]);
            if ($st->rowCount()===0) {
                $check=$pdo->prepare('SELECT COUNT(*) FROM computers WHERE pc_no=?'); $check->execute([$no]);
                if (!(int)$check->fetchColumn()) respond(['ok'=>false,'error'=>'Record not found; reload and try again.'],404);
            }
        }
        respond(['ok'=>true]);
    }
    if ($action === 'delete' && $_SERVER['REQUEST_METHOD']==='POST') {
        adminOnly(); $no=filter_var(body()['no']??null,FILTER_VALIDATE_INT);
        if (!$no || $no<1) respond(['ok'=>false,'error'=>'Invalid PC number.'],400);
        $st=$pdo->prepare('DELETE FROM computers WHERE pc_no=?'); $st->execute([$no]);
        respond(['ok'=>true]);
    }
    respond(['ok'=>false,'error'=>'Unknown action or HTTP method.'],405);
} catch (PDOException $e) {
    error_log('Computer Lab API database error: '.$e->getMessage());
    respond(['ok'=>false,'error'=>'Database connection/query failed. Check config.php and import database.sql.'],500);
} catch (Throwable $e) {
    error_log('Computer Lab API error: '.$e->getMessage());
    respond(['ok'=>false,'error'=>'Server error. Check PHP error log.'],500);
}
