<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Tambah Skripsi
            <small>Kimia</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url('Home');?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo site_url('Kimia');?>"><i class="fa fa-archive"></i> Kimia</a></li>
            <li class="active">Tambah Skripsi</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3"> <!-- Added col-md-offset-3 to center the form -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Masukan Data</h3>
                    </div>

                    <form action ="<?php echo site_url('Kimia/prosesTambah') ?>"method="post" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="Nama">Nama</label>
                                <input type="text" class="form-control" name="Nama" id="exampleInputEmail1" placeholder="Masukan Nama" required>
                            </div>
                            <div class="form-group">
                                <label for="Judul">Judul</label>
                                <input type="text" class="form-control" name="Judul" id="exampleInputEmail1" placeholder="Masukan Judul" required>
                            </div>
                            <div class="form-group">
                                <label for="Jurusan">Jurusan</label>
                                <input type="text" class="form-control" name="Jurusan" id="exampleInputEmail1" placeholder="Masukan Jurusan" required>
                            </div>
                            <div class="form-group">
                                <label for="Angkatan">Angkatan</label>
                                <input type="number" class="form-control" name="Angkatan" id="exampleInputEmail1" placeholder="Masukan Angkatan" required>
                            </div>
                            <div class="form-group">
                                <label for="Tahunpublish">Tahun Publish</label>
                                <input type="number" class="form-control" name="Tahunpublish" id="exampleInputEmail1" placeholder="Masukan Tahun Publish" required>
                            </div>
                            <div class="form-group">
                                <label for="Url">File input</label>
                                <input name="Url"  class="form-control" type="file" id="exampleInputFile"  required>
                                
                            </div>
                            
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
