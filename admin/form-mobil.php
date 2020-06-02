<?php include('koneksi.php');

$kode = "";
$jenis ="";
$nama = "";
$tahun = "";



if(isset($_GET['kode'])){
	$data = mysql_query("select * from mst_mobil where kode_mobil='".$_GET['kode']."'") or die(mysql_error());
	while($row = mysql_fetch_array($data)){
		$kode = $row['kode_mobil'];
		$jenis = $row['jenis_mobil'];
		$nama = $row['nama_mobil'];
		$tahun  = $row['tahun_mobil'];
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

							<li class="active">Data Mobil</li>
						</ul><!-- /.breadcrumb -->

						
					</div>

					<div class="page-content">
						
						<div class="row">
							<div class="col-xs-12">
					<div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
           <h3>Form Data Mobil</h3><br>
           <?php $action = "tambah";
		   	if(isset($_GET['aksi']))
			{
				$action = $_GET['aksi'];
				}
		   ?>
            <form class="form-horizontal" role="form" action="proses-mobil.php?aksi=<?php echo $action ?>" method="post">
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Kode Mobil </label>

                    <div class="col-sm-9">
                        <input type="text" id="form-field-1" placeholder="Kode Mobil" class="col-xs-10 col-sm-5" name="kode" value = "<?php echo $kode?>"/>
                    </div>
                </div>

				  <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Jenis Mobil </label>

                    <div class="col-sm-9">
                    	<select id="form-field-1" class="col-xs-10 col-sm-5" placeholder="Jenis Mobil" name="jenis" >
                        	<option>Jenis Mobil</option>
                            <option value="Matic" <?php if($jenis=="Matic"){ echo "selected";}?>>Matic</option>
                            <option value="Manual" <?php if($jenis=="Manual"){ echo "selected";}?>>Manual</option>
                        </select>
                        
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama Mobil </label>

                    <div class="col-sm-9">
                        <input type="text" id="form-field-1" placeholder="Nama Mobil" class="col-xs-10 col-sm-5" name="nama" value="<?php echo $nama;?>" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tahun Mobil </label>

                    <div class="col-sm-9">
                        <input type="text" id="form-field-1" placeholder="Tahun Mobil" class="col-xs-10 col-sm-5" name="tahun" value="<?php echo $tahun;?>" />
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