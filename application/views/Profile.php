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
        <div class="box box-primary text-center">
          <div class="box-body box-profile">
            <?php
            foreach ($login->result() as $row) {
              if ($row->username ==  $this->session->userdata('username')) { // Ganti $logged_in_username dengan variabel yang sesuai untuk menyimpan username yang login
            ?>
                <img class="profile-user-img img-responsive img-circle" src="<?php echo $row->foto;?>" alt="User profile picture">
                <h3 class="profile-username text-center"><?php echo $row->username;?></h3>
                <p class="text-muted text-center"><?php echo $row->level;?></p>
           
            <a href="<?php echo site_url("Profile/update/".$row->id_login)?>" class="btn btn-primary btn-block"><b>Edit Profile</b></a>
            <?php
              }
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
