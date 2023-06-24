
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
						<a href="<?php echo site_url('Jurnal');?>"><i class="fa fa-archive"></i> <span>Data Jurnal</span></a>
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

		<!-- Content Wrapper
		<div class="content-wrapper">
			
		</div> -->