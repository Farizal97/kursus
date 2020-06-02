<?php
include ('../koneksi.php');
$data = mysql_fetch_array(mysql_query("SELECT * FROM trx_notifikasi_admin WHERE id = '$_GET[id]'"));
mysql_query("DELETE FROM trx_notifikasi_admin WHERE id ='$_GET[id]'");
header("LOCATION:$data[link]");
?>
