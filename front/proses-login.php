<?php
session_start();
include ('../koneksi.php');

$username = $_POST['username'];
$password = $_POST['password'];

$num_rows = mysql_num_rows(mysql_query("SELECT * FROM  trx_user WHERE username = '$username' AND password = '$password' AND role = 'user'"));
if($num_rows > 0){
	$iduser = "";
	$data = mysql_query("select * from trx_user where username='$username' and password='$password' ");
	while($row = mysql_fetch_array($data))
	{
		echo $iduser = $row['id_usr'];
	}

	if($iduser!=""){
		$data = mysql_query("select * from mst_customer where id='$iduser'");
		while($row = mysql_fetch_array($data))
		{
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['login_user']= $row['nama'];
			$_SESSION['login_id']= $row['id'];
		}

	}
	header("location: index.php");
}else{
	header("location: login.php?msg=Periksa Kembali Username/Password Anda.");
}

if(isset($_GET['logout'])){
	session_destroy();
}
?>
