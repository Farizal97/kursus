<?php
include ('../koneksi.php');
session_start();

$today = date("Y-m-d H:i:s");
if($_GET['aksi'] == "tambah"){
	mysql_query("INSERT INTO trx_jadwal SET id_daftar = '$_POST[id_daftar]', tanggal = '$today', status = 'Request', username = '$_SESSION[username]'");
	mysql_query("UPDATE trx_daftar SET kode_mobil = '$_POST[kode_mobil]' WHERE id_daftar = '$_POST[id_daftar]' ");
	$tanggal = $_POST['tanggal'];
	$jam = $_POST['jam'];
	$kode_mobil = $_POST['kode_mobil'];
	$jenis_mobil = $_POST['jenis_mobil'];
	foreach($tanggal as $key => $n ) {
			$row = mysql_num_rows(mysql_query("SELECT * FROM trx_pertemuan LEFT JOIN trx_daftar ON trx_daftar.id_daftar = trx_pertemuan.id_daftar WHERE trx_pertemuan.tanggal = '$n' AND trx_pertemuan.jam = '$jam[$key]' AND trx_daftar.kode_mobil = '$kode_mobil'"));
			if($row > 0){
				$msg = 'Mohon maaf jadwal pertemuan bentrok dengan orang lain, coba di waktu yang berbeda';
			}else{
				$msg = 'Mohon maaf jadwal pertemuan bentrok dengan orang lain, coba di waktu yang berbeda.';
				mysql_query("INSERT INTO trx_pertemuan SET id_daftar = '$_POST[id_daftar]', tanggal = '$n', jam = '$jam[$key]', created_by = '$_SESSION[username]', created_at = '$today'");
			}
	}
		header("LOCATION:index.php?menu=form-jadwal&id=$_POST[id_daftar]&msg=$msg");
}

?>
