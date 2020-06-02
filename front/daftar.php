<?php include('../koneksi.php'); ?>
<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							<li class="active">Pendfataran Online</li>
						</ul><!-- /.breadcrumb -->
					</div>
					<div class="page-content">
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="hr hr-18 dotted hr-double"></div>
								<?php if(isset($_GET['msg'])){?>
								<?php if($_GET['msg'] == "sukses"){?>
								<div class="alert alert-block alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									<p>
										<strong>
											<i class="ace-icon fa fa-check"></i>
											Pendaftaran Berhasil!
										</strong>
										Anda telah melakukan pendaftaran kursus secara online, Silahkan melakukan pembayaran dan konfirmasi pembayaran.
									</p>
								</div>
								<?php
								}else{
									?>
									<div class="alert alert-block alert-danger">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									<p>
										<strong>
											<i class="ace-icon fa fa-check"></i>
											Pendaftaran Gagal!
										</strong>
										Silahkan melakukan pendaftaran ulang, dan lengkapi form isian pendaftaran.
									</p>
								</div>
									<?php
								}
								}?>

								<?php if(isset($_SESSION['login_user'])){
									 	$data_pertermuan = mysql_fetch_array(mysql_query("SELECT * FROM trx_pertemuan WHERE created_by = '$_SESSION[username]' ORDER BY tanggal DESC"));
										$today = date('Y-m-d');
										if($today <= $data_pertermuan['tanggal']){
											?>
											<div class="alert alert-block alert-info">
												<p>
													<strong>
														<i class="ace-icon fa fa-check"></i>
														Anda masih memiliki pertemuan.
													</strong>
													Mohon maaf hanya bisa 1x dalam booking kecuali sudah selesai pertemuan, <a href="index.php?menu=jadwal">silahkan lihat jadwal disini</a>.
												</p>
											<?php
										}else{
									?>
								<center><h3>Formulir Pendfataran</h3><br></center>
								 <form class="form-horizontal" role="form" action="proses-daftar.php?aksi=tambah" method="post">

								<input type="hidden" id="form-field-1" placeholder="id" class="col-xs-10 col-sm-5" name="nama_customer" value = "<?php echo $_SESSION['login_id']?>"/>
								<input type="hidden" id="form-field-1" placeholder="id" class="col-xs-10 col-sm-5" name="status" value = "Daftar"/>

								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Jenis Paket </label>
									<div class="col-sm-9">
										<select id="form-field-1" class="col-xs-10 col-sm-5" name="id_paket" required>
											<option value="">Silahkan pilih Jenis Paket</option>
											<?php $query = mysql_query("select * from mst_paket");
												while($row = mysql_fetch_array($query)){
													if($row['id_paket'] == $_GET['id_paket']){
														$checked = 'selected';
													}else{
														$checked = '';
													}
											?>
											<option value="<?php echo $row['id_paket']?>" <?php echo $checked; ?>><?php echo $row['nama'];?> - Pertemuan <?php echo $row['pertemuan'];?>x [<?php echo $row['jenis_mobil'];?>]</option>
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
								<?php } ?>
								<?php }else{?>
								<div class="alert alert-block alert-info">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>

									<p>
										<strong>
											<i class="ace-icon fa fa-check"></i>
											Request Login!
										</strong>
										Mohon login terlebih dahulu untuk melakukan pendaftaran.
									</p>

								</div>

								<?php } ?>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
