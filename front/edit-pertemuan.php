<?php
include ('../koneksi.php');

$tanggal = $_POST['tanggal'];
$jam =  $_POST['jam'];
$id = $_POST['pertemuan_id'];

		mysql_query("UPDATE trx_pertemuan SET tanggal = '$tanggal', jam = '$jam', status = 'aktif' WHERE id = '$id'");
		header("LOCATION:index.php?menu=jadwal");





?>
