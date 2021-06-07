<?php
include 'koneksi.php';
?>

<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="row ">
			<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="card">
					<div class="card-statistic-4">
						<div class="align-items-center justify-content-between">
							<div class="row ">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
									<div class="card-content">
										<h5 class="font-15">Transaksi</h5>
										<h2 class="mb-3 font-18"><?= $jumlahTransaksi; ?></h2>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
									<div class="banner-img">
										<img src="<?php echo base_url(); ?>otika/assets/img/banner/2.png" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="card">
					<div class="card-statistic-4">
						<div class="align-items-center justify-content-between">
							<div class="row ">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
									<div class="card-content">
										<h5 class="font-15"> Sopir</h5>
										<h2 class="mb-3 font-18"><?= $jumlahSopir; ?></h2>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
									<div class="banner-img">
										<img src="<?php echo base_url(); ?>otika/assets/img/banner/3.png" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="card">
					<div class="card-statistic-4">
						<div class="align-items-center justify-content-between">
							<div class="row ">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
									<div class="card-content">
										<h5 class="font-15">Armada</h5>
										<h2 class="mb-3 font-18"><?= $jumlahArmada; ?></h2>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
									<div class="banner-img">
										<img src="<?php echo base_url(); ?>otika/assets/img/banner/1.png" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
