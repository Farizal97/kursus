<?php
include ('../koneksi.php');
session_start();
	if(isset($_GET['aksi'])){
		if($_GET['aksi'] == 'batal'){
			mysql_query("UPDATE trx_pertemuan SET status = 'batal' WHERE id_pertemuan = '$_GET[pertemuan_id]'");
			$link = "index.php?menu=form-daftar&kode=$_GET[id_daftar]";
			$pesan = $_SESSION['username'].' telah melakukan pembatalan';
			mysql_query("INSERT INTO trx_notifikasi_admin SET pesan='$pesan', link = '$link'");
			header("LOCATION:index.php?menu=jadwal");
		}
	}


?>
