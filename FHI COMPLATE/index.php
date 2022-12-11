<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HOME</title>
  <!--style-->
  <link href="asset/style/index.css" rel="stylesheet">
  <meta name="dicoding:email" content="202310021@student.ibik.ac.id">
  <link href="asset/style/responsive.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
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
      <a class="navbar-brand" href="index.php">
        <img src="asset/img/logo.png" alt="Logo" width="60" height="60" class="d-inline-block align-text-center mb-2">
        <span>Family Healting Information </span>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="page/loginpage.php"><img src="asset/img/person.svg" alt="login" height="40" width="40"></i></a>
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
      <li><a class="dropdown-item" href="page/testlansia.html">TES KESEHATAN LANSIA</a></li>
      <li><a class="dropdown-item" href="page/mentalhealth.html">TES KESEHATAN MENTAL</a></li>
      <li><a class="dropdown-item" href="page/bmi.html">TES BMI</a></li>
    </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="page/artikel.php">ARTIKEL</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="page/dokterpage.php">CARI DOKTER</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#footer">CONTACT ME</a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="page/about.html">ABOUT ME </a>
    </li>
    <li class="nav-itemm ">
      <a class="nav-link" href="page/loginpage.php"><span>LOGIN</span> </a>
    </li>
    <form class="d-flex " role="search">
      <input class="form-control" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-success ms-1" type="submit"><img src="asset/img/search.svg" alt="search" height="40"
          width="40"></button>
    </form>
  </div>
  <main>
    <!--hero-->
    <div class="container px-1 py-5 ">
      <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-12 col-sm-8 col-lg-6 ">
          <img src="asset/img/icon1.webp" class="img-fluid " alt="icon" width="800" height="900" loading="lazy">
        </div>
        <div class="col-lg-6 ">
          <h1 class="fw-bold mb-3 ">Family Healting Information</h1>
          <p class="lead fs-4 ">FHI (Family healthing Information) adalah website yang bertujuan untuk memberikan banyak informasi tentang kesehatan yang dibutuhkan oleh seluruh masyarakat di Indonesia dan informasi yang kami sajikan juga mudah untuk di pahami oleh orang awam. 
            Nantinya terdapat juga fitur-fitur yang dapat dimanfaatkan oleh pengguna untuk terus dapat menjaga kesehatannya, Kami memilih tema ini karena masih banyak masyarakat yang kurang peduli dan teredukasi dalam menjaga kesehatannya.</p>
        </div>
      </div>
    </div>
    <!--feture 1-->

    <div class="row mb-5">
      <h1>LAYANAN KESEHATAN</h1>
      <div class="col-md-3">
        <div class="row g-0 border rounded  mb-5 shadow-sm  align-items-center text-center justify-content-center position-relative " id="featured-4">
          <div class="col-12 d-none d-lg-block">
            <img class="bd-placeholder-img  "width="200" height="200" img src="asset/img/imb.jpg" role="img">
          </div>
          <div class="col p-4  flex-column position-relative">
            <h3 class="mb-0">Test Body Mass Index</h3>
            <p class="card-text text-justify mb-auto">Body Mass Index (BMI) adalah angka yang menjadi penilaian standar untuk menentukan apakah berat badan Anda tergolong normal, kurang, berlebih, atau obesitas.</p>
            <a href="page/bmi.html" class="btn btn-primary my-3"> Coba Test</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="row g-0 border rounded justify-content-center text-center shadow-sm h-md-200 position-relative">
          <div class="col-12 d-none d-lg-block">
            <img class="bd-placeholder-img" width="200" height="200" img src="asset/img/mental.webp" role="img">
          </div>
          <div class="col p-4 flex-column position-relative">
            <h3 class="mb-0">Test Kesehatan Mental</h3>
            <p class="mb-auto">Tes kesehatan mental adalah suatu pengujian yang dilakukan untuk menguji fungsi pengetahuan atau kognitif seseorang. </p>
            <a href="page/mentalhealth.html" class="btn btn-primary my-3"> Coba Test</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="row g-0 border rounded justify-content-center text-center align-items-center shadow-sm h-md-200 position-relative">
          <div class="col-12 d-none d-lg-block">
            <img class="bd-placeholder-img" width="200" height="200" img src="asset/img/lansia.jpg" role="img">
          </div>
          <div class="col p-4 flex-column position-relative">
            <h3 class="mb-0">Test Kerentanan Lansia</h3>
            <p class="mb-auto">Test Frailty merupakan sekumpulan kondisi yang membuat lansia menjadi amat rentan dan rapub terhadap berbagai ancaman kesehatan maupun psikis, seperti mudah jatuh, mudah stres, dan mudah sakit.</p>
            <a href="page/testlansia.html" class="btn btn-primary my-3"> Coba Test</a>
          </div>
        </div>
      </div>
    </div>
    <!--fitur 2-->
    <div data-aos="fade-up">
     
      <div class="row ">
        <h1>CARI DOKTER</h1>
        <div class="container px-0 py-5" id="featured-">
          <div class="row g-0 py-5 row-cols-2 row-cols-lg-3 ">
            <div class="col-lg-3 border shadow p-3 mb-5 bg-body rounded mx-3 p-3">
              <div class="feature-icon ">
                <img src="asset/img/dr-cahyani.jpg" alt="dokter" width="100px" height="100px">
              </div>
              <h2>dr. Cahyani Kusuma Dewi</h2>
              <h3>Dokter Spesialis Anak</h3>
              <p>dr. Cahyani Kusuma Dewi merupakan seorang Dokter Umum yang memiliki pengalaman selama 16 tahun di
                bidangnya. Saat ini, dr. Cahyani Kusuma Dewi berpraktek di Klinik Puri Medika Kartika Chandra di
                Pancoran, Jakarta Selatan, dan Klinik Pola di Pasar Minggu, Jakarta Selatan</p>
              <a href="#" class="btn btn-success ">Hubungi</a>
              <a href="http://localhost/capstoneProjectv2/page/profil-dokter.php?id=31" class="btn btn-info">Detail</a>
            </div>
            <div class="col-lg-3 border shadow p-3 mb-5 bg-body rounded mx-3 my-2 p-3">
              <div class="feature-icon ">
                <img src="asset/img/dr.raden.jpg" alt="dokter" width="100px" height="100px">
              </div>
              <h2>dr. Raden D. S. S. Yuwono, Sp.A</h2>
              <h3>Dokter Spesialis Anak</h3>
              <p>dr. Raden D. S. S. Yuwono merupakan seorang Dokter Spesialis Anak yang memiliki pengalaman selama 22
                tahun di bidangnya. Saat ini, dr. Raden D. S. S. Yuwono berpraktek di Rumah Sakit Ciputra Citra Garden
                City Kalideres, Jakarta Barat. Sebagai seorang dokter, beliau telah mengenyam pendidikan di Universitas
                Tarumanagara, dan Universitas Sam Ratulangi.</p>
              <a href="#" class="btn btn-success ">Hubungi</a>
              <a href="#" class="btn btn-info">Detail</a>
            </div>
            <div class="col-lg-3 border  shadow p-3 mb-5 bg-body rounded mx-3 p-3">
              <div class="feature-icon ">
                <img src="asset/img/dr-achmad.jpg" alt="dokter" width="100px" height="100px">
              </div>
              <h2>dr. Achmad Mediana, Sp.OG</h2>
              <h3>Dokter Spesialis Kandungan</h3>
              <p>dr. Achmad Mediana merupakan seorang Dokter Spesialis Kebidanan dan Kandungan. Saat ini, dr. Achmad
                Mediana berpraktek di Rumah Sakit Ibu dan Anak Kemang Medical Care di Pasar Minggu, Jakarta Selatan, dan
                Praktek dr. Achmad Mediana, Sp.OG di Mampang Prapatan, Jakarta Selatan. Sebagai seorang dokter, beliau
                telah mengenyam pendidikan di Universitas Indonesia.
              </p>
              <a href="#" class="btn btn-success ">Hubungi</a>
              <a href="#" class="btn btn-info">Detail</a>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!--blog-->
    <div data-aos="fade-up">
      <div class="b-example-divider"></div>
      <div class="blog">
        <h1>ARTIKEL KESEHATAN</h1>
        <div class="container my-5">
        <?php
	include 'koneksi.php';
	$data = mysqli_query($koneksi,"select * from blog where kategori='populer'");
    while($d = mysqli_fetch_array($data)){
        ?>
          <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
            <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
              <img class="rounded-lg-3" src="https://source.unsplash.com/1100x1000/?/<?php echo $d['gambar']?>" alt="" width="720">
            </div>
            <div class="col-lg-6 p-3 p-lg-5 pt-lg-3">
              <h2 class="display-4 "><?php echo $d['judul']?></h2>
              <p class="lead"><?php echo $d['isipendek']?></p>
              <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                <a href="page/baca-artikel.php?id=<?php echo $d['id'];?>" class="btn btn-info btn-lg px-4 me-md-2 fw-bold ms-1">More</a>
              </div>
            </div>
            <?php
        }
        ?>
            <div class="row   row-cols-lg-3">
            <?php include 'koneksi.php';
	$data = mysqli_query($koneksi,"select * from blog where kategori='terbaru'");
    while($d = mysqli_fetch_array($data)){
        ?>
              <div class="col-lg-4">
                <img class=" rounded" img src="https://source.unsplash.com/1000x700/?/<?php echo $d['gambar']?>" alt="anaksekolah" width="100px"
                  height="100px">
                <h3><?php echo $d['judul']?></h3>
                <p><a class="btn btn-info" href="page/baca-artikel.php?id=<?php echo $d['id'];?>">View details &raquo;</a></p>
              </div><!-- /.col-lg-4 -->
            
              <?php
        }
        ?>
        </div>
          <div class="row g-0 py-5 row-cols-1 row-cols-lg-3">
            </div><!-- /.row -->
          </div>
        </div>
      </div>
    </div>
  </main>
  <footer>
    <div class="container footer-1" id="footer">
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
          <a class="sosmed" href=""><img src="asset/img/twitter.png" class="img-fluid" alt="twitter"></a>
          <a class="sosmed" href=""><img src="asset/img/instagram.png" class="img-fluid" alt="instagram"></a>
          <a class="sosmed" href=""><img src="asset/img/facebook.png" class="img-fluid" alt="facebook"></a>
        </div>
        <div class="col-md-3 pt-lg-3 pt-5 text-center ">
          <h3 class="pb-3">Credit By</h3>
          <p class="credit">halodoc.com</p>
          <p class="credit">consula.com</p>
          <p class="credit">tentanganak.id</p>
        </div>
        <div class="col-md-3 pt-lg-3 pt-5 text-center">
          <h3 class="pb-3">Didukung Oleh</h3>
          <img src="asset/img/dicoding.png" alt="logo dicoding" class="Didukung">
          <img src="asset/img/Kampus Merdeka.png" alt="logo dicoding" class="Didukung">
        </div>
      </div>
    </div>
    <div class="shadow-content footer-2">
      <div class="container">
        <div class="row footer2">
          <div class="col-md-4 text-center ">
            <img src="asset/img/logo.png" alt="Logo" width="60" height="60">
            <span class="fhi">Family Healting Information</span>
          </div>
          <div class="col-md-5 pt-2 ">
            <p class="lead text-center">Mari Hidup Sehat Bersama Kami </p>
          </div>
          <div class="col-md-3 pt-2 text-center ">
            <a class="sosmed" href=""><img src="asset/img/twitter.png" class="img-fluid" alt="twitter"></a>
            <a class="sosmed" href=""><img src="asset/img/instagram.png" class="img-fluid" alt="instagram"></a>
            <a class="sosmed" href=""><img src="asset/img/facebook.png" class="img-fluid" alt="facebook"></a>
          </div>
          <div class="backTop">
            <button onclick="topFunction()" id="myBtn" title="Go to top"><img src="asset/img/backtoup.svg" alt=""></button>
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
  <script src="asset/script/index.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>