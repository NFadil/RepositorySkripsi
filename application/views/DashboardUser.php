
		<!-- Left side column -->
		<aside class="main-sidebar">
			<section class="sidebar">
				<div class="user-panel">
					<div class="pull-left image">
						<img src="<?php echo $this->session->userdata('foto'); ?>" class="user-image">
					</div>
					<div class="pull-left info">
						<p><?php echo $this->session->userdata('username'); ?></p>
						<!-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
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
						<a href=""><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
					</li>
					<li>
						<a href=""><i class="fa fa-archive"></i> <span>Data Jurnal</span></a>
					</li>
					<li>
						<a href="">
							<i class="fa fa-users"></i> <span>Mahasiswa</span>
						</a>
					</li>
					<!-- <li class="treeview">
						<a href="#">
							<i class="fa fa-archive"></i> <span>Products</span>
							<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
						</a>
						<ul class="treeview-menu">
							<li><a href="#"><i class="fa fa-circle-o"></i> Categories</a></li>
							<li><a href="#"><i class="fa fa-circle-o"></i> Units</a></li>
							<li><a href="#"><i class="fa fa-circle-o"></i> Items</a></li>
						</ul>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-shopping-cart"></i> <span>Transaction</span>
							<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
						</a>
						<ul class="treeview-menu">
							<li><a href="#"><i class="fa fa-circle-o"></i> Sales</a></li>
							<li><a href="#"><i class="fa fa-circle-o"></i> Stock In</a></li>
							<li><a href="#"><i class="fa fa-circle-o"></i> Stock Out</a></li>
						</ul>
					</li> -->
					<!-- <li class="treeview">
						<a href="#">
							<i class="fa fa-pie-chart"></i> <span>Reports</span>
							<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
						</a>
						<ul class="treeview-menu">
							<li><a href="#"><i class="fa fa-circle-o"></i> Sales</a></li>
							<li><a href="#"><i class="fa fa-circle-o"></i> Stocks</a></li>
						</ul>
					</li> -->
					<!-- <li class="header">SETTINGS</li>
					<li><a href="#"><i class="fa fa-user"></i> <span>Admin</span></a></li> -->
				</ul>
			</section>
		</aside>

		<!-- Content Wrapper -->
		<div class="content-wrapper">
			<!-- <?php echo $contents ?> -->
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