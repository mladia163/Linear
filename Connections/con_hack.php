<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_con_hack = "localhost";
$database_con_hack = "hack";
$username_con_hack = "root";
$password_con_hack = "";
error_reporting(0);
$con_hack = mysql_pconnect($hostname_con_hack, $username_con_hack, $password_con_hack) or trigger_error(mysql_error(),E_USER_ERROR); 
?>