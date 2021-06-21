<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	<title>Duta Ryana - Admin</title>
	<!-- General CSS Files -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>otika/assets/css/app.min.css">
	<!-- Template CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>otika/assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>otika/assets/bundles/prism/prism.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>otika/assets/css/components.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>otika/assets/bundles/datatables/datatables.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>otika/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
	<!-- Custom style CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>otika/assets/css/custom.css">
	<link rel='shortcut icon' type='image/x-icon' href='otika/assets/img/favicon.ico' />
	<link rel="stylesheet" href="<?php echo base_url(); ?>leaflet.css" />
	<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
</head>



<body>
	<div class="loader"></div>
	<div id="app">
		<div class="main-wrapper main-wrapper-1">
			<div class="navbar-bg"></div>
			<nav class="navbar navbar-expand-lg main-navbar sticky">
				<div class="form-inline mr-auto">
					<ul class="navbar-nav mr-3">
						<li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
						<li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
								<i data-feather="maximize"></i>
							</a></li>
					</ul>
				</div>
				<ul class="navbar-nav navbar-right">
					<li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="<?php echo base_url(); ?>otika/assets/img/userbaru.png" class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
						<div class="dropdown-menu dropdown-menu-right pullDown">
							<div class="dropdown-divider"></div>
							<a href="<?php echo base_url() . 'login/logout' ?>" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
								Logout
							</a>
						</div>
					</li>
				</ul>
			</nav>
			<div class="main-sidebar sidebar-style-2">
				<aside id="sidebar-wrapper">
				
					<div class="sidebar-brand">
						<a href="index.html"> <img alt="image" src="<?php echo base_url(); ?>otika/assets/img/logo.png" class="header-logo" /> <span class="logo-name">Duta Ryana</span></a>
					</div>      
					<ul class="sidebar-menu">
						<li class="dropdown">
							<a href="<?php echo base_url('Welcome'); ?>" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
						</li>
						<li class="dropdown">
							<a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="briefcase"></i><span>Armada</span></a>
							<ul class="dropdown-menu">
								<li><a class="nav-link" href="<?php echo base_url('DataArmada'); ?>">Data Armada</a></li>
								<li><a class="nav-link" href="<?php echo base_url('ServiceBerkala'); ?>">Service Berkala</a></li>
							</ul>
						</li><li class="dropdown">
							<a href="<?php echo base_url('DataPenyewa'); ?>" class="nav-linkn"><i data-feather="user"></i><span>Data Penyewa</span></a>
						</li>
						<li class="dropdown">
							<a href="<?php echo base_url('DataTransaksi'); ?>" class="nav-link"><i data-feather="command"></i><span>Data Transaksi</span></a>
						</li>
						<li class="dropdown">
							<a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="copy"></i><span>Laporan</span></a>
							<ul class="dropdown-menu">
								<li><a class="nav-link" href="<?php echo base_url('LaporanTransaksi'); ?>">Laporan Transaksi</a></li>
								<li><a class="nav-link" href="<?php echo base_url('LaporanService'); ?>">Laporan Service</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="<?php echo base_url('GpsTracker'); ?>" class="nav-link"><i data-feather="shopping-bag"></i><span>GPS Tracker</span></a>
						</li>
					</ul>
				</aside>
			</div>

			<script src="<?php echo base_url(); ?> leaflet.js"></script>
