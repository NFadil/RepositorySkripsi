<!DOCTYPE html>
<html>
<head>
  <title>Data Tables</title>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
</head>
<body>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Kimia
        <small>Skripsi</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('Home');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Kimia</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            <br>
              <a href="<?php echo site_url('Kimia/tambah');?>" class="btn btn-primary mb-3">Tambah Skripsi</a>
            </div>

            <div class="box-body">
              <table id="myTable" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Judul(s)</th>
                    <th>Jurusan</th>
                    <th>Angakatan</th>
                    <th>Tahun Publish</th>
                    <th>Dokumen</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($kimia->result()  as $row) {
                        $edit = '<a class="btn btn-primary" href="'.site_url("Kimia/update/".$row->id_jurnal).'">Edit</a>';
                        $hapus = '<a class="btn btn-danger" href="'.site_url("Kimia/hapus/".$row->id_jurnal).'">Hapus</a>';
                        echo "<tr>";
                        echo "<td>".$row->id_jurnal."</td>";
                        echo "<td>".$row->nama."</td>";
                        echo "<td>".$row->judul."</td>";
                        echo "<td>".$row->jurusan."</td>";
                        echo "<td>".$row->angkatan."</td>";
                        echo "<td>".$row->tahun_publis."</td>";
                        echo "<td><iframe src='".$row->url."' width='100px' height='100px'></iframe></td>";
                        echo "<td>".$edit." ".$hapus."</td>";
                        echo "</tr>";
                    }
                    ?>
                  <!-- Tambahkan data lainnya di sini -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready(function() {
        $('#myTable').DataTable();
      });
    </script>
  </div>
</body>
</html>
