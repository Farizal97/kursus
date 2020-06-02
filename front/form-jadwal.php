<?php include('../koneksi.php');

$id = "";
$nama ="";
$username = "";
$password = "";



if(isset($_GET['kode'])){
	$data = mysql_query("select a.*, b.nama as nama_customer from trx_user a, mst_customer b where a.id_usr=b.id
						and a.id_usr=".$_GET['kode']."") or die(mysql_error());
	while($row = mysql_fetch_array($data)){
		$id = $row['id'];
		$nama = $row['nama_customer'];
		$username = $row['username'];
		$password  = $row['password'];

		}
	}

$daftar = mysql_fetch_array(mysql_query("SELECT * FROM trx_daftar WHERE id_daftar = '$_GET[id]'"));
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

							<li class="active">Data Jadwal Kursus</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">

						<div class="row">
							<div class="col-xs-12">
					<div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
           <h3>Form Jadwal Kursus</h3><br>
           <?php $action = "tambah";
		   	if(isset($_GET['aksi']))
			{
				$action = $_GET['aksi'];
				}
		   ?>
			 	<div class="row">
					<div class="col-xs-7">
						<form class="form-horizontal" role="form" action="proses-jadwal.php?aksi=tambah" method="post">
								<input type="hidden" value="<?php echo $paket['id'] ?>" name="paket">
								<input type="hidden" value="<?php echo $_GET['id'] ?>" name="id_daftar">
								<input type="hidden" value="<?php echo $jadwal['id'] ?>" name="id_jadwal">
								<input type="hidden" value="<?php echo $daftar['jenis_mobil'] ?>" name="jenis_mobil">
								<input type="hidden" id="form-field-1" placeholder="id" class="col-xs-10 col-sm-5" name="id" value = "<?php echo $_GET['id']?>"/>
								<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Jenis Paket</label>
										<div class="col-sm-9">
												<input type="text" id="form-field-1" disabled="true" placeholder="Username" class="form-control" name="username" value="<?php echo $paket['nama'];?>" />
										</div>
								</div>
								<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Deskripsi</label>
										<div class="col-sm-9">
												<input type="text" id="form-field-1" disabled="true" placeholder="Username" class="form-control" name="username" value="<?php echo $paket['deskripsi'];?>" />
										</div>
								</div>
								<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Kendaraan</label>
									<div class="col-sm-5">
										<?php
											$data_kode_mobil = mysql_fetch_array(mysql_query("SELECT *,a.jenis_mobil as jenis1,b.jenis_mobil as jenis2, c.jenis_mobil as jenis3, b.nama_mobil as mobil1, c.nama_mobil as mobil2 ,d.nama_mobil as mobil3
														from mst_paket a
												left join mst_mobil b on a.kode_mobil_1=b.kode_mobil
												left join mst_mobil c on a.kode_mobil_2=c.kode_mobil
												left join mst_mobil d on a.kode_mobil_3=d.kode_mobil WHERE a.id_paket = '$paket[id_paket]' "));
										?>
										<select name="kode_mobil" class="form-control" required>
											<option value="">Pilih Kendaraan </option>
											<?php if($data_kode_mobil['kode_mobil_1'] == 'Jenis mobil'){ }else{ ?> <option value="<?php echo $data_kode_mobil['kode_mobil_1']; ?>" <?php if($daftar['kode_mobil'] == $data_kode_mobil['kode_mobil_1']) echo 'selected'; ?>><?php echo $data_kode_mobil['mobil1']; ?> - <?php echo $data_kode_mobil['jenis1']; ?></option> <?php } ?>
											<?php if($data_kode_mobil['kode_mobil_2'] == ''){ }else{ ?> <option value="<?php echo $data_kode_mobil['kode_mobil_2']; ?>" <?php if($daftar['kode_mobil'] == $data_kode_mobil['kode_mobil_2']) echo 'selected'; ?>><?php echo $data_kode_mobil['mobil2']; ?> - <?php echo $data_kode_mobil['jenis2']; ?></option> <?php } ?>
											<?php if($data_kode_mobil['kode_mobil_3'] == ''){ }else{ ?> <option value="<?php echo $data_kode_mobil['kode_mobil_3']; ?>" <?php if($daftar['kode_mobil'] == $data_kode_mobil['kode_mobil_3']) echo 'selected'; ?>><?php echo $data_kode_mobil['mobil3']; ?> - <?php echo $data_kode_mobil['jenis3']; ?></option> <?php } ?>
										</select>
									</div>
									<label class="col-sm-1 control-label no-padding-right" for="form-field-1">Biaya</label>
									<div class="col-sm-3">
										<input type="text" id="form-field-1" disabled="true" placeholder="Username" class="form-control " name="username" value="<?php echo $paket['biaya'];?>" />
									</div>
								</div>
								<?php
								$sql_pertemuan = mysql_query("SELECT * FROM trx_pertemuan WHERE id_daftar = '$_GET[id]'");
								$n= 0;
								while ($row = mysql_fetch_array($sql_pertemuan)) {
									$n++;
						?>
						<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Pertemuan </label>
								<div class="col-sm-7">
									<input type="text" value="<?= $row['tanggal'] ?>" readonly class=" form-control" required autocomplete="off">
								</div>
								<div class="col-sm-2">
									<select disabled class=" form-control">
										<option value="">Jam <?= $row['jam'] ?>.00 </option>
									</select>
								</div>
						</div>
						<?php
								}
						?>
								<?php
									for ($x = 1; $x <= $paket['pertemuan']-$n; $x++) {
										?>

								<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Pertemuan </label>
										<div class="col-sm-7">
											<input type="text" name="tanggal[<?php echo $x; ?>]" class="form_datetime form-control" required autocomplete="off">
										</div>
										<div class="col-sm-2">
											<select name="jam[<?php echo $x; ?>]" class="form-control" required>
												<option value="">Pilih Jam </option>
												<option value="8">Jam 08.00</option>
												<option value="10">Jam 10.00</option>
												<option value="13">Jam 13.00</option>
												<option value="15">Jam 15.00</option>
												<option value="17">Jam 17.00</option>
											</select>
										</div>
								</div>
								<?php
									}
									?>
									<?php
									if($paket['pertemuan']-$n == 0){

										?>
										<div class="col-md-offset-3 col-md-12">
												<a class="btn btn-success" href="index.php?menu=konfirmasi&id_pembayaran=<?= $_GET['id']; ?>">Selanjutnya Pembayaran</a>
										</div>
										<?php
									}else{
										?>
											<?php
											 	if(empty($_GET['msg'])){ }else{ ?>
													<div class="alert alert-danger">
													  <strong>Gagal!</strong> <?= $_GET['msg']; ?>.
													</div>
										 <?php } ?>
										<div class="col-md-offset-3 col-md-12">
												<input type="submit" value="Submit" class="btn btn-info">
												<button class="btn" type="reset">
														<i class="ace-icon fa fa-undo bigger-110"></i>
														Reset
												</button>
										</div>
									<?php
									}
									?>

								</form>
					</div>
					<div class="col-xs-5">
							<form method="GET">
								<input type="hidden" name="menu" value="<?= $_GET['menu']; ?>">
								<input type="hidden" name="id" value="<?= $_GET['id']; ?>">
							<div class="form-group">
									<div class="col-sm-4">
										<input type="text" name="tanggal" class="form_datetime form-control" required autocomplete="off">
									</div>
									<div class="col-sm-3">
										<select name="jenis_mobil" class="form-control" required>
											<option value="matic">Matic</option>
											<option value="manual">Manual</option>
										</select>
									</div>
									<div class="col-sm-3">
										<select name="jam" class="form-control" required>
											<option value="">Pilih Jam </option>
											<option value="8">Jam 08.00</option>
											<option value="10">Jam 10.00</option>
											<option value="13">Jam 13.00</option>
											<option value="15">Jam 15.00</option>
											<option value="17">Jam 17.00</option>
										</select>
									</div>
									<div class="col-sm-2">
										<input type="submit" class="btn" value="Filter">
									</div>
							</div>
						</form>
						<table id="dynamic-table" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th>No</th>
									<th>Kendaraan</th>
									<th>Jenis Mobil</th>
									<th>Tanggal</th>
									<th>Jam</th>
								</tr>
							</thead>
								<tbody>
									<?php
										if(empty($_GET['tanggal'])){
											$query = mysql_query("SELECT *, trx_pertemuan.tanggal AS tanggal_pertemuan FROM trx_pertemuan LEFT JOIN trx_daftar ON trx_daftar.id_daftar = trx_pertemuan.id_daftar ORDER BY trx_pertemuan.tanggal DESC LIMIT 0,8 ");
										}else{
											$query = mysql_query("SELECT *, trx_pertemuan.tanggal AS tanggal_pertemuan FROM trx_pertemuan LEFT JOIN trx_daftar ON trx_daftar.id_daftar = trx_pertemuan.id_daftar LEFT JOIN mst_mobil ON mst_mobil.kode_mobil = trx_daftar.kode_mobil WHERE trx_pertemuan.tanggal = '$_GET[tanggal]' AND trx_pertemuan.jam = '$_GET[jam]' AND mst_mobil.jenis_mobil = '$_GET[jenis_mobil]' ORDER BY trx_pertemuan.tanggal DESC");
										}

										$no = 0;
										while ($row=mysql_fetch_array($query)) {
											$mobil = mysql_fetch_array(mysql_query("SELECT * FROM mst_mobil WHERE kode_mobil = '$row[kode_mobil]'"));
											# code...
											$no++;
											?>
											<tr>
												<td><?= $no; ?></td>
												<td><?= $mobil['nama_mobil']; ?></td>
												<td><?= $mobil['jenis_mobil']; ?></td>
												<td><?= $row['tanggal_pertemuan']; ?></td>
												<td><?= $row['jam']; ?>.00</td>
											</tr>
											<?php } ?>
							</tbody>
						</table>
					</div>

						<div class="page-header">
						  *Jadwal yang terisi, dengan paket ini di mohon untuk tidak memilih waktu yang sama.
						</div>
				</div>								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
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
