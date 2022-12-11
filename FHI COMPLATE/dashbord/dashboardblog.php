<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="dicoding:email" content="202310021@student.ibik.ac.id">
    <!-- Icon--->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!--g font-->
 
    <title>Produksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <style>
      div.card{
        overflow: scroll;
      }
    </style>
   
  </head>

  <body style="background-color:#EFF4FD;">
 <!--navbar-->
 <?php 
session_start(); // session untuk notifikasi pesan
echo @$_SESSION['pesan'];
session_destroy();
?>
 <nav class="navbar  navbar-light bg-light navbar-expand-lg  shadow-sm p-2 mb-4 bg-body rounded justify-content-centar padding-bottom-5 " style="position: fixed; width: 100%; z-index:1;">
          <a class="navbar-brand ms-5" href="#"><img src="../asset/img/logo.png" width="30px" height="30px">
            Family Healting Information
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav stronge">
            <li class="nav-item d-none d-sm-inline-block">
                <a href="dashboard.php" class="nav-link active"><i class="bi bi-house"></i> Beranda</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="dashboardblog.php" class="nav-link active"><i class="bi bi-card-heading"></i> Blog</a>
            </li>
             <li class="nav-item d-none d-sm-inline-block">
               <a href="dashboarddokter.php" class="nav-link active"><i class="bi bi-shield-plus"></i> Dokter</a>
             </li>
          </ul>
          </div>
        </div>
      </nav>
 <!--end-->
<!--user-->
<div class="container "style="padding-top:100px;">
  <div class="row">
    <div class="col-lg-12 shadow-lg p-1 mb-1 bg-body rounded">
    <div class="card">
  <div class="card-body">
  <i class="bi bi-vimeo "> FHI Data Blog</i>
  <i class="bi bi-calendar-day float-end fs-6">  15-06-2022</i>
  </div>
</div>
    </div>
  </div>
</div>
<!--end-->
<!--content-->
<div class="container-fluid pt-3">
  <div class="container ">
    <div class="row justify-content-center shadow-lg p-3 mb-5 bg-body rounded">
      <div class="col-lg-12 ">
      <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                <div class="navbar float-end ">
              
                <a class="dropdown-item " href="tambahblog.php"><h5><i class="bi bi-calendar2-plus"></i></i> ADD BLOG</h5> </a>
      
            </ul>

                </div> 
                </h3>
                
              </div>
              <!-- /.tabell-->
              <div class="card-body">
                <table class="table table-bordered table-hover" id="myTable3" >
                  <thead>
                  <tr class="text-center my-3" fs-5>
                    <th>id</th>
                    <th>Judul</th>
                    <th>isi singkat</th>
                    <th>Kategori</th>
                    <th class="px-3">TanggalPost</th>
                    <th>Editor</th>
                    <th class="px-5">Aksi</th>
                  </tr>
                  </thead>

                  <?php 
		include '../koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from blog");
		while($d = mysqli_fetch_array($data)){
			?>
                  <tbody>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['judul']; ?></td>
                    <td><?php echo $d['isipendek']; ?></td>
                    <td><?php echo $d['kategori']; ?></td>
                    <td><?php echo $d['tanggalPost']; ?></td>
                    <td><?php echo $d['penulis']; ?></td>
                  
                  <div class="aksi">
                  <td> 
                  <a href="../proses/proses_hapus.php?id=<?php echo $d['id']; ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                  <a href ="tampiLan-ubah.php?id=<?php echo $d['id']; ?>"  class="btn btn-warning"><i class="fas fa-cog"></i></a>
                  </td>
                  <div>
                  </tr>
                  </tfoot>
                  <?php 
		               }
		              ?>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
      </div>
    </div>
  </div>
</div>
<!--end-->

<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready( function () {
    $('#myTable1').DataTable();
} );
</script>
  </body>
</html>