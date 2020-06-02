<?php
include ('koneksi.php');


$path = "upload/";
if($_GET['aksi'] == "tambah"){
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$no_telp = $_POST['no_telp'];
	$no_ktp = $_POST['no_ktp'];
	
	$namafile = $_FILES['file']['name'];
	$tmpname = $_FILES['file']['tmp_name'];
	
	if($tmpname != ""){
			move_uploaded_file($tmpname, $path.$namafile);
			mysql_query("insert into mst_customer value(0,'$nama', '$alamat', '$no_telp','$no_ktp', '$namafile')");
		}else{
			mysql_query("insert into mst_customer value(0,'$nama', '$alamat', '$no_telp', '$no_ktp','')");
		}
	

}else if($_GET['aksi'] == "ubah"){
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$no_telp = $_POST['no_telp'];
	$no_ktp = $_POST['no_ktp'];
	
	$namafile = $_FILES['file']['name'];
	$tmpname = $_FILES['file']['tmp_name'];
	
	if($tmpname != ""){
			move_uploaded_file($tmpname, $path.$namafile);
			mysql_query("update mst_customer set nama='$nama', alamat='$alamat', no_telp='$no_telp',no_ktp='$no_ktp', foto='$namafile' where id=".$_POST['kode']);
		}else{
			mysql_query("update mst_customer set nama='$nama', alamat='$alamat', no_telp='$no_telp',no_ktp='$no_ktp' where id=".$_POST['kode']);
		}
	
}else if($_GET['aksi'] == "hapus"){
	$kode = $_GET['kode'];
	mysql_query("delete from mst_customer where id='$kode'");

}


?>

<script>
window.location = 'index.php?menu=customer';
</script>