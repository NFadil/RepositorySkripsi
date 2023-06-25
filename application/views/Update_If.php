<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Tambah Skripsi
            <small>Informatika</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url('Home');?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo site_url('Informatika');?>"><i class="fa fa-archive"></i> Informatika</a></li>
            <li class="active">Update Skripsi</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3"> <!-- Added col-md-offset-3 to center the form -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Masukan Data</h3>
                    </div>
                    <form action ="<?php echo site_url('Informatika/prosesUpdate'.$informatika->id_jurnal) ?>"method="post" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="Nama">Nama</label>
                                <input type="text" class="form-control" name="Nama" id="exampleInputEmail1" placeholder="Masukan Nama" required value="<?php echo $informatika->nama; ?>">
                            </div>
                            <div class="form-group">
                                <label for="Judul">Judul</label>
                                <input type="text" class="form-control" name="Judul" id="exampleInputEmail1" placeholder="Masukan Judul" required value="<?php echo $informatika->judul; ?>">
                            </div>
                            <div class="form-group">
                                <label for="Jurusan">Jurusan</label>
                                <input type="text" class="form-control" name="Jurusan" id="exampleInputEmail1" placeholder="Masukan Jurusan" required value="<?php echo $informatika->jurusan; ?>">
                            </div>
                            <div class="form-group">
                                <label for="Angkatan">Angkatan</label>
                                <input type="number" class="form-control" name="Angkatan" id="exampleInputEmail1" placeholder="Masukan Angkatan" required value="<?php echo $informatika->angkatan; ?>">
                            </div>
                            <div class="form-group">
                                <label for="Tahunpublish">Tahun Publish</label>
                                <input type="number" class="form-control" name="Tahunpublish" id="exampleInputEmail1" placeholder="Masukan Tahun Publish" required value="<?php echo $informatika->tahun_publis; ?>">
                            </div>
                            <div class="form-group">
                                <label for="Url">File input</label>
                                <input name="Url"  class="form-control" type="file" id="exampleInputFile" value="<?php echo $informatika->url; ?>">
                                
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
