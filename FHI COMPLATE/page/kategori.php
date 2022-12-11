<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Artikel Page</title>
  <!--style-->
  <meta name="dicoding:email" content="202310021@student.ibik.ac.id">
  <link href="../asset/style/index.css" rel="stylesheet">
  <link href="../asset/style/responsive.css" rel="stylesheet">
  <link href="../asset/style/artikel.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
      <a class="navbar-brand" href="../index.php">
        <img src="../asset/img/logo.png" alt="Logo" width="60" height="60"
          class="d-inline-block align-text-center mb-2">
        <span>Family Healting Information </span>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="../page/loginpage.php"><img src="../asset/img/person.svg" alt="login" height="40"
                width="40"></i></a>
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
      <a class="nav-link" href="./artikel.php">ARTIKEL</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../page/dokterpage.php">CARI DOKTER</a>
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
    <form class="d-flex " role="search" action="artikel.php?" method="get">
      <input class="form-control" type="text" name="cari" placeholder="Search" aria-label="Search">
      <button class="btn btn-success ms-1" value="Cari" type="submit"><img src="../asset/img/search.svg" alt="search"
          height="40" width="40"></button>
    </form>
    <?php
    if (isset($_GET['cari'])) {
      $cari = $_GET['cari'];
      echo "<b>Hasil pencarian : " . $cari . "</b>";
    }
    ?>
  </div>
  <main>
    <!--hero-->
    <!-- <div id="carouselExampleCaptions" class="carousel" data-bs-ride="false"> -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../asset/img/artikel (4).png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Mari Hidup Sehat Bersama Kami </h5>
          <p>"Jangan menunggu sakit, Budayakan hidup sehat untuk mencegah segala penyakit."</p>
        </div>
      </div>
    </div>
    <!-- </div> -->
    <!--feture 1-->
    <!-- Kategori -->
    <div class="container kategori">
      <?php
    include '../koneksi.php';
    if (isset($_GET['kategori'])) {
      $kategorii = $_GET['kategori'];
      $data = mysqli_query($koneksi, "select * from blog where kategori='$kategorii'");
      $result = mysqli_fetch_array($data);
    ?>
      <h1>Kategori
        <?php echo $result['kategori'] ?>
      </h1>
      <?php
    }
      ?>
      <a class="btn btn-success" href="kategori.php?kategori=terbaru" role="">Terbaru</a>
      <a class="btn btn-success" href="kategori.php?kategori=populer" role="button">Terpopuler</a>
      <a class="btn btn-success" href="kategori.php?kategori=anak" role="button">Anak</a>
      <a class="btn btn-success" href="kategori.php?kategori=bayi" role="button">Bayi</a>
      <a class="btn btn-success" href="kategori.php?kategori=Ibu Mengandung" role="button">Ibu Mengandung</a>
      <a class="btn btn-success" href="kategori.php?kategori=Ibu Menyusui" role="button">Ibu Menyusui</a>
      <a class="btn btn-success" href="kategori.php?kategori=Lansia" role="button">Lansia</a>
      <a class="btn btn-success" href="kategori.php?kategori=Kesehatan Mental" role="button">Kesehatan Mental</a>
      <a class="btn btn-success" href="kategori.php?kategori=Umum" role="button">Umum</a>
      <a class="btn btn-success" href="kategori.php?kategori=Lainnya" role="button">Lainnya</a>

      <!-- Kategori -->
    <div class="row g-0 py-5 row-cols-1 row-cols-lg-3">
    <?php
    include '../koneksi.php';
    if (isset($_GET['kategori'])) {
      $kategorii = $_GET['kategori'];
    } else {
      die("Error. ID Selected! ");
    }

    $data = mysqli_query($koneksi, "select * from blog where kategori='$kategorii'");
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <div class=" card col-lg-3 mx-3">
          <img src="https://source.unsplash.com/1200x700/?/<?php echo $d['gambar'] ?>" class="card-img-top" alt="...">
          <!-- <img src="./asset/img/artikel (1).png" class="card" alt="Gambar artikel"> -->
          <div class="card-body">
            <a href="../page/baca-artikel.php?id=<?php echo $d['id']; ?>">
              <?php echo $d['judul'] ?>
            </a>
            <p class="card-text">
              <?php echo $d['isipendek'] ?>
            </p>
            <p class="tanggal-terbit">
              <?php echo $d['tanggalPost'] ?>
            </p>
          </div>
        </div>
        <?php
    }
       ?>
      </div>

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
            <button onclick="topFunction()" id="myBtn" title="Go to top"><img src="../asset/img/backtoup.svg"
                alt=""></button>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright text-center">
      ©2022 Family Healting Information
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>
<script src="../asset/script/index.js"></script>