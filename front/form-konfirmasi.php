<?php include('../koneksi.php');

$id = "";
$id_daftar ="";
$tanggal = "";
$biaya = "";
$no_rek = "";
$atas_nama = "";
$status = "";
$id_user = "";


?>
<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							<li class="active">Data Konfirmasi</li>
						</ul><!-- /.breadcrumb -->


					</div>

					<div class="page-content">

						<div class="row">
							<div class="col-xs-12">
					<div class="row">
					<?php if(isset($_GET['msg'])){?>
								<?php if($_GET['msg'] == "sukses"){?>
								<div class="alert alert-block alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>

									<p>
										<strong>
											<i class="ace-icon fa fa-check"></i>
											Konfirmasi Berhasil!
										</strong>
										Anda telah melakukan konfirmasi pembayaran kursus secara online.
									</p>


								</div>
								<?php
								}else{
									?>
									<div class="alert alert-block alert-info">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>

									<p>
										<strong>
											<i class="ace-icon fa fa-check"></i>
											Berhasil,
										</strong>
										Silahkan melakukan konfirmasi ulang, dan lengkapi form isian konfirmasi.
									</p>


								</div>
									<?php
								}
								}?>

        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
				<?php if(isset($_SESSION['login_user'])){?>
           <?php $action = "tambah";
		   	if(isset($_GET['aksi']))
			{
				$action = $_GET['aksi'];
				}
		   ?>
			 	<div class="row">

					<?php
						$data = mysql_fetch_array(mysql_query("SELECT * FROM trx_daftar LEFT JOIN mst_paket ON trx_daftar.id_paket = mst_paket.id_paket WHERE trx_daftar.id_daftar = '$_GET[id_pembayaran]'"));
					?>
					<?php
						$sum = mysql_fetch_assoc(mysql_query("SELECT SUM(biaya) AS biaya FROM trx_konfirmasi WHERE status = 'Accept' AND id_daftar = '$_GET[id_pembayaran]'"));
						$sisa = $data['biaya'] - $sum['biaya'];
						if($sisa > 0){
					?>
						<div class="col-md-6">
							<h3>Form Data Konfirmasi</h3><br>
							<div class="panel panel-default">
							  <div class="panel-body">Untuk pembayaran transfers Via BCA <b>2820170027</b> a/n <b>Andy Setiawan </b></div>
							</div>
							<form class="form-horizontal" role="form" action="proses-konfirmasi.php?aksi=<?php echo $action ?>" method="post">

	                        <input type="hidden" id="form-field-1" placeholder="id" class="form-control" name="id_daftar" value = "<?php echo $_GET['id_pembayaran'];?>"/>

					<div class="form-group">
	                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Kode Transaksi </label>

	                    <div class="col-sm-9">
	                        <input type="text" id="form-field-1" placeholder="Kode Daftar" class="form-control" name="kode_daftar" value="<?php echo 'KD'.date('mdh').''.rand(1,10).''.$_GET['id_pembayaran'];?>" readonly/>

	                    </div>
											<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> </label>
											<div class="col-sm-9">
	                        <small><p>Melalui transfer bank, gunakan kode transaksi adalah no referensi.</p></small>
	                    </div>
	                </div>

					 <div class="form-group">
	                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama</label>
	                    <div class="col-sm-9">
	                        <input type="text" id="form-field-1" disabled="true" placeholder="Username" class="form-control" name="username" value="<?php echo $_SESSION['login_user'];?>" />

	                    </div>
	                </div>
	                <div class="form-group">
	                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tanggal </label>
	                    <div class="col-sm-9">
	                        <input type="text" id="form-field-1" placeholder="Format dd/mm/yyyy" class="form-control" name="tanggal" value="<?php echo $tanggal;?>" required/>
	                    </div>
	                </div>
					<div class="form-group">
	                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Jumlah Transfer</label>
	                    <div class="col-sm-9">
	                        <input type="text" id="form-field-1" placeholder="Jumlah Transfer" class="form-control" name="biaya" value="<?php echo $biaya;?>" required/>
	                    </div>
	                </div>

					<div class="form-group">
	                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nomor Rekening</label>

	                    <div class="col-sm-9">
	                        <input type="text" id="form-field-1" placeholder="Nomor Rekening" class="form-control" name="no_rek" value="<?php echo $no_rek;?>" required/>
	                    </div>
	                </div>

					<div class="form-group">
	                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Atas nama Rekening</label>

	                    <div class="col-sm-9">
	                        <input type="text" id="form-field-1" placeholder="Nama Rekening" class="form-control" name="atas_nama" value="<?php echo $atas_nama;?>" required/>
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
								</div>
								<?php }else{
							?>
								<div class="col-md-3">
								</div>
							<?php
								} ?>
								<input type="button" onclick="printDiv('printInvoice')" value="Cetak" />
								<div class="col-md-6" id='printInvoice'>
									 <h3>Invoices Pembayaran </h3><br>
									<!-- incoices -->
									<style>
									      .invoice-head td {
									        padding: 0 8px;
									      }
									      .container {
									      	padding-top:30px;
									      }
									      .invoice-body{
									      	background-color:transparent;
									      }
									      .invoice-thank{
									      	margin-top: 60px;
									      	padding: 5px;
									      }
									      address{
									      	margin-top:15px;
									      }
						    </style>
								<table class="invoice-head">
		    				<tbody>
		    					<tr>
		    						<td class="pull-right"><strong>Pelanggan #</strong></td>
		    						<td><?= $_SESSION['login_user']; ?></td>
		    					</tr>
		    					<tr>
		    						<td class="pull-right"><strong>Invoice #</strong></td>
		    						<td><?= $_GET['id_pembayaran']; ?></td>
		    					</tr>
		    					<tr>
		    						<td class="pull-right"><strong>Tanggal</strong></td>
		    						<td><?= date('d M Y') ?></td>
		    					</tr>
		    					<tr>
		    						<td class="pull-right"><strong>Status Pembayaran</strong></td>
		    						<td><?php if($sisa == 0){ echo 'Lunas';}else{ echo 'Belum lunas';} ?></td>
		    					</tr>
		    				</tbody>
		    			</table>
							<hr>
							<small>*Untuk pembayaran yang masuk setelah konfirmasi.</small><br>

							<table class="table table-bordered">
								<thead>
									<tr>

										<th >Description</th>
										<th width='150px'>Tanggal</th>
										<th width='150px'>Total</th>
									</tr>
								</thead>
								<tbody>
									<?php
									 	$query_pembayaran = mysql_query("SELECT * FROM trx_konfirmasi WHERE id_daftar = '$_GET[id_pembayaran]'");
										while ($row_pembayaran = mysql_fetch_array($query_pembayaran)) {
											$nama_paket = mysql_fetch_array(mysql_query("SELECT * FROM trx_daftar LEFT JOIN mst_paket ON trx_daftar.paket = mst_paket.id WHERE trx_daftar.id = '$_GET[id_pembayaran]'"));
									?>
									<tr>
										<td><?= $row_pembayaran['kode_daftar']; ?> - Pembayaran untuk <?= $nama_paket['nama']; ?> (<?= $row_pembayaran['status']; ?>)</td>
										<td><?= $row_pembayaran['tanggal']; ?></td>
										<td align='right'>Rp. <?= number_format($row_pembayaran['biaya'],2,",","."); ?></td>
									</tr>
									<?php
										}
									?>
									<tr>
										<td></td>
										<td><strong>Total Biaya</strong></td>
										<td align='right'><strong>Rp. <?= number_format($data['biaya'],2,",","."); ?></strong></td>
									</tr>
									<tr>
										<?php
										$sum = mysql_fetch_assoc(mysql_query("SELECT SUM(biaya) AS biaya FROM trx_konfirmasi WHERE status = 'Accept' AND id_daftar = '$_GET[id_pembayaran]'"));
										?>
										<td></td>
										<td><strong>Total Pembayaran</strong></td>
										<td align='right'><strong>Rp. <?= number_format($sum['biaya'],2,",","."); ?></strong></td>
									</tr>
									<tr>
										<td></td>
										<td><strong>Sisa</strong></td>
										<td align='right'><strong>Rp. <?= number_format($data['biaya']-$sum['biaya'],2,",","."); ?></strong></td>
									</tr>
								</tbody>
						</table>
						<small>**Mohon menunggu 1x24 jam, pembayaran anda sedang kami cek</small>
		    <!--[if lt
									<!-- end invoices -->
								</div>
				</div>
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
			<script>
			function printDiv(divName) {
				 var printContents = document.getElementById(divName).innerHTML;
				 var originalContents = document.body.innerHTML;

				 document.body.innerHTML = printContents;

				 window.print();

				 document.body.innerHTML = originalContents;
			}
			</script>
