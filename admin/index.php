<?php
session_start();
// Do Something
if(empty($_SESSION['login_user'])){
	header("location: login.php");
}?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Kursus Mengemudi</title>

		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							APLIKASI KURSUS MENGEMUDI
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">


						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="assets/images/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									Administrator
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">

								<li class="divider"></li>

								<li>
									<a href="login-proses.php?logout=1">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>
<div id="notification"></div>
		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li class="">
						<a href="?menu=dashboard">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="?menu=mobil">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Data Mobil </span>
						</a>

						<b class="arrow"></b>
					</li>

                    <li class="">
						<a href="?menu=driver">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Data Driver </span>
						</a>

						<b class="arrow"></b>
					</li>

                    <li class="">
						<a href="?menu=customer">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Data Customer </span>
						</a>

						<b class="arrow"></b>
					</li>

                     <li class="">
						<a href="?menu=paket">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Data Paket </span>
						</a>

						<b class="arrow"></b>
					</li>

					 <li class="">
						<a href="?menu=daftar">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Data Pendaftaran </span>
						</a>

						<b class="arrow"></b>
					</li>

                     <li class="">
						<a href="?menu=konfirmasi">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Data Konfirmasi </span>
						</a>

						<b class="arrow"></b>
					</li>

                     <li class="">
						<a href="?menu=user">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Data User </span>
						</a>

						<b class="arrow"></b>
					</li>

                     <li class="">
						<a href="login-proses.php?logout=1">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Logout </span>
						</a>

						<b class="arrow"></b>
					</li>
				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>
<?php $menu = "";
if(isset($_GET['menu']))
{
	$menu = $_GET['menu'];
	}

	switch($menu){
		case "mobil" : include ("master-mobil.php"); break;
		case "form-mobil" : include ("form-mobil.php"); break;
		case "driver" : include ("master-driver.php"); break;
		case "form-driver" : include ("form-driver.php"); break;
		case "customer" : include ("master-customer.php"); break;
		case "form-customer" : include ("form-customer.php"); break;

		case "paket" : include ("master-paket.php"); break;
		case "form-paket" : include ("form-paket.php"); break;
		case "user" : include ("master-user.php"); break;
		case "form-user" : include ("form-user.php"); break;
		case "daftar" : include ("master-daftar.php"); break;
		case "form-daftar" : include ("form-daftar.php"); break;
		case "konfirmasi" : include ("master-konfirmasi.php"); break;
		case "form-konfirmasi" : include ("form-konfirmasi.php"); break;
		case "jadwal" : include ("master-jadwal.php"); break;
		case "form-jadwal" : include ("form-jadwal.php"); break;
		default : include ("dashboard.php"); break;

 }?>
			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							Copyright @ Zigmaprojects 2017
						</span>


					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->
		<script>
			var refreshId = setInterval(function()
			{
			$('#notification').load('notification.php');
			}, 1000);
		</script>
		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
	</body>
</html>
