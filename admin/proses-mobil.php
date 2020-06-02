<?php
include ('koneksi.php');


	echo $_GET['aksi'];
if($_GET['aksi'] == "tambah"){
	$kode = $_POST['kode'];
	$jenis = $_POST['jenis'];
	$nama = $_POST['nama'];
	$tahun = $_POST['tahun'];
	mysql_query("insert into mst_mobil value('$kode', '$jenis', '$nama', $tahun)");

}else if($_GET['aksi'] == "ubah"){
	$kode = $_POST['kode'];
	$jenis = $_POST['jenis'];
	$nama = $_POST['nama'];
	$tahun = $_POST['tahun'];
	mysql_query("update mst_mobil set kode_mobil='$kode', jenis_mobil= '$jenis', nama_mobil='$nama',tahun_mobil= $tahun where kode_mobil='$kode'");

}else if($_GET['aksi'] == "hapus"){
	$kode = $_GET['kode'];
	mysql_query("delete from mst_mobil where kode_mobil='$kode'");

}


?>

<script>
window.location = 'index.php?menu=mobil';
</script>