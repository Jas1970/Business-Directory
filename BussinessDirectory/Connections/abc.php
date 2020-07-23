<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_abc = "localhost";
$database_abc = "akrsh";
$username_abc = "root";
$password_abc = "";
$abc = mysql_connect($hostname_abc, $username_abc, $password_abc) or die(mysql_error());
?>