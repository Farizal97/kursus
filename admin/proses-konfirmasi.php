<?php
include ('koneksi.php');
mysql_query("UPDATE trx_konfirmasi SET status = '$_GET[status]' WHERE id = '$_GET[id]'");
$data = mysql_fetch_array(mysql_query("SELECT * FROM trx_konfirmasi WHERE id = '$_GET[id]'"));
$today = date("Y-m-d H:i:s");
mysql_query("INSERT INTO trx_notifikasi SET pesan = 'Pembayaran dengan kode transaksi $data[kode_daftar] sudah di $data[status], terima kasih.', created_at = '$today', username = '$data[created_by]'");
$msg = "Pendaftaran berhasil update menjadi $_GET[status]";
header("LOCATION:index.php?menu=konfirmasi&msg=$msg");
