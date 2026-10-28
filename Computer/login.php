<?php
declare(strict_types=1);
$config = require __DIR__ . '/config.php';
$isHttps = !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off';
session_set_cookie_params([
    'httponly' => true,
    'samesite' => 'Lax',
    'secure' => $isHttps
]);
session_start();

if (!empty($_SESSION['lab_admin'])) {
    header('Location: index.php');
    exit;
}
if (empty($_SESSION['login_csrf'])) {
    $_SESSION['login_csrf'] = bin2hex(random_bytes(32));
}
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $token = (string)($_POST['csrf_token'] ?? '');
    if (!hash_equals((string)$_SESSION['login_csrf'], $token)) {
        $error = 'Session expired. Page refresh karke dobara try karein.';
    } else {
        $username = trim((string)($_POST['username'] ?? ''));
        $password = (string)($_POST['password'] ?? '');
        if (hash_equals((string)$config['admin_user'], $username) &&
            hash_equals((string)$config['admin_pass'], $password) &&
            $username !== 'CHANGE_THIS_ADMIN_USERNAME' &&
            $password !== 'CHANGE_THIS_ADMIN_PASSWORD') {
            session_regenerate_id(true);
            $_SESSION['lab_admin'] = true;
            unset($_SESSION['login_csrf']);
            header('Location: index.php');
            exit;
        }
        $error = 'Username ya password ghalat hai. config.php check karein.';
    }
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Login — Computer Lab Monitoring</title>
<style>
:root{--maroon:#81181c;--gold:#e7a33e;--line:#e5d6d7}
*{box-sizing:border-box}body{margin:0;min-height:100vh;display:grid;place-items:center;padding:20px;background:#f7f3f3;font-family:Segoe UI,Arial,sans-serif;color:#24191a}
.panel{width:min(430px,100%);background:white;border:1px solid var(--line);border-radius:16px;padding:28px;box-shadow:0 12px 35px #00000012}
h1{font-size:24px;margin:0 0 8px;color:var(--maroon)}.sub{color:#716568;font-size:14px;margin-bottom:24px}
label{display:block;font-size:14px;font-weight:700;margin:14px 0 6px}
input{width:100%;padding:12px;border:1px solid var(--line);border-radius:8px;font-size:15px}
button{width:100%;margin-top:20px;padding:12px;border:0;border-radius:8px;background:var(--maroon);color:white;font-size:15px;font-weight:700;cursor:pointer}
button:hover{background:#651116}.error{background:#fee2e2;color:#991b1b;padding:10px;border-radius:8px;font-size:13px;margin-top:12px}
.back{display:block;text-align:center;margin-top:18px;color:var(--maroon);text-decoration:none;font-size:14px}
</style>
</head>
<body>
<main class="panel">
<h1>Admin Login</h1>
<div class="sub">DHA Suffa University — Computer Lab Monitoring System</div>
<form method="post" action="login.php" autocomplete="on">
<input type="hidden" name="csrf_token" value="<?= htmlspecialchars((string)$_SESSION['login_csrf'], ENT_QUOTES, 'UTF-8') ?>">
<label for="username">Username</label>
<input id="username" name="username" autocomplete="username" required autofocus>
<label for="password">Password</label>
<input id="password" name="password" type="password" autocomplete="current-password" required>
<?php if ($error !== ''): ?><div class="error"><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></div><?php endif; ?>
<button type="submit">Login</button>
</form>
<a class="back" href="index.php">← Back to Computer Records</a>
</main>
</body>
</html>
