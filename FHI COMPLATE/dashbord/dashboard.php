<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Icon--->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!--g font-->
 
    <title>Produksi</title>
    <meta name="dicoding:email" content="202310021@student.ibik.ac.id">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../asset/script/Chart.js"></script>
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
      </nav>
 <!--end-->
<!--user-->
<div class="container "style="padding-top:100px;">
  <div class="row">
    <div class="col-lg-12 shadow-lg p-1 mb-1 bg-body rounded">
    <div class="card">
  <div class="card-body">
  <?php 
        include '../koneksi.php';
        
        $data = mysqli_query($koneksi,"select * from login where username='admin'");
        $result= mysqli_fetch_array($data);
          ?>
         <i class="bi bi-vimeo "> Hello <?php echo $result['username']; ?>
					</i>
          <?php
        ?>
  <i class="bi bi-calendar-day float-end fs-6">  <?php echo date('l, d-m-Y ');?></i>
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
      <h5 class="card-title mb-5 text-center h4"><u>GRAFIK KEAKTIFAN ADMIN DALAM MENULIS BLOG</h5>
      <style type="text/css">
	table{
		margin: 0px auto;
	}
	</style>
 
 
	
 
 
	<?php 
	include '../koneksi.php';
	?>
 
	<div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart"></canvas>
	</div>
 
	<br/>
	<br/>
  
 
 
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["Begus","Ainul", "Ilham", "Sri Mega"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_begus= mysqli_query($koneksi,"select * from blog where penulis='begus'");
					echo mysqli_num_rows($jumlah_begus);
					?>, 
					<?php 
					$jumlah_ainul = mysqli_query($koneksi,"select * from blog where penulis='ainul'");
					echo mysqli_num_rows($jumlah_ainul);
					?>,
          <?php 
					$jumlah_ilham = mysqli_query($koneksi,"select * from blog where penulis='ilham'");
					echo mysqli_num_rows($jumlah_ilham);
					?>, 
          <?php 
					$jumlah_srimega = mysqli_query($koneksi,"select * from blog where penulis='Mega'");
					echo mysqli_num_rows($jumlah_srimega);
					?>, 
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
      </div>
    </div>
  </div>
</div>

<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready( function () {
    $('#myTable1').DataTable();
} );
</script>
  </body>
</html>