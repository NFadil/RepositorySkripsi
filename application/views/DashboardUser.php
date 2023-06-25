
		<!-- Left side column -->
		<aside class="main-sidebar">
			<section class="sidebar">
				<div class="user-panel">
					<div class="pull-left image">
						<img src="<?php echo $this->session->userdata('foto'); ?>" class="user-image">
					</div>
					<div class="pull-left info">
						<p><?php echo $this->session->userdata('username'); ?></p>
						<a href="#"><i class="fa fa-circle text-success"></i> <?php echo $this->session->userdata('level'); ?></a>
					</div>
				</div>
				<form action="#" method="get" class="sidebar-form">
					<div class="input-group">
						<!-- <input type="text" name="q" class="form-control" placeholder="Search...">
						<span class="input-group-btn">
							<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
						</span> -->
					</div>
				</form>
				<!-- sidebar menu -->
				<ul class="sidebar-menu" data-widget="tree">
					<li class="header">MAIN NAVIGATION</li>
					<li>
						<a href="<?php echo site_url('Home');?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
					</li>
					<li class="treeview">
					<a href="#">
						<i class="fa fa-archive"></i>
						<span>Jurnal</span>
						<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?php echo site_url('Informatika/User');?>"><i class="fa fa-circle-o"></i> Informatika</a></li>
						<li><a href="<?php echo site_url('Kimia/User');?>"><i class="fa fa-circle-o"></i> Kimia</a></li>
						<li><a href="<?php echo site_url('SistemInformasi/User');?>"><i class="fa fa-circle-o"></i> Sistem Informasi</a></li>
					</ul>
					</li>
				
					<li class="header">ABOUT US</li>
					<li class="treeview">
					<a href="#">
						<i class="fa fa-users"></i>
						<span>Kelompok</span>
						<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?php echo site_url('Aboutus/Nurul');?>"><i class="fa fa-circle-o"></i>Nurul Fadhilah Anwar</a></li>
						<li><a href="<?php echo site_url('Aboutus/Kukuh');?>"><i class="fa fa-circle-o"></i> Kukuh Yulion S</a></li>
						<li><a href="<?php echo site_url('SistemInformasi/User');?>"><i class="fa fa-circle-o"></i> Adhani Mulanti</a></li>
						<li><a href="<?php echo site_url('Aboutus/Alfin');?>"><i class="fa fa-circle-o"></i> Alfin Gerliandeva</a></li>
					</ul>
					</li>
			</section>
		</aside>
