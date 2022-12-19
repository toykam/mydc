"<br />
<b>Warning</b>:  Undefined array key "email" in <b>/Applications/XAMPP/xamppfiles/htdocs/mydc/includes/submitManager.php</b> on line <b>119</b><br />
<br />
<b>Fatal error</b>:  Uncaught PDOException: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'add_admin' in 'field list' in /Applications/XAMPP/xamppfiles/htdocs/mydc/vendor/catfan/medoo/src/Medoo.php:565
Stack trace:
#0 /Applications/XAMPP/xamppfiles/htdocs/mydc/vendor/catfan/medoo/src/Medoo.php(565): PDOStatement-&gt;execute()
#1 /Applications/XAMPP/xamppfiles/htdocs/mydc/vendor/catfan/medoo/src/Medoo.php(1753): Medoo\Medoo-&gt;exec(Object(PDOStatement), Array)
#2 /Applications/XAMPP/xamppfiles/htdocs/mydc/includes/adminManager.php(16): Medoo\Medoo-&gt;insert('admins', Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/mydc/includes/submitManager.php(124): createNewadmin(Array)
#4 {main}
  thrown in <b>/Applications/XAMPP/xamppfiles/htdocs/mydc/vendor/catfan/medoo/src/Medoo.php</b> on line <b>565</b><br />
"