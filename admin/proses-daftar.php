<?php
include ('koneksi.php');


	echo $_GET['aksi'];
if($_GET['aksi'] == "tambah"){
	$id = $_POST['id'];
	$nama_customer = $_POST['nama_customer'];
	$paket = $_POST['nama_paket'];
	$jenis_mobil = $_POST['jenis_mobil'];
	$status = $_POST['status'];
	
	mysql_query("insert into trx_daftar value(0,'$nama_customer','".date("Y-m-d")."', '$status', '$paket', '$jenis_mobil')");

}else if($_GET['aksi'] == "ubah"){
	$id = $_POST['id'];
	$nama_customer = $_POST['nama_customer'];
	$paket = $_POST['nama_paket'];
	$jenis_mobil = $_POST['jenis_mobil'];
	$status = $_POST['status'];
	
	
	mysql_query("update trx_daftar set id_customer='$nama_customer',  status='$status', paket='$paket',jenis_mobil='$jenis_mobil' where id=$id");

}else if($_GET['aksi'] == "hapus"){
	$kode = $_GET['kode'];
	mysql_query("delete from trx_daftar where id=$kode");

}


?>

<script>
window.location = 'index.php?menu=daftar';
</script>