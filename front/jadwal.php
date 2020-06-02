<?php
include('../koneksi.php');
?>
<?php if(isset($_SESSION['username'])){
		error_reporting(0); // Turn off all error reporting
		$sql_daftar = mysql_query("SELECT * FROM trx_daftar WHERE created_by = '$_SESSION[username]' ORDER BY id_daftar DESC");
		$daftar = mysql_fetch_array($sql_daftar);
		$paket = mysql_fetch_array(mysql_query("SELECT * FROM mst_paket WHERE id_paket = '$daftar[id_paket]'"));
		$jadwal = mysql_fetch_array(mysql_query("SELECT * FROM trx_jadwal WHERE id_daftar = '$daftar[id_daftar]'"));
?>
<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">Jadwal Kursus</li>
						</ul><!-- /.breadcrumb -->
					</div>
					<div class="page-content">
						<?php
						 	if(empty($_GET['msg'])){ }else{ ?>
								<div class="alert alert-info">
								  <strong>Info!</strong> <?= $_GET['msg']; ?>.
								</div>
					 <?php } ?>
							<?php $num_jadwal = mysql_num_rows($sql_daftar);
							if($num_jadwal > 0) {?>
						<div class="row">
							<div class="col-xs-12">
								<center><h3>Nama Paket <?= $paket['nama']; ?></h3><br>
									<?= $paket['deskripsi']; ?>
								</center>
								<div class="row">
									<div class="col-xs-12">
										<div class="clearfix">
											<div class="pull-right tableTools-container">

											</div>
										</div>


										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										<div>
											<div class="row">
												<div class="col-md-6">
													<?php
														$sum = mysql_fetch_assoc(mysql_query("SELECT SUM(biaya) AS biaya FROM trx_konfirmasi WHERE status = 'Accept' AND id_daftar = '$daftar[id_daftar]'"));
														$sisa = $paket['biaya'] - $sum['biaya'];
													?>
													<div class="table-header">
														Tabel Latihan <?= $_SESSION['username'] ?>
													</div>
													<table class="table table-bordered">
																<tr>
																		<td>Waktu Booking</td>
																		<td>:</td>
																		<td><?= $jadwal['tanggal']; ?></td>
																</tr>
																<tr>
																		<td>Jumlah Pertemuan</td>
																		<td>:</td>
																		<td><?= $paket['pertemuan']; ?>x</td>
																</tr>
																<tr>
																		<td>Pembayaran</td>
																		<td>:</td>
																		<td>
																			<?php
																					if($sisa == $paket['biaya']){
																						?>
																							<a href="index.php?menu=konfirmasi&id_pembayaran=<?php echo $daftar['id_daftar']; ?>">Silahkan lakukan pembayaran</a>
																						<?php
																					}else{
																						if($sisa == 0){
																								echo "Sudah Lunas. ";
																						}
																								echo "Pembayaran. ";
																						?>

																							<a href="index.php?menu=konfirmasi&id_pembayaran=<?php echo $daftar['id_daftar']; ?>">Lihat invoice</a>
																						<?php
																					}
																				?>
																	</td>
																</tr>
																<tr>
																		<td>Total Biaya</td>
																		<td>:</td>
																		<td align='right'>Rp. <?= $paket['biaya']; ?></td>
																</tr>
																<tr>
																		<td>Total Pembayaran</td>
																		<td>:</td>
																		<td align='right'>Rp. <?= $sum['biaya']; ?></td>
																</tr>
																<tr>
																		<td>Sisa</td>
																		<td>:</td>
																		<td align='right'>Rp. <?= $sisa; ?></td>
																</tr>
																<tr>
																		<td>Status</td>
																		<td>:</td>
																		<td align='Center'><?= $daftar['status']; ?> / <a href='batal-jadwal.php?id_jadwal=<?= $jadwal['id_jadwal']; ?>'>Batalkan?</a></td>
																</tr>
													</table>
												</div>
												<?php
														if($sisa == $paket['biaya']){
															?>
															<?php
														}else{
													?>
													<div class="col-md-6">
														<div class="table-header" >
															Tabel Pertemuan <?= $daftar['id_daftar'] ?>
														</div>
														<table id="dynamic-table" class="table table-striped table-bordered table-hover">
															<thead>
																<tr>
																	<th width="100px">Tanggal</th>
																	<th width="100px">Jam</th>
																	<th>Keterangan</th>
																	<th width="100px">Status</th>
																</tr>
															</thead>

															<tbody>
																	<?php
																		$query_konfirmasi = mysql_query("SELECT * FROM trx_pertemuan WHERE trx_pertemuan.id_daftar= '$daftar[id_daftar]' ORDER BY trx_pertemuan.tanggal ASC");
																		$no = 0;
																		while ($row = mysql_fetch_array($query_konfirmasi)) {
																			$no++;
																			$now_date = date("Y-m-d");
																			if($row['tanggal'] == $now_date){
																				$status = 'Sedang berlangsung';
																			}elseif($row['tanggal'] < $now_date){
																				$status = 'Expired';
																			}else{
																				$status = 'Menunggu';
																			}

																			$h_min_1 = date('Y-m-d', strtotime($row['tanggal'] . ' -1 day'));
																			if($now_date < $h_min_1 && $row['status'] == 'aktif'){
																				$cancel = "<a href='batal-pertemuan.php?&pertemuan_id=$row[id_pertemuan]&aksi=batal&id_daftar=$daftar[id_daftar]'>Batalkan</a>";
																			}else{
																				$cancel = '';
																			}
																			if(empty($_GET['pertemuan_id'])){
																				$pertemuan_id ='';
																			}else{
																				$pertemuan_id = $_GET['pertemuan_id'];
																			}
																			if($row['id_pertemuan'] == $pertemuan_id){
																			?>
																			<form method="POST" action="edit-pertemuan.php">
																				<input type="hidden" name="pertemuan_id" value="<?= $row['id_pertemuan']; ?>">
																			<tr>
																					<td><input type="text" name="tanggal" value="<?= $row['tanggal']; ?>" class="form_datetime form-control" required autocomplete="off"></td>
																					<td>
																						<select name="jam" required>
																							<option value="8" <?php if($row['jam'] == '8'){echo 'selected';} ?>>Jam 08.00</option>
																							<option value="10" <?php if($row['jam'] == '10'){echo 'selected';} ?>>Jam 10.00</option>
																							<option value="13" <?php if($row['jam'] == '13'){echo 'selected';} ?>>Jam 13.00</option>
																							<option value="15" <?php if($row['jam'] == '15'){echo 'selected';} ?>>Jam 15.00</option>
																							<option value="17" <?php if($row['jam'] == '17'){echo 'selected';} ?>>Jam 17.00</option>
																						</select>
																						<input class="btn btn-success btn-sm" type="submit" value="simpan" >
																					</td>
																					<td><p><small>Pertemuan Ke <?= $no; ?></small></p></td>
																					<td><?= $row['status']; ?>  </td>
																			</tr>
																		</form>
																	<?php
																}else{
																	?>
																		<tr>
																				<td><?= $row['tanggal']; ?> <br><small><?= $status ?></small></td>
																				<td align='center'><?= $row['jam']; ?>.00</td>
																				<td><p><?= $row['nama_mobil']; ?></p><p class='small'>Pertemuan Ke <?= $no; ?> <?= $cancel; ?></p></td>
																				<td>
																					<?php
																					if($row['status'] == 'batal'){
																						echo "Menunggu persetujuan";
																					}elseif($row['status'] == 'ubah'){
																						echo "<a class='btn' href='index.php?menu=jadwal&pertemuan_id=$row[id_pertemuan]'>Ubah</a>";
																					}else{
																						echo $row['status'];
																					}
																					?>
																			 </td>
																		</tr>
																	<?php
																		} }
																	?>

															</tbody>
														</table>
														<p><small>*untuk latihan tidak diperkenankan membawa teman atau kerabat di dalam mobil</small></p>
														<p><small>**perubahan pertemuan minimal 1(satu) hari sebelumnya</small></p>
													</div>
													</div>
													<?php
														}
													?>

											</div>
										</div>
									</div>
								</div>
								</div><!-- /.col -->
							</div><!-- /.row -->
						<?php }else{
							?>
							<br>
							<div class="alert alert-block alert-warning">
								<button type="button" class="close" data-dismiss="alert">
									<i class="ace-icon fa fa-times"></i>
								</button>
								<p>
									<strong>
										Mohon maaf
									</strong>
									Anda tidak pernah booking sebelumnya, silahkan pilih paket terlebih dahulu.
								</p>
							</div>
							<?php
						} ?>
							<?php }else{ ?>
								<br>
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
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
			<script type="text/javascript">
			    $(".form_datetime").datetimepicker({
						autoclose: true,
						minView: 2,
						format: 'yyyy-mm-dd'
					});
			</script>
			<script>
			function printDiv(divName) {
				 var printContents = document.getElementById(divName).innerHTML;
				 var originalContents = document.body.innerHTML;

				 document.body.innerHTML = printContents;

				 window.print();

				 document.body.innerHTML = originalContents;
			}
			</script>
