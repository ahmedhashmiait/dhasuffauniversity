<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>DHA Suffa University</title>
<link rel="icon" type="image/png" href="https://www.kindpng.com/picc/m/577-5774481_dha-suffa-university-logo-png-transparent-png.png">
<style>
:root{--bg:#f7f3f3;--card:#fff;--text:#24191a;--muted:#716568;--line:#e5d6d7;--blue:#81181c;--green:#16804a;--red:#b91c1c;--orange:#d97706}
*{box-sizing:border-box}body{margin:0;background:var(--bg);font-family:Segoe UI,Arial,sans-serif;color:var(--text)}
header{background:linear-gradient(135deg,#651116,#81181c 65%,#a52a2f);color:#fff;padding:20px 24px;border-bottom:5px solid #e7a33e}.brand{display:flex;align-items:center;gap:18px}.brand img{width:82px;height:82px;object-fit:contain;background:#fff;border-radius:50%;padding:5px}.brand h1{margin:0 0 5px;font-size:28px}.brand .sub{opacity:.95}.primary{background:#81181c;color:#fff;border-color:#81181c}.primary:hover{background:#651116}.wrap{max-width:1450px;margin:20px auto;padding:0 16px}
h1{margin:0 0 5px;font-size:28px}.sub{opacity:.9}.toolbar{display:flex;gap:10px;flex-wrap:wrap;margin-bottom:16px}
input{padding:11px 13px;border:1px solid var(--line);border-radius:9px;min-width:270px;font-size:14px}
button{padding:10px 14px;border-radius:9px;border:1px solid var(--line);background:#fff;cursor:pointer;font-weight:600}
.primary{background:var(--blue);color:#fff;border-color:var(--blue)}
.summary{display:flex;gap:10px;flex-wrap:wrap;margin-bottom:18px}.stat{background:#fff;border:1px solid var(--line);border-radius:12px;padding:11px 16px;min-width:130px}.stat b{font-size:23px;display:block}.stat span{font-size:12px;color:var(--muted)}
.grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(360px,1fr));gap:15px}
.card{background:var(--card);border:1px solid var(--line);border-radius:14px;padding:16px;box-shadow:0 2px 8px #0000000b}
.top{display:flex;align-items:center;justify-content:space-between;gap:10px;margin-bottom:10px}.pc{font-size:20px;font-weight:750}
.badge{font-weight:800;font-size:12px;padding:7px 10px;border-radius:999px;text-align:center}
.ok{background:#dcfce7;color:#166534}.bad{background:#fee2e2;color:#991b1b}.warn{background:#ffedd5;color:#9a3412}
.config{font-size:13px;line-height:1.6;color:#344054;background:#f8fafc;padding:12px;border-radius:10px}
.label{font-weight:700}.empty{text-align:center;color:var(--muted);padding:40px}
.note{background:#fff7ed;border:1px solid #fed7aa;border-radius:10px;padding:11px 13px;margin-bottom:16px;font-size:13px}

.admin-panel{display:flex;gap:10px;flex-wrap:wrap;align-items:center;margin:0 0 16px}
.admin-only{display:none}
.edit-btn{background:#fff7ed;border-color:#fdba74;color:#9a3412}
.edit-form{display:grid;gap:12px}
.edit-form label{display:grid;gap:5px;font-weight:700;font-size:13px}
.edit-form input,.edit-form textarea,.edit-form select{width:100%;min-width:0;padding:10px;border:1px solid var(--line);border-radius:8px;font:inherit}
.edit-form textarea{min-height:90px;resize:vertical}
.modal{position:fixed;inset:0;background:#0008;display:none;align-items:center;justify-content:center;padding:16px;z-index:1000}
.modal.show{display:flex}
.modal-box{background:#fff;border-radius:14px;padding:20px;width:min(560px,100%);max-height:90vh;overflow:auto;box-shadow:0 15px 45px #0004}
.modal-actions{display:flex;gap:8px;justify-content:flex-end;flex-wrap:wrap;margin-top:12px}
.login-state{font-size:13px;color:var(--muted);align-self:center}
@media(max-width:520px){.grid{grid-template-columns:1fr}input{min-width:0;width:100%}}


/* Footer */
.site-footer{
  margin-top:32px;
  background:linear-gradient(135deg,#651116,#81181c 65%,#a52a2f);
  color:#fff;
  border-top:5px solid #e7a33e;
  padding:28px 20px 16px;
}
.footer-inner{max-width:1450px;margin:0 auto;display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:24px}
.site-footer h3{margin:0 0 10px;font-size:16px;color:#fff}
.site-footer p,.site-footer li{margin:6px 0;color:#f8e9e9;font-size:13px;line-height:1.65}
.site-footer ul{list-style:none;margin:0;padding:0}
.site-footer a{color:#fff;text-decoration:none}
.site-footer a:hover{text-decoration:underline}
.footer-bottom{max-width:1450px;margin:20px auto 0;padding-top:14px;border-top:1px solid #ffffff40;text-align:center;color:#f8e9e9;font-size:12px;line-height:1.7}

</style>
</head>
<body id="top">
<header><div class="brand"><img src="https://www.kindpng.com/picc/m/577-5774481_dha-suffa-university-logo-png-transparent-png.png" alt="DHA Suffa University Logo"><div><h1>DHA SUFFA UNIVERSITY</h1><div class="sub">Managment Science(System Lab)</div></div></div></header>
<div class="wrap">
<!-- <div class="note"><b>Status:</b> Keyboard, mouse aur CPU ke masail ko ab specific status ke sath show kiya gaya hai.</div>
 --><div class="admin-panel">
 <span id="loginState" class="login-state"></span>
 <button id="loginBtn" class="primary" onclick="window.location.href='login.php'">Admin Login</button>
 <button id="logoutBtn" onclick="logout()" class="admin-only">Logout</button>
 <button id="addBtn" onclick="openEditor(null)" class="admin-only">+ Add Computer</button>
</div>
<div class="toolbar">
<input id="search" placeholder="Search PC number, keyboard, mouse, CPU...">
<button onclick="setFilter('all')">All</button>
<button onclick="setFilter('OK')">OK</button>
<button onclick="setFilter('KEYBOARD')">Keyboard Problems</button>
<button onclick="setFilter('MOUSE')">Mouse Problems</button>
<button onclick="setFilter('CPU')">CPU Problems</button>
<!-- <button class="primary" onclick="exportCSV()">Export Report</button> -->
</div>
<!-- <div class="note"></div> -->
<div class="summary">
<div class="stat"><b id="total">0</b><span>Total Computers</span></div>
<div class="stat"><b id="ok">0</b><span>OK</span></div>
<div class="stat"><b id="keyboard">0</b><span>Keyboard Problems</span></div>
<div class="stat"><b id="mouse">0</b><span>Mouse Problems</span></div>
<div class="stat"><b id="cpu">0</b><span>CPU Problems</span></div>
</div>
<div id="grid" class="grid"></div>
</div>

<footer class="site-footer">
  <div class="footer-inner">
    <section>
      <h3>DHA Suffa University</h3>
      <p>Management Science — System Lab</p>
      <p>Computer Lab Monitoring System</p>
      <p>Computer status, configuration, and maintenance record management.</p>
    </section>
    <section>
      <h3>Quick Links</h3>
      <ul>
        <li><a href="#top" onclick="window.scrollTo({top:0,behavior:'smooth'});return false;">Back to Top</a></li>
        <li><a href="#grid">Computer Records</a></li>
        <li><a href="#search" onclick="document.getElementById('search').focus();return false;">Search Computers</a></li>
      </ul>
    </section>
    <section>
      <h3>System Information</h3>
      <p>Purpose: Lab computer status monitoring</p>
      <p>Access: Admin login required for editing records</p>
      <p>Designed for desktop and mobile screens</p>
    </section>
    <section>
      <h3>Developer</h3>
      <p><strong>Name:</strong> Mohammad Ahmed Hashmi</p>
      <p><strong>Role:</strong> Lab Assistant</p>
      <p><strong>Project:</strong> Computer Lab Monitoring System</p>
      <!-- <p class="footer-note">Replace “Your Name” with your own name.</p> -->
    </section>
  </div>
  <div class="footer-bottom">
    © <span id="footerYear"></span> DHA Suffa University — Computer Lab Monitoring System. All rights reserved.<br>
    For authorized lab administration and monitoring.
  </div>
</footer>


<div id="loginModal" class="modal" role="dialog" aria-modal="true" aria-labelledby="loginTitle">
 <div class="modal-box">
  <h2 id="loginTitle">Admin Login</h2>
  <form class="edit-form" onsubmit="event.preventDefault();login()">
   <label>Username<input id="adminUser" autocomplete="username" required></label>
   <label>Password<input id="adminPass" type="password" autocomplete="current-dha" required></label>
   <div id="loginError" style="color:#b91c1c;font-size:13px"></div>
   <div class="modal-actions"><button type="button" onclick="closeModal('loginModal')">Cancel</button><button class="primary" type="submit">Login</button></div>
  </form>
 <!--  <p class="login-state">Demo credentials: admin / admin123</p> -->
 </div>
</div>
<div id="editModal" class="modal" role="dialog" aria-modal="true" aria-labelledby="editTitle">
 <div class="modal-box">
  <h2 id="editTitle">Edit Computer</h2>
  <form class="edit-form" onsubmit="event.preventDefault();saveComputer()">
   <label>PC Number<input id="editNo" type="number" min="1" required></label>
   <label>Computer Configuration<textarea id="editConfig" required></textarea></label>
   <label>Status<select id="editStatus"><option>OK</option><option>KEYBOARD NOT WORKING</option><option>MOUSE NOT WORKING</option><option>MOUSE SCROLL NOT WORKING</option><option>CPU NOT WORKING</option><option>CPU UNDER REPAIR</option><option>PENDING</option></select></label>
   <label>Problem<input id="editProblem" placeholder="e.g. Keyboard not working"></label>
   <label>Repair Details<textarea id="editRepair" placeholder="e.g. Keyboard replaced and tested"></textarea></label>
   <label>Additional Notes<textarea id="editNotes" placeholder="Any other details"></textarea></label>
   <div id="editError" style="color:#b91c1c;font-size:13px"></div>
   <div class="modal-actions"><button type="button" onclick="closeModal('editModal')">Cancel</button><button class="primary" type="submit">Save Changes</button></div>
  </form>
 </div>
</div>

<script>
const computers=[];
let filter="all";
function setFilter(f){filter=f;render()}
function matchesFilter(s){
 if(filter==="all") return true;
 if(filter==="OK") return s==="OK";
 if(filter==="KEYBOARD") return s.includes("KEYBOARD");
 if(filter==="MOUSE") return s.includes("MOUSE");
 if(filter==="CPU") return s.includes("CPU");
 return true;
}
function badgeClass(s){
 if(s==="OK") return "ok";
 if(s.includes("KEYBOARD")||s.includes("MOUSE")) return "warn";
 return "bad";
}
function render(){
 const q=document.getElementById("search").value.toLowerCase().trim();
 let html="";
 computers.forEach(c=>{
   const text=(c.no+" "+c.config+" "+c.status).toLowerCase();
   if(q&&!text.includes(q)) return;
   if(!matchesFilter(c.status)) return;
   html+=`<div class="card"><div class="top"><div class="pc">PC ${esc(c.no)}</div><span class="badge ${badgeClass(c.status)}">${esc(c.status)}</span></div>
   <div class="config"><span class="label">Configuration:</span> ${esc(c.config)}</div>
   ${c.problem?`<p><span class="label">Problem:</span> ${esc(c.problem)}</p>`:""}
   ${c.repairDetails?`<p><span class="label">Repair details:</span> ${esc(c.repairDetails)}</p>`:""}
   ${c.notes?`<p><span class="label">Notes:</span> ${esc(c.notes)}</p>`:""}
   ${c.updatedAt?`<p class="login-state">Last updated: ${esc(c.updatedAt)}</p>`:""}
   ${isAdmin?`<div style="margin-top:12px;display:flex;gap:8px;flex-wrap:wrap"><button class="edit-btn" onclick="openEditor(${Number(c.no)})">Edit / Update</button><button style="background:#fee2e2;border-color:#fca5a5;color:#991b1b" onclick="deleteComputer(${Number(c.no)})">Delete</button></div>`:""}</div>`;
 });
 document.getElementById("grid").innerHTML=html||'<div class="empty">No computers found.</div>';
 document.getElementById("total").textContent=computers.length;
 document.getElementById("ok").textContent=computers.filter(x=>x.status==="OK").length;
 document.getElementById("keyboard").textContent=computers.filter(x=>x.status.includes("KEYBOARD")).length;
 document.getElementById("mouse").textContent=computers.filter(x=>x.status.includes("MOUSE")).length;
 document.getElementById("cpu").textContent=computers.filter(x=>x.status.includes("CPU")).length;
}
function esc(s){return String(s??"").replace(/[&<>"']/g,m=>({"&":"&amp;","<":"&lt;",">":"&gt;",'"':"&quot;","'":"&#039;"}[m]))}
function exportCSV(){
 const rows=[["PC","Configuration","Status"],...computers.map(c=>[c.no,c.config,c.status])];
 const csv=rows.map(r=>r.map(v=>`"${String(v).replaceAll('"','""')}"`).join(",")).join("\\n");
 const a=document.createElement("a");a.href=URL.createObjectURL(new Blob([csv],{type:"text/csv"}));a.download="computer_lab_status_report.csv";a.click();
}

const ADMIN_USER = "DHASUFFAUNIVERSITY";
const ADMIN_PASS = "dhasuffa@99";
let isAdmin = false;
let editingNo = null;

function openLogin(){
 document.getElementById("loginModal").classList.add("show");
 document.getElementById("loginError").textContent="";
 document.getElementById("adminUser").focus();
}
function closeModal(id){document.getElementById(id).classList.remove("show")}
async function login(){
  const user=document.getElementById("adminUser").value.trim();
  const pass=document.getElementById("adminPass").value;
  try{
    const r=await fetch("api.php?action=login",{method:"POST",headers:{"Content-Type":"application/json"},credentials:"same-origin",body:JSON.stringify({username:user,password:pass})});
    const data=await r.json();
    if(!r.ok||!data.ok) throw new Error(data.error||"Login failed");
    isAdmin=true;
    closeModal("loginModal");
    document.getElementById("loginState").textContent="Admin mode — records can be edited.";
    document.getElementById("loginBtn").style.display="none";
    document.getElementById("logoutBtn").style.display="inline-block";
    document.getElementById("addBtn").style.display="inline-block";
    render();
  }catch(e){document.getElementById("loginError").textContent=e.message||"Login failed. Please check server configuration."}
}
async function logout(){
  try{await fetch("api.php?action=logout",{method:"POST",credentials:"same-origin"})}catch(e){}
  isAdmin=false;
  document.getElementById("loginState").textContent="View mode — admin login required to edit records.";
  document.getElementById("loginBtn").style.display="inline-block";
  document.getElementById("logoutBtn").style.display="none";
  document.getElementById("addBtn").style.display="none";
  render();
}
function openEditor(no){
 if(!isAdmin){alert("Please login as admin first.");return}
 editingNo=no;
 const c=no===null?{no:"",config:"",status:"OK",problem:"",repairDetails:"",notes:""}:computers.find(x=>x.no===no);
 if(!c)return;
 document.getElementById("editTitle").textContent=no===null?"Add Computer":`Edit PC ${no}`;
 document.getElementById("editNo").value=c.no;
 document.getElementById("editConfig").value=c.config||"";
 document.getElementById("editStatus").value=c.status||"OK";
 document.getElementById("editProblem").value=c.problem||"";
 document.getElementById("editRepair").value=c.repairDetails||"";
 document.getElementById("editNotes").value=c.notes||"";
 document.getElementById("editError").textContent="";
 document.getElementById("editModal").classList.add("show");
}
async function saveComputer(){
  if(!isAdmin){alert("Admin login required.");return}
  const no=Number(document.getElementById("editNo").value);
  const config=document.getElementById("editConfig").value.trim();
  if(!Number.isInteger(no)||no<1||!config){document.getElementById("editError").textContent="Valid PC number and configuration are required.";return}
  const existing=computers.find(x=>x.no===no);
  if((editingNo===null&&existing)||(editingNo!==null&&no!==editingNo&&existing)){
    document.getElementById("editError").textContent="This PC number already exists.";return
  }
  const record={no,config,status:document.getElementById("editStatus").value,
    problem:document.getElementById("editProblem").value.trim(),
    repairDetails:document.getElementById("editRepair").value.trim(),
    notes:document.getElementById("editNotes").value.trim(),
    updatedAt:new Date().toLocaleString()};
  try{
    const r=await fetch("api.php?action=save",{method:"POST",headers:{"Content-Type":"application/json"},credentials:"same-origin",body:JSON.stringify({record,oldNo:editingNo})});
    const data=await r.json();
    if(!r.ok||!data.ok) throw new Error(data.error||"Could not save record");
    await loadRecords();
    closeModal("editModal");render();
  }catch(e){document.getElementById("editError").textContent=(e.message||"Save failed")+". Check server/database connection."}
}
async function deleteComputer(no){
  if(!isAdmin){alert("Please login as admin first.");return}
  if(!confirm(`Are you sure you want to delete PC ${no}? This action cannot be undone.`))return;
  try{
    const r=await fetch("api.php?action=delete",{method:"POST",headers:{"Content-Type":"application/json"},credentials:"same-origin",body:JSON.stringify({no})});
    const data=await r.json();
    if(!r.ok||!data.ok) throw new Error(data.error||"Delete failed");
    await loadRecords();render();
  }catch(e){alert((e.message||"Delete failed")+". Check server/database connection.")}
}
async function loadRecords(){
  try{
    const r=await fetch("api.php?action=records",{cache:"no-store",credentials:"same-origin"});
    const data=await r.json();
    if(!r.ok||!Array.isArray(data.records)) throw new Error(data.error||"Could not load records");
    computers.splice(0,computers.length,...data.records);
    isAdmin = data.isAdmin === true;
    document.getElementById("loginState").textContent = isAdmin
      ? "Admin mode — records can be edited."
      : "View mode — admin login required to edit records.";
    document.getElementById("loginBtn").style.display = isAdmin ? "none" : "inline-block";
    document.getElementById("logoutBtn").style.display = isAdmin ? "inline-block" : "none";
    document.getElementById("addBtn").style.display = isAdmin ? "inline-block" : "none";
    render();
  }catch(e){
    document.getElementById("grid").innerHTML='<div class="empty">Server/database se records load nahi ho sake. Hosting par api.php aur database setup check karein.</div>';
    console.error(e);
  }
}
document.getElementById("search").addEventListener("input",render);
loadRecords();
document.getElementById("footerYear").textContent = new Date().getFullYear();

</script>
</body>
</html>