<?php
session_start();
include ('../koneksi.php');

$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$no_ktp = $_POST['no_ktp'];

$namafile = $_FILES['file']['name'];
$tmpname = $_FILES['file']['tmp_name'];

if($tmpname != ""){
	move_uploaded_file($tmpname, $path.$namafile);
	mysql_query("insert into mst_customer value(0,'$nama', '$alamat', '$no_telp','$no_ktp', '$namafile')");
	$iduser = "";
	$data = mysql_query("select * from mst_customer where nama='$nama' and no_ktp='$no_ktp'");
	while($row = mysql_fetch_array($data))
	{
		$iduser = $row['id'];
	}
	mysql_query("insert into trx_user value(0,'$iduser', '$username', '$password','user')");
}else{
	mysql_query("insert into mst_customer value(0,'$nama', '$alamat', '$no_telp', '$no_ktp','')");
	$iduser = "";
	$data = mysql_query("select * from mst_customer where nama='$nama' and no_ktp='$no_ktp'");
	while($row = mysql_fetch_array($data))
	{
		$iduser = $row['id'];
	}
	mysql_query("insert into trx_user value(0,'$iduser', '$username', '$password')");
}

header("location: login.php");
?>
