<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Dashboard Admin</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="<?=base_url()?>Asset/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>Asset/bower_components/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?=base_url()?>Asset/dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="<?=base_url()?>Asset/dist/css/skins/_all-skins.min.css">
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">

	<div class="wrapper">
		<header class="main-header">
			<a href="<?php echo site_url('Home');?>" class="logo">
				<span class="logo-mini">S</span>
				<span class="logo-lg">Repository<b>Skripsi</b></span>
			</a>
			<nav class="navbar navbar-static-top">
				<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<li class="dropdown tasks-menu">
							<!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-flag-o"></i>
								<span class="label label-danger">3</span>
							</a> -->
							<ul class="dropdown-menu">
								<li class="header">You have 3 tasks</li>
								<li>
									<ul class="menu">
										<li>
										<a href="#">
											<h3>Design some buttons
												<small class="pull-right">20%</small>
											</h3>
											<div class="progress xs">
												<div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
													<span class="sr-only">20% Complete</span>
												</div>
											</div>
										</a>
										</li>
									</ul>
								</li>
								<li class="footer">
									<a href="#">View all tasks</a>
								</li>
							</ul>
						</li>
						<!-- User Account -->
						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="<?php echo $this->session->userdata('foto'); ?>" class="user-image">
								<span class="hidden-xs"><?php echo $this->session->userdata('username'); ?></span>
							</a>
							<ul class="dropdown-menu">
								<li class="user-header">
                                <img src="<?php echo $this->session->userdata('foto'); ?>" class="img-circle">
									<p><?php echo $this->session->userdata('username'); ?>
										<small><?php echo $this->session->userdata('level'); ?></small>
									</p>
								</li>
								<li class="user-footer">
									<div class="pull-left">
										<a href="#" class="btn btn-default btn-flat">Profile</a>
									</div>
									<div class="pull-right">
										<a href="<?=site_url('home/logout')?>" class="btn btn-flat bg-red">Sign out</a>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
		</header>

		<!-- Left side column -->
		<aside class="main-sidebar">
			<section class="sidebar">
				<div class="user-panel">
					<div class="pull-left image">
						<img src="<?php echo $this->session->userdata('foto'); ?>" class="img-circle">
					</div>
					<div class="pull-left info">
						<p><?php echo $this->session->userdata('username'); ?></p>
						<a href="#"><i class="fa fa-circle text-success"></i> <?php echo $this->session->userdata('level'); ?></a>
					</div>
				</div>
				<form action="#" method="get" class="sidebar-form">
					<div class="input-group">
						<input type="text" name="q" class="form-control" placeholder="Search...">
						<span class="input-group-btn">
							<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
						</span>
					</div>
				</form>
				<!-- sidebar menu -->
				<ul class="sidebar-menu" data-widget="tree">
					<li class="header">MAIN NAVIGATION</li>
					<li>
						<a href="<?php echo site_url('City');?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
					</li>
					<li>
						<a href="<?php echo site_url('Admin');?>"><i class="fa fa-archive"></i> <span>Data Jurnal</span></a>
					</li>
					<li>
						<a href="">
							<i class="fa fa-users"></i> <span>Mahasiswa</span>
						</a>
					</li>
				
					<li class="header">SETTINGS</li>
					<li><a href="#"><i class="fa fa-user"></i> <span>Admin</span></a></li>
				</ul>
			</section>
		</aside>

		<!-- Content Wrapper -->
		<div class="content-wrapper">
			<selection class="content-header">
			<h1>Dashboard
				<small>Panel</small>
			</h1>
			<io class="breadcrumb">
				<li><a herf="#" ><i class="fa  fa-dashboard"></i></a></li>
				<li class="active">Dashboard</li>
			</io>
			</selection>
			<!-- Main Content -->
			<selection class="content">
				dashboard page

			</selection>
		</div>

		<footer class="main-footer">
			<div class="pull-right hidden-xs">
				<b>Version</b> 1.0
			</div>
			<strong>Copyright &copy; Repository <a href="https://www.instagram.com/_fadil.wr/">Skripsi</a>.</strong> All rights reserved.
		</footer>

	</div>

	<script src="<?=base_url()?>Asset/bower_components/jquery/dist/jquery.min.js"></script>
	<script src="<?=base_url()?>Asset/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="<?=base_url()?>Asset/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?=base_url()?>Asset/dist/js/adminlte.min.js"></script>

</body>
</html>