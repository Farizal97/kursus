<?php
include ('../koneksi.php');
session_start();
$msg = "gagal";
$date = date("Y-m-d");
if($_GET['aksi'] == "tambah"){

	$nama_customer = $_POST['nama_customer'];
	$id_paket = $_POST['id_paket'];
	$get_data_paket = mysql_fetch_array(mysql_query("SELECT * FROM mst_paket WHERE id_paket = '$id_paket'"));
	mysql_query("insert into trx_daftar value(0,'$nama_customer','$date', 'Daftar', '$get_data_paket[id_paket]', '$jenis_mobil','$_SESSION[username]')");
	$msg = "Berhasil memilih pake, silahkan atur jadwal terlebih dahulu";
	$get_id_paket = mysql_fetch_array(mysql_query("SELECT * FROM trx_daftar WHERE tanggal = '$date' AND created_by = '$_SESSION[username]' ORDER BY id_daftar DESC"));
	$link = "index.php?menu=form-daftar&kode=$get_id_paket[id_daftar]&aksi=ubah";
	$pesan = $_SESSION['username'].' telah melakukan pembokingan';
	mysql_query("INSERT INTO trx_notifikasi_admin SET pesan='$pesan', link = '$link'");
}
	header("LOCATION:index.php?menu=form-jadwal&id=$get_id_paket[id_daftar]");
?>
