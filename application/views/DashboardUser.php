
		<!-- Left side column -->
		<aside class="main-sidebar">
			<section class="sidebar">
				<div class="user-panel">
					<div class="pull-left image">
						<img src="<?php echo $this->session->userdata('foto'); ?>" class="user-image">
					</div>
					<div class="pull-left info">
						<p><?php echo $this->session->userdata('username'); ?></p>
						<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
					</div>
				</div>
				<!-- sidebar menu -->
				<ul class="sidebar-menu" data-widget="tree">
					<li class="header">MAIN NAVIGATION</li>
					<li>
						<a href="<?php echo site_url('Home');?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
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