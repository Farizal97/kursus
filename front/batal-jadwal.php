<?php
include ('../koneksi.php');

//edited-2017-07-25 by eep-terbaik.
$data_jadwal = mysql_fetch_array(mysql_query("SELECT * FROM trx_jadwal WHERE id_jadwal = '$_GET[id_jadwal]'"));

$jadwal = $data_jadwal['tanggal'];
$add_one_day = date('Y-m-d H:i:s', strtotime($jadwal . ' +1 day'));

if($add_one_day > $jadwal ){
  mysql_query("DELETE FROM trx_pertemuan WHERE id_daftar = '$data_jadwal[id_daftar]'");
  mysql_query("DELETE FROM trx_jadwal WHERE id_daftar = '$data_jadwal[id_daftar]'");
  mysql_query("DELETE FROM trx_daftar WHERE id_daftar = '$data_jadwal[id_daftar]'");

  header("LOCATION:index.php?menu=daftar");
}else{
  header("LOCATION:index.php?menu=jadwal&msg=Mohon maaf anda bisa melakukan pembatalan di $add_one_day terima kasih.");
}
