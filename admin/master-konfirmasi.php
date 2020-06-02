<?php include('koneksi.php');
?>

<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							<li class="active">Data Konfirmasi Pembayaran</li>
						</ul><!-- /.breadcrumb -->


					</div>

					<div class="page-content">
						<?php
						 	if(empty($_GET['msg'])){ }else{ ?>
								<div class="alert alert-success">
								  <strong>Berhasil!</strong> <?= $_GET['msg']; ?>.
								</div>
					 <?php } ?>
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-12">
										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										<div class="table-header">
											Tabel Daftar Konfirmasi Pembayaran
										</div>

										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										<div>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th>No</th>
														<th>Kode daftar</th>
														<th>Nama Customer</th>
														<th>Biaya</th>
														<th>No Rek</th>
														<th>Nama Rek</th>
														<th>Tanggal</th>
														<th>Status</th>
														<th class="hidden-480">Aksi</th>
													</tr>
												</thead>

												<tbody>
                            <?php
														 	$query_konfirmasi = mysql_query("SELECT * FROM trx_konfirmasi ");
															$no = 0;
															while ($row = mysql_fetch_array($query_konfirmasi)) {
																$no++;
																$data_user = mysql_fetch_array(mysql_query("SELECT * FROM trx_user LEFT JOIN mst_customer ON trx_user.id_usr=mst_customer.id WHERE trx_user.username = '$row[created_by]'"));
														?>
															<tr>
																	<td><?= $no; ?></td>
																	<td><?= $row['kode_daftar']; ?></td>
																	<td><?= $data_user['nama']; ?></td>
																	<td align='right'><?= $row['biaya']; ?></td>
																	<td><?= $row['no_rek']; ?></td>
																	<td><?= $row['atas_nama']; ?></td>
																	<td><?= $row['tanggal']; ?></td>
																	<td><?= $row['status']; ?></td>
																	<td>
																		<?php
																			if($row['status'] == 'Request'){
																				echo "<a href='proses-konfirmasi.php?status=Accept&id=$row[id]'>Accept</a>";
																			}else{
																				echo "<a href='proses-konfirmasi.php?status=Request&id=$row[id]'>Request</a>";
																			}

																		?>
																 </td>
															</tr>
														<?php
															}
														?>

												</tbody>
											</table>
										</div>
									</div>
								</div>

								<div id="modal-table" class="modal fade" tabindex="-1">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header no-padding">
												<div class="table-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
														<span class="white">&times;</span>
													</button>
													Results for "Latest Registered Domains
												</div>
											</div>

											<div class="modal-body no-padding">
												<table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
													<thead>
														<tr>
															<th>Domain</th>
															<th>Price</th>
															<th>Clicks</th>

															<th>
																<i class="ace-icon fa fa-clock-o bigger-110"></i>
																Update
															</th>
														</tr>
													</thead>

													<tbody>
														<tr>
															<td>
																<a href="#">ace.com</a>
															</td>
															<td>$45</td>
															<td>3,330</td>
															<td>Feb 12</td>
														</tr>

														<tr>
															<td>
																<a href="#">base.com</a>
															</td>
															<td>$35</td>
															<td>2,595</td>
															<td>Feb 18</td>
														</tr>

														<tr>
															<td>
																<a href="#">max.com</a>
															</td>
															<td>$60</td>
															<td>4,400</td>
															<td>Mar 11</td>
														</tr>

														<tr>
															<td>
																<a href="#">best.com</a>
															</td>
															<td>$75</td>
															<td>6,500</td>
															<td>Apr 03</td>
														</tr>

														<tr>
															<td>
																<a href="#">pro.com</a>
															</td>
															<td>$55</td>
															<td>4,250</td>
															<td>Jan 21</td>
														</tr>
													</tbody>
												</table>
											</div>

											<div class="modal-footer no-margin-top">
												<button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
													<i class="ace-icon fa fa-times"></i>
													Close
												</button>

												<ul class="pagination pull-right no-margin">
													<li class="prev disabled">
														<a href="#">
															<i class="ace-icon fa fa-angle-double-left"></i>
														</a>
													</li>

													<li class="active">
														<a href="#">1</a>
													</li>

													<li>
														<a href="#">2</a>
													</li>

													<li>
														<a href="#">3</a>
													</li>

													<li class="next">
														<a href="#">
															<i class="ace-icon fa fa-angle-double-right"></i>
														</a>
													</li>
												</ul>
											</div>
										</div><!-- /.modal-content -->
									</div><!-- /.modal-dialog -->
								</div>


								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
