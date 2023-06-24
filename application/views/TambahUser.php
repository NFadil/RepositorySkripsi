<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Tambah User
            <small>Akess</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url('Home');?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Tambah User</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3"> <!-- Added col-md-offset-3 to center the form -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Masukan Username & Password</h3>
                    </div>

                    <form action ="<?php echo site_url('Home/prosesdaftar') ?>"method="post" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username" id="exampleInputEmail1" placeholder="Enter Username">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="gambar">File input</label>
                                <input name="gambar"  class="form-control" type="file" id="exampleInputFile">
                                
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
