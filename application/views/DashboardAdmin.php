
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