<?php
session_start();
include ('koneksi.php');

$username = $_POST['username'];
$password = $_POST['password'];

$iduser = "";
$data = mysql_query("select * from trx_user where username='$username' and password='$password'");
while($row = mysql_fetch_array($data))
{
	echo $iduser = $row['id_usr'];
}

if($iduser!=""){
	$data = mysql_query("select * from mst_customer where id='$iduser'");
	while($row = mysql_fetch_array($data))
	{
		echo $_SESSION['login_user']= $row['nama'];
		$_SESSION['login_id']= $row['id'];
	}
	if(isset($_SESSION['login_user'])){
	
		echo $_SESSION['login_user']= 'Administrator';
		$_SESSION['login_id']= '999';
	}
}
if(isset($_GET['logout'])){
	session_destroy(); 
}
header("location: index.php");
?>
