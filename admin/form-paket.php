<?php include('koneksi.php');

$id = "";
$nama ="";
$deskripsi = "";
$biaya = "";
$mobil1 = "";
$mobil2 = "";
$mobil3 = "";
$pertemuan = "";
$jenis_mobil = "";


if(isset($_GET['kode'])){
	$data = mysql_query("select *, a.jenis_mobil AS jenis_mobil, a.id_paket, a.nama,a.deskripsi,a.biaya, b.nama_mobil as mobil1, c.nama_mobil as mobil2 ,d.nama_mobil as mobil3
														  from mst_paket a
														  left join mst_mobil b on a.kode_mobil_1=b.kode_mobil
														  left join mst_mobil c on a.kode_mobil_2=c.kode_mobil
														  left join mst_mobil d on a.kode_mobil_3=d.kode_mobil
														  where a.id_paket='".$_GET['kode']."'") or die(mysql_error());
	while($row = mysql_fetch_array($data)){
		$id = $row['id_paket'];
		$nama = $row['nama'];
		$deskripsi = $row['deskripsi'];
		$biaya  = $row['biaya'];
		$pertemuan  = $row['pertemuan'];
		$jenis_mobil = $row['jenis_mobil'];
		$mobil1  = $row['mobil1'];
		$mobil2  = $row['mobil2'];
		$mobil3  = $row['mobil3'];
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

							<li class="active">Data paket</li>
						</ul><!-- /.breadcrumb -->


					</div>

					<div class="page-content">

						<div class="row">
							<div class="col-xs-12">
					<div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
           <h3>Form Data Paket</h3><br>
           <?php $action = "tambah";
		   	if(isset($_GET['aksi']))
			{
				$action = $_GET['aksi'];
				}
		   ?>
            <form class="form-horizontal" role="form" action="proses-paket.php?aksi=<?php echo $action ?>" method="post">

                        <input type="hidden" id="form-field-1" placeholder="id" class="col-xs-10 col-sm-5" name="id" value = "<?php echo $id?>"/>


												<div class="form-group">
			                     <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Transmisi</label>

			                     <div class="col-sm-9">
			                     	<select id="form-field-1" class="col-xs-10 col-sm-5" placeholder="Jenis mobil" name="jenis_mobil">
			                         	<option value="Manual" <?php if($jenis_mobil == "Manual"){ echo "selected";}?>>Manual (M/T) </option>
																<option value="Matic" <?php if($jenis_mobil == "Matic"){ echo "selected";}?>>Matic (A/T) </option>
			                         </select>
			                     </div>
			                 </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama Paket </label>

                    <div class="col-sm-9">
                        <input type="text" id="form-field-1" placeholder="Nama Paket" class="col-xs-10 col-sm-5" name="nama" value="<?php echo $nama;?>" required/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Deskripsi Paket </label>

                    <div class="col-sm-9">
                        <input type="text" id="form-field-1" placeholder="Deskripsi paket" class="col-xs-10 col-sm-5" name="deskripsi" value="<?php echo $deskripsi;?>" required/>

                    </div>
                </div>

 <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Biaya Paket</label>

                    <div class="col-sm-9">
                        <input type="text" id="form-field-1" placeholder="Nominal biaya" class="col-xs-10 col-sm-5" name="biaya" value="<?php echo $biaya;?>" required/>
                    </div>
                </div>
								<div class="form-group">
							                     <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Jumlah Pertemuan</label>

							                     <div class="col-sm-9">
							                         <input type="text" id="form-field-1" placeholder="Pertemuan" class="col-xs-10 col-sm-5" name="pertemuan" value="<?php echo $pertemuan;?>" required/>
							                     </div>
							                 </div>
               <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Mobil 1 </label>

                    <div class="col-sm-9">
                    	<select id="form-field-1" class="col-xs-10 col-sm-5" placeholder="Jenis mobil" name="kode_mobil_1" required>
                        	<option value="">Jenis mobil</option>
                            <?php $query = mysql_query("SELECT * FROM mst_mobil ORDER BY jenis_mobil");
								while($row = mysql_fetch_array($query)){
							?>
                            <option value="<?php echo $row['kode_mobil']?>" <?php if($mobil1==$row['nama_mobil']){ echo "selected";}?>><?php echo $row['nama_mobil'];?> - <?php echo $row['jenis_mobil']?></option>
                            <?php } ?>

                        </select>

                    </div>
                </div>

                 <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Mobil 2 </label>

                    <div class="col-sm-9">
                    	<select id="form-field-1" class="col-xs-10 col-sm-5" placeholder="Jenis mobil" name="kode_mobil_2" >
                        	<option value="">Jenis mobil</option>
                            <?php $query = mysql_query("SELECT * FROM mst_mobil ORDER BY jenis_mobil");
								while($row = mysql_fetch_array($query)){
							?>
                            <option value="<?php echo $row['kode_mobil']?>" <?php if($mobil2==$row['nama_mobil']){ echo "selected";}?>><?php echo $row['nama_mobil'];?> - <?php echo $row['jenis_mobil']?></option>
                            <?php } ?>

                        </select>

                    </div>
                </div>

                 <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Mobil 3</label>

                    <div class="col-sm-9">
                    	<select id="form-field-1" class="col-xs-10 col-sm-5" placeholder="Jenis mobil" name="kode_mobil_3" >
                        	<option value="">Jenis mobil</option>
                            <?php $query = mysql_query("SELECT * FROM mst_mobil ORDER BY jenis_mobil");
								while($row = mysql_fetch_array($query)){
							?>
                            <option value="<?php echo $row['kode_mobil']?>" <?php if($mobil3==$row['nama_mobil']){ echo "selected";}?>><?php echo $row['nama_mobil'];?> - <?php echo $row['jenis_mobil']?></option>
                            <?php } ?>

                        </select>

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
