<Head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
</Head>
<!-- Content Wrapper -->
<div class="content-wrapper">
	<selection class="content-header">
		<h1>Dashboard
			<small>Panel</small>
		</h1>
			<io class="breadcrumb">
				<li><a herf="#" ><i class="fa  fa-dashboard"></i></a></li>
				<li class="active">Dashboard</li>
			</io>
	</selection>
<!-- Main Content -->
<selection class="content">
    <div class="container">
        <h2 class="text-center">Daftar Negara</h2>
        <a href="<?php echo site_url('Country/tambah');?>" class="btn btn-primary mb-3">Tambah Negara</a>
        <table class="table table-bordered table-striped" id="myTable">
            <thead class="table-dark">
                <tr>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($country->result() as $row) {    
                    $Edit = '<a class="btn btn-primary" href="'.site_url("country/update/".$row->Code).'">Edit</a>';
                    $Hapus = '<a class="btn btn-danger" href="'.site_url("country/hapus/".$row->Code).'">Hapus</a>';
                    echo "<tr>";
                    echo "<td>$row->Code</td>";
                    echo "<td>$row->Name</td>";
                    echo "<td>".$Edit." ".$Hapus."</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
   
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>

</selection>
</div>