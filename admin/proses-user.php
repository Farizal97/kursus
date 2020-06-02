<?php
include ('koneksi.php');


	echo $_GET['aksi'];
if($_GET['aksi'] == "tambah"){
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	mysql_query("insert into trx_user value(0,'$nama', '$username', '$password')");

}else if($_GET['aksi'] == "ubah"){
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	
	mysql_query("update trx_user set id_usr='$nama', username= '$username', password='$password' where id=$id");

}else if($_GET['aksi'] == "hapus"){
	$kode = $_GET['kode'];
	mysql_query("delete from trx_user where id=$kode");

}


?>

<script>
window.location = 'index.php?menu=user';
</script>