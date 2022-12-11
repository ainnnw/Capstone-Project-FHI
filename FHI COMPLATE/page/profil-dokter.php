<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>profil-dokter</title>
  <!--style-->
  <link href="../asset/style/index.css" rel="stylesheet">
  <link href="../asset/style/responsive.css" rel="stylesheet">
  <link rel="stylesheet" href="../asset/style/profil-dokter.css">
  <meta name="dicoding:email" content="202310021@student.ibik.ac.id">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <!--font-->
  <link
    href="https://fonts.googleapis.com/css2?family=Acme&family=Fredoka+One&family=Kanit&family=Nerko+One&family=Righteous&family=Secular+One&display=swap"
    rel="stylesheet">
  <!--icon-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body>
<nav class="navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="../index.php">
        <img src="../asset/img/logo.png" alt="Logo" width="60" height="60" class="d-inline-block align-text-center mb-2">
        <span>Family Healting Information </span>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="../page/loginpage.php"><img src="../asset/img/person.svg" alt="login" height="40" width="40"></i></a>
          </li>
        </ul>
        <b id="hamburger" onclick="showMenu();">&#8801;</b>
      </a>
    </div>
  </nav>
  <div class="nav" id="menu_vertikal">
    <span>
      <li class="nav-item dropdown "></li>
    </span>
    <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      <span>LAYANAN KESEHATAN</span>
    </a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="../page/testlansia.html">TES KESEHATAN LANSIA</a></li>
      <li><a class="dropdown-item" href="../page/mentalhealth.html">TES KESEHATAN MENTAL</a></li>
      <li><a class="dropdown-item" href="../page/bmi.html">TES BMI</a></li>
    </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../page/artikel.php">ARTIKEL</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="./dokterpage.php">CARI DOKTER</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#footer">CONTACT ME</a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="../page/about.html">ABOUT ME </a>
    </li>
    <li class="nav-itemm ">
      <a class="nav-link" href="../page/loginpage.php"><span>LOGIN</span> </a>
    </li>
    <form class="d-flex " role="search">
      <input class="form-control" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-success ms-1" type="submit"><img src="../asset/img/search.svg" alt="search" height="40"
          width="40"></button>
    </form>
  </div>
  <main>
    <?php
  include '../koneksi.php';
 if (isset($_GET['id'])) {
    $idaa = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from dokter where id='$idaa'");
  $result= mysqli_fetch_array($data);
			?>
   <div class="container">
      <div class="row">
        <div class="col-lg-7 col-12 card mb-3 mt-5">
          <div id="profil-dokter">
          <div class="feature-icon ">
                <img src="../proses/data/<?php echo $result['gambar'];?>" alt="dokter" width="100px" height="100px">
              </div>
            <div class="detail-dokter" style="width: 100%;">
              <h3 id="nama-dokter"><?php echo $result['NamaDokter'];?></h3>
              <h6 id="spesailis-dokter" class="card-text"><?php echo $result['spesailis'];?></h6>
              <div class="card-text me-2" id="profil-singkat"><?php echo $result['profilesingkat'];?>
                </h6>
              </div>
            </div>
          </div>
          <div class=" col-lg-12 tentang-dokter kotak-putih ">
            <h1>Detail Dokter</h1>
            <i class="bi bi-mortarboard-fill"> </i> Pendidikan<p id="pendidikan"><?php echo $result['pendidikan'];?></p>
            <i class="bi bi-person-vcard-fill"> </i>Keanggotaan Organisasi Prefesional : <p id="organisasi"><?php echo $result['organisasi'];?></p>            </p>
            <i class="bi bi-balloon-heart-fill"></i> Pelayanan
            <div class="layanan"> 
              <?php echo $result['pelayanan'];?>
      
            </dziv>
            <hr>
            <p id="namaRS"><i class="bi bi-hospital-fill"></i> <?php echo $result['tempatpraktik'];?></p>
            <p id="alamatRS"><i class="bi bi-geo-alt-fill"></i> <?php echo $result['alamatpraktik'];?></p>
            <p id="hari-praktek"><i class="bi bi-calendar-check"></i> <?php echo $result['jadwalpraktik'];?></p>
            <p id="jam-praktek"><i class="bi bi-clock-fill"></i> <?php echo $result['jampraktik'];?></p>
            <p id="hargaDokter"><i class="bi bi-cash-coin"></i> Mulai Rp.<?php echo $result['biaya'];?></p>
            <p id="telponDokter"><i class="bi bi-telephone-fill"></i> <?php echo $result['nohp'];?></p>
          </div>
          <?php
    include '../koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "select * from dokter where id='$id'");
    while ($d = mysqli_fetch_array($data)) {
    ?>
          <div class="col-lg-12 komentar" >
          <h1>Ulasan</h1>
          <form method="POST" action="">
           <textarea cols="50" form="usrform" name="Ulasan" placeholder="Beri Ulasan">
           </textarea>
           <input type="text" name="NamaUlasan" placeholder="Masukan Nama">
           <input type="submit" style="border-radius: 8%;">
          </form>
          </div>
          <?php
    }
     ?>
          </div>
          <div class="border border-2 mt-3">
          <p id="nama-pengulas">user comment</p>
          <p id="tanggal-ulasan">12-12-2022</p>
          <p id="ulasan">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt, placeat!</p>
          </div>
        </div>
   
        <div class="col-lg-5 mt-5 mb-3 ">
          <div class="container konsultasi top-0">
             
            <h1>Ajukan Pertanyaan atau keluhan anda disini</h1>
                <textarea cols="50" form="usrform" name="deskripsi-konsultasi" placeholder="Beri Ulasan">
                </textarea>
                <form action="" >
                 <input type="text" name="usrname" placeholder="Masukan Nama">
                 <input type="submit" style="border-radius: 8%; margin-bottom: 20px;">
                </form>
                <hr>
                <div class="border border-3 mb-5 mt-4">
                <p id="namapasien">user question</p>
                <p id="deskripsi-konsul">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab, itaque!
                <div class="background">
                 <p id="nama-dokter-konsultasi">dokter answer</p>
                 <p id="balesan-dokter">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat voluptate architecto esse ipsum dolores dolor asperiores deserunt cumque autem, aliquam tempora modi officia aspernatur voluptatum, totam iste adipisci maiores commodi.</p>
                </div>
                </div>
            </div>
        </div>
      </div>
    </div>
    <?php 
  }
		?>
    
  </main>
  <footer>
    <div class="container footer-1 " id="footer">
      <div class="row">
        <div class="col-md-4 pt-3 text-center">
          <h3 class="pb-3">Tentang Kami</h3>
          <p class="tentang-kami">FHI (Family healthing Information) adalah website yang bertujuan untuk memberikan
            banyak
            informasi tentang kesehatan yang dibutuhkan oleh seluruh masyarakat di Indonesia dan informasi yang kami
            sajikan juga mudah untuk di pahami oleh orang awam.</p>
        </div>
        <div class="col-md-2 pt-lg-3 pt-5 text-center ">
          <h3 class="pb-3">Contact me</h3>
          <p class="contact">Gedung FHI, Jl. jembatan biru No.10, Bogor Pusat 15670</p>
          <p class="contact pb-2"><span class="fw-bolder">Phone</span>: 085894440647 <span><span
                class="fw-bolder">Email</span>: FHI@family.com</span>
          </p>
          <a class="sosmed" href=""><img src="../asset/img/twitter.png" class="img-fluid" alt="twitter"></a>
          <a class="sosmed" href=""><img src="../asset/img/instagram.png" class="img-fluid" alt="instagram"></a>
          <a class="sosmed" href=""><img src="../asset/img/facebook.png" class="img-fluid" alt="facebook"></a>
        </div>
        <div class="col-md-3 pt-lg-3 pt-5 text-center ">
          <h3 class="pb-3">Credit By</h3>
          <p class="credit">halodoc.com</p>
          <p class="credit">consula.com</p>
          <p class="credit">tentanganak.id</p>
        </div>
        <div class="col-md-3 pt-lg-3 pt-5 text-center">
          <h3 class="pb-3">Didukung Oleh</h3>
          <img src="../asset/img/dicoding.png" alt="logo dicoding" class="Didukung">
          <img src="../asset/img/Kampus Merdeka.png" alt="logo dicoding" class="Didukung">
        </div>
      </div>
    </div>
    <div class="shadow-content footer-2">
      <div class="container">
        <div class="row footer2">
          <div class="col-md-4 text-center ">
            <img src="../asset/img/logo.png" alt="Logo" width="60" height="60">
            <span class="fhi">Family Healting Information</span>
          </div>
          <div class="col-md-5 pt-2 ">
            <p class="lead text-center">Mari Hidup Sehat Bersama Kami </p>
          </div>
          <div class="col-md-3 pt-2 text-center ">
            <a class="sosmed" href=""><img src="../asset/img/twitter.png" class="img-fluid" alt="twitter"></a>
            <a class="sosmed" href=""><img src="../asset/img/instagram.png" class="img-fluid" alt="instagram"></a>
            <a class="sosmed" href=""><img src="../asset/img/facebook.png" class="img-fluid" alt="facebook"></a>
          </div>
          <div class="backTop">
            <button onclick="topFunction()" id="myBtn" title="Go to top"><img src="../asset/img/backtoup.svg" alt=""></button>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright text-center">
      ©2022 Family Healting Information
    </div>
  </footer>

 
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>
<script src="../asset/script/index.js"></script>