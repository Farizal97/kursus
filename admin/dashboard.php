<?php include('koneksi.php');

$today = date('Y-m-d');
$month = date('m');
 ?>
<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">Dashboard</li>
						</ul><!-- /.breadcrumb -->
					</div>
					<div class="page-content">
						<h4>Laporan Pendapatan <input type="button" class="btn"   onClick="printdiv('pedapatan_harian');" value=" Print Harian"><input type="button" class="btn"   onClick="printdiv('pendapatan_bulanan');" value=" Print Bulanan"></h4>
						<div class="hr hr-18 dotted hr-double"></div>
						<div class="row">

              <div id='pedapatan_harian'>
							<div class="col-md-6">
								<table class="table table-bordered">
									<thead>
											<th>Kode Transaksi </th>
                      <th>Nama </th>
											<th>Jenis Mobil </th>
											<th >Total </th>
									</thead>
									<tbody>
										<?php
										 	$query_harian = mysql_query("SELECT * FROM trx_konfirmasi LEFT JOIN trx_daftar ON trx_konfirmasi.id_daftar = trx_daftar.id_daftar LEFT JOIN mst_mobil ON mst_mobil.kode_mobil = trx_daftar.kode_mobil WHERE trx_konfirmasi.status = 'Accept' AND trx_konfirmasi.tanggal = '$today'");
											$no = 0;
                      $sub_total = 0;
											while ($row_harian = mysql_fetch_array($query_harian)) {
												$no++;
                        $sub_total += $row_harian['biaya'];
												?>
													<tr>
														<td><?= $row_harian['kode_daftar']; ?></td>
                            <td><?= $row_harian['created_by']; ?></td>
														<td><?= $row_harian['jenis_mobil']; ?></td>
														<td align='right'>Rp. <?= number_format($row_harian['biaya']); ?></td>
													</tr>
												<?php
											}
										?>
                    <tr>
                      <td align='center' colspan="3"><b>Sub Total</b></td>
                      <td align='right'><b>Rp. <?= number_format($sub_total); ?></b></td>
                    </tr>
									</tbody>
								</table>
							</div>
            </div>
            <div id='pendapatan_bulanan'>
							<div class="col-md-6">
								<table class="table table-bordered">
									<thead>
											<th>Bulan </th>
                      <th>Manual </th>
                      <th>Matic </th>
											<th>Total</th>
									</thead>
									<tbody>
										<?php
                    /*
                      mysql_query("SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));");
										 	$query_bulanan = mysql_query("SELECT *, mst_paket.jenis_mobil AS jenis_mobil, SUM(trx_konfirmasi.biaya) AS biaya, trx_konfirmasi.tanggal AS tanggal, YEAR(trx_konfirmasi.tanggal) AS tahun, MONTH(trx_konfirmasi.tanggal) AS bulan FROM trx_konfirmasi LEFT JOIN trx_daftar ON trx_konfirmasi.id_daftar = trx_daftar.id_daftar LEFT JOIN mst_paket ON mst_paket.id_paket = trx_daftar.id_daftar WHERE trx_konfirmasi.status = 'Accept' GROUP BY DATE_FORMAT(trx_konfirmasi.tanggal, '%Y%m'), mst_paket.jenis_mobil");
                      */
                      mysql_query("SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));");
                      $total_manual = 0;
                      $total_matic = 0;
                      $sub_total = 0;
										 	$query_bulanan = mysql_query("SELECT *,
                            SUM(case when mst_paket.jenis_mobil = 'Manual'
                                     then trx_konfirmasi.biaya
                                     else 0
                                end) AS biaya_manual,
                                SUM(case when mst_paket.jenis_mobil = 'Matic'
                                         then trx_konfirmasi.biaya
                                         else 0
                                    end) AS biaya_matic
                                 FROM trx_konfirmasi
                          LEFT JOIN trx_daftar ON trx_daftar.id_daftar = trx_konfirmasi.id_daftar
                          LEFT JOIN mst_paket ON mst_paket.id_paket = trx_daftar.id_paket
                          WHERE trx_konfirmasi.status = 'Accept'
                          GROUP BY DATE_FORMAT(trx_daftar.tanggal, '%Y%m')");
											$no = 0;
											while ($row_bulanan = mysql_fetch_array($query_bulanan)) {
												$no++;
                        $total_manual += $row_bulanan['biaya_manual'];
                        $total_matic += $row_bulanan['biaya_matic'];
                        $sub_total += $row_bulanan['biaya_manual'] + $row_bulanan['biaya_matic'];
												?>
													<tr>
														<td><?php $date= date_create($row_bulanan['tanggal']); echo date_format($date,"F"); ?> <?= date_format($date,"Y"); ?></td>
                            <td align='right'>Rp. <?php echo number_format($row_bulanan['biaya_manual']); ?></td>
                            <td align='right'>Rp. <?php echo number_format($row_bulanan['biaya_matic']); ?></td>
														<td align='right'><b>Rp. <?= number_format($row_bulanan['biaya_manual'] + $row_bulanan['biaya_matic']); ?></b></td>
													</tr>
												<?php
											}
										?>
                    <tr>
                      <td align='center'><b>Sub Total</b></td>
                      <td align='right'><b>Rp. <?= number_format($total_manual); ?></b></td>
                      <td align='right'><b>Rp. <?= number_format($total_matic); ?></b></td>
                      <td align='right'><b>Rp. <?= number_format($sub_total); ?></b></td>
                    </tr>
									</tbody>
								</table>
							</div>
            </div>
						</div>
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
<script>
  function printdiv(printpage)
  {
    var headstr = "<html><head><title></title></head><body>";
    var footstr = "</body>";
    var newstr = document.all.item(printpage).innerHTML;
    var oldstr = document.body.innerHTML;
    document.body.innerHTML = headstr+newstr+footstr;
    window.print();
    document.body.innerHTML = oldstr;
    return false;
  }
  </script>
