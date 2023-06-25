<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Skripsi</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url('Home');?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>
    <br>

    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3><?php echo $kimia; ?></h3>
                    <p>Jurnal Kimia</p>
                </div>
                <div class="icon">
                    <i class="fa fa-archive"></i>
                </div>
                <a href="<?php echo site_url('Kimia'); ?>" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-green">
                <div class="inner">
                    <h3><?php echo $sisteminformasi; ?></h3>
                    <p>Jurnal Sistem Informasi</p>
                </div>
                <div class="icon">
                    <i class="fa fa-archive"></i>
                </div>
                <a href="<?php echo site_url('SistemInformasi'); ?>" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3><?php echo $informatika; ?></h3>
                    <p>Jurnal Informatika</p>
                </div>
                <div class="icon">
                    <i class="fa fa-archive"></i>
                </div>
                <a href="<?php echo site_url('Informatika'); ?>" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>0</h3>
                    <p>Jumlah User</p>
                </div>
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
                <a href="<?php echo site_url('Mahasiswa'); ?>" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>
