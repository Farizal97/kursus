<?php
require_once "mysql5.php";
$user = "root";
$password = "";
$database = "kursus";
$host = "localhost";

mysql_connect($host, $user, $password);
mysql_select_db($database);
?>
