COMPUTER LAB MONITORING SYSTEM — PHP + MySQL setup
===================================================

Aapki original HTML file browser localStorage use kar rahi thi. Is package mein
PHP API + MySQL database use hota hai, is liye same online website par record
save karne ke baad refresh aur doosre PC/browser par bhi latest data aayega.

SETUP:
1. Hosting cPanel/Plesk par PHP aur MySQL support hona chahiye. Sirf HTML file
   ya GitHub Pages par PHP execute nahi hota.
2. Hosting mein MySQL database aur database user banayein. Agar hosting mein
   database create karne ka option nahi, hosting provider se madad lein.
3. phpMyAdmin mein database.sql import karein. Is script mein computer_lab
   database aur original HTML ke 48 computer records shamil hain. Agar hosting
   par database ka naam alag hai, database.sql mein CREATE DATABASE/USE ko
   apne naam se adjust karein.
4. config.php mein db_host, db_name, db_user, db_pass apni hosting ke mutabiq set karein.
   Default admin login: username DHASUFFAUNIVERSITY, password dhasuffa@99.
   Security ke liye live karne se pehle admin username/password ko apni pasand ke strong credentials se badlein.
   config.php ko public repository mein upload/share na karein.
5. index.php, login.php, api.php aur config.php ko website ke same folder mein upload karein.
   Admin Login button ab alag login.php page kholta hai.
6. Website ko https://... se open karein. File ko computer se double-click karke
   kholne se PHP/SQL nahi chalega.
7. Admin Login se login karein; record edit karke Save Changes dabayein.
   API pehle database mein save karti hai, phir latest list database se reload hoti hai.

IMPORTANT:
- Har PC ko internet par isi deployed website ka URL kholna hoga.
- Existing browser localStorage ke purane edits SQL database mein automatic transfer
  nahi hote. Zaroori changes database mein dobara enter karein.
- Backend login zaroori hai; HTML mein hard-coded login credentials par bharosa na karein.
- Production mein HTTPS use karein aur config.php ki access permissions secure rakhein.
- Is setup ko live karne se pehle database ka backup bana lein.

NAVIGATION / SAME TAB:
- All, OK, Keyboard Problems, Mouse Problems aur CPU Problems buttons isi page par filters lagate hain.
- Website ka main file index.php hai; hosting par ise default page ke taur par open kiya jayega.
