<?php
include ('koneksi.php');
			$today = date('Y-m-d H:i:s');
			mysql_query("INSERT INTO trx_notifikasi SET pesan = 'Jadwal telah di setujui untuk diubah..', username = '$_GET[created_by]', created_at = '$today'");
			mysql_query("UPDATE trx_pertemuan SET status = 'ubah' WHERE id_pertemuan = '$_GET[id]'");
			header("LOCATION:index.php?menu=form-daftar&kode=$_GET[kode]&aksi=ubah");



?>
