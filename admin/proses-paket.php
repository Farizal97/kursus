<?php
include ('koneksi.php');

if($_GET['aksi'] == "tambah"){
	$nama = $_POST['nama'];
	$deskripsi = $_POST['deskripsi'];
	$biaya = $_POST['biaya'];
	$pertemuan = $_POST['pertemuan'];
	$id_mobil1 = $_POST['kode_mobil_1'];
	$id_mobil2 = $_POST['kode_mobil_2'];
	$id_mobil3 = $_POST['kode_mobil_3'];
	$query = mysql_query("INSERT INTO mst_paket SET jenis_mobil = '$_POST[jenis_mobil]', pertemuan = '$pertemuan', nama='$nama', deskripsi= '$deskripsi', biaya='$biaya',kode_mobil_1= '$id_mobil1',kode_mobil_2= '$id_mobil2',kode_mobil_3= '$id_mobil3'");
	//mysql_query("insert into mst_paket value('','$nama', '$deskripsi', $biaya,'$pertemuan', '$id_mobil1', '$id_mobil2', '$id_mobil3')");

}else if($_GET['aksi'] == "ubah"){
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$deskripsi = $_POST['deskripsi'];
	$biaya = $_POST['biaya'];
	$pertemuan = $_POST['pertemuan'];
	$id_mobil1 = $_POST['kode_mobil_1'];
	$id_mobil2 = $_POST['kode_mobil_2'];
	$id_mobil3 = $_POST['kode_mobil_3'];

	mysql_query("UPDATE mst_paket SET jenis_mobil = '$_POST[jenis_mobil]', pertemuan = '$pertemuan', nama='$nama', deskripsi= '$deskripsi', biaya='$biaya',kode_mobil_1= '$id_mobil1',kode_mobil_2= '$id_mobil2',kode_mobil_3= '$id_mobil3' where id_paket=$id");

}else if($_GET['aksi'] == "hapus"){
	$kode = $_GET['kode'];
	mysql_query("DELETE FROM mst_paket WHERE id_paket=$kode");

}

header("LOCATION:index.php?menu=paket");
?>
