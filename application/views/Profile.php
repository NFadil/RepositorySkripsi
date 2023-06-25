<div class="content-wrapper">
  <section class="content-header">
    <h1>User Profile</h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo site_url('Home');?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">User profile</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-3">
        <div class="box box-primary">
          <div class="box-body box-profile">
            <img class="profile-user-img img-responsive img-circle" src="<?php echo $this->session->userdata('foto'); ?>" alt="User profile picture">
            <h3 class="profile-username text-center"><?php echo $this->session->userdata('username'); ?></h3>
            <p class="text-muted text-center"><?php echo $this->session->userdata('level'); ?></p>
            
            
          </div>
        </div>
      </div>
      <div class="col-md-9">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li><a href="#settings" data-toggle="tab">Settings</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="settings">
              <form action ="<?php echo site_url('Profile/prosesUpdate/'.$this->session->userdata('id_login')) ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                <div class="form-group">
                  <label for="username" class="col-sm-2 control-label">username</label>
                  <div class="col-sm-10">
                    <input name="username"type="text" class="form-control" id="username" placeholder="Name" value="<?php echo $this->session->userdata('username'); ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="password" class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-10">
                    <input name="password"type="password" class="form-control" id="password" placeholder="Masukan Password" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="gambar" class="col-sm-2 control-label">Foto</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" id="gambar" name="gambar" value="<?php echo $this->session->userdata('foto'); ?>">
                  </div>
                </div>
                
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
