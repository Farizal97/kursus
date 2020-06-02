<?php
include ('koneksi.php');


$path = "upload/";
if($_GET['aksi'] == "tambah"){
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$no_telp = $_POST['no_telp'];
	
	$namafile = $_FILES['file']['name'];
	$tmpname = $_FILES['file']['tmp_name'];
	
	if($tmpname != ""){
			move_uploaded_file($tmpname, $path.$namafile);
			mysql_query("insert into mst_driver value(0,'$nama', '$alamat', '$no_telp', '$namafile')");
		}else{
			mysql_query("insert into mst_driver value(0,'$nama', '$alamat', '$no_telp', '')");
		}
	

}else if($_GET['aksi'] == "ubah"){
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$no_telp = $_POST['no_telp'];
	
	$namafile = $_FILES['file']['name'];
	$tmpname = $_FILES['file']['tmp_name'];
	
	if($tmpname != ""){
			move_uploaded_file($tmpname, $path.$namafile);
			mysql_query("update mst_driver set nama='$nama', alamat='$alamat', no_telp='$no_telp', foto='$namafile' where id=".$_POST['kode']);
		}else{
			mysql_query("update mst_driver set nama='$nama', alamat='$alamat', no_telp='$no_telp' where id=".$_POST['kode']);
		}
	
}else if($_GET['aksi'] == "hapus"){
	$kode = $_GET['kode'];
	mysql_query("delete from mst_driver where id='$kode'");

}


?>

<script>
window.location = 'index.php?menu=driver';
</script>