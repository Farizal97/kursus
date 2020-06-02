<?php include('koneksi.php');

$nama = "";
$alamat ="";
$no_telp = "";
$foto = "";
$kode = "";



if(isset($_GET['kode'])){
	$data = mysql_query("select * from mst_driver where id='".$_GET['kode']."'") or die(mysql_error());
	while($row = mysql_fetch_array($data)){
		$kode = $row['id'];
		$nama = $row['nama'];
		$alamat = $row['alamat'];
		$no_telp = $row['no_telp'];
		$foto  = $row['foto'];
		}
	}

?>
<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							<li class="active">Data Driver</li>
						</ul><!-- /.breadcrumb -->


					</div>

					<div class="page-content">

						<div class="row">
							<div class="col-xs-12">
					<div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
           <h3>Form Data Driver</h3><br>
           <?php $action = "tambah";
		   	if(isset($_GET['aksi']))
			{
				$action = $_GET['aksi'];
				}
		   ?>
            <form class="form-horizontal" role="form" action="proses-driver.php?aksi=<?php echo $action ?>" method="post" enctype="multipart/form-data">
             <input type="hidden" id="form-field-1" placeholder="Nama Lengkap" class="col-xs-10 col-sm-5" name="kode" value = "<?php echo $kode?>"/>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama Lengkap</label>

                    <div class="col-sm-9">
                        <input type="text" id="form-field-1" placeholder="Nama Lengkap" class="col-xs-10 col-sm-5" name="nama" value = "<?php echo $nama?>"/>
                    </div>
                </div>

				  <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Alamat Driver </label>

                    <div class="col-sm-9">
                    	<input type="text" id="form-field-1" placeholder="Alamat Driver" class="col-xs-10 col-sm-5" name="alamat" value = "<?php echo $alamat?>"/>

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> No Telpon</label>

                    <div class="col-sm-9">
                        <input type="text" id="form-field-1" placeholder="No Telpon" class="col-xs-10 col-sm-5" name="no_telp" value="<?php echo $no_telp;?>" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Foto Driver </label>

                    <div class="col-sm-9">
                    <?php if($foto!=""){?>
                    	<img src="upload/<?php echo $foto;?>" width="200px" />
                    <?php } ?>
										<br>
											<img id="blah" src="" alt="" />
										<br>
                        <input type="file" placeholder="" onchange="readURL(this);" class="col-xs-10 col-sm-5" name="file"/>
                    </div>
                </div>


                              <div class="clearfix form-actions">
                    <div class="col-md-offset-3 col-md-9">

                        <input type="submit" value="Submit" class="btn btn-info">

                        &nbsp; &nbsp; &nbsp;
                        <button class="btn" type="reset">
                            <i class="ace-icon fa fa-undo bigger-110"></i>
                            Reset
                        </button>
                    </div>
                </div>
                </form>



								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
			<script>
			function readURL(input) {
			if (input.files && input.files[0]) {
				 var reader = new FileReader();

				 reader.onload = function (e) {
						 $('#blah')
								 .attr('src', e.target.result)
								 .width(150)
								 .height(200);
				 };

				 reader.readAsDataURL(input.files[0]);
			}
			}
			</script>
