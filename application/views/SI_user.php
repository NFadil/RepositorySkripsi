<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Sistem Informasi
      <small>Skripsi</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo site_url('Home');?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Sistem Informasi</li>
    </ol>
  </section>
  <br>

  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <input type="text" class="search-input form-control" placeholder="Cari...">
      </div>
      <?php
      foreach ($sisteminformasi->result() as $row) {
      ?>
      <div class="col-xs-12 product">
        <div class="box" style="padding: 0px 0px 100px 0px;">
          <div class="box-header"></div>
          <div class="box-body">
            <div class="product" style="padding: 0px 0px 75px 100px;">
              <h1 class="text-center" style="padding: 0px 0px 50px 0px;"><?php echo $row->judul;?></h1>
              <div class="product-actions">
                <iframe src="<?php echo $row->url;?>" width="50%" height="300px" style="float: left;"></iframe>
                <br>
                <div class="attachment-text text-left" style="float: left; padding: 50px 0px 0px 200px;">
                  <h4>Nama: <?php echo $row->nama;?></h4>
                  <p>Jurusan: <?php echo $row->jurusan;?></p>
                  <p>Angkatan: <?php echo $row->angkatan;?></p>
                  <p>Tahun Publish: <?php echo $row->tahun_publis;?></p>
                </div>
              </div>
              <div class="buttons"></div>
            </div>
          </div>
        </div>
      </div>
      <?php
      }
      ?>
    </div>
  </section>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
  $(".search-input").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".product").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
