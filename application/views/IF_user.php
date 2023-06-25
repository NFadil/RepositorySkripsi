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

    <section class="content">
  <div class="row">
    <?php
    foreach ($informatika->result() as $row) {
    ?>
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <br>
          
        </div>
        <div class="box-body">
          <div class="product">
            <div class="product-info">
              <h4>Nama: <?php echo $row->nama;?></h4>
              <p>Judul(s): <?php echo $row->judul;?></p>
              <p>Jurusan: <?php echo $row->jurusan;?></p>
              <p>Angkatan: <?php echo $row->angkatan;?></p>
              <p>Tahun Publish: <?php echo $row->tahun_publis;?></p>
            </div>
            <div class="product-actions">
              <iframe src="<?php echo $row->url;?>" width="100px" height="100px"></iframe>
              <div class="buttons">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
    }
    ?>
  </div>
</section>
