<div class="content-wrapper">
<section class="content-header">
  <h1>
    Data User
    <small>User Login</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo site_url('Home');?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">User</li>
  </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          
        </div>

        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>Username</th>
                <th>Password</th>
                <th>Role</th>
                <th>Profile</th>
              </tr>
            </thead>
            <tbody>
            <?php
                    foreach ($login->result() as $row) {
                        echo "<tr>";
                        echo "<td>".$row->username."</td>";
                        echo "<td>".$row->password."</td>";
                        echo "<td>".$row->level."</td>";
                        echo "<td><image src='".$row->foto."' width='100px' height='100px'></image></td>";
                        echo "</tr>";
                    }
                    ?>
            </tbody>
            
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
</div>