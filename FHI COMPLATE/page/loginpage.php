<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!--style-->
  <meta name="dicoding:email" content="202310021@student.ibik.ac.id">
  <link href="../asset/style/index.css" rel="stylesheet">
  <link href="../asset/style/responsive.css" rel="stylesheet">
  <link rel="stylesheet" href="../asset/style/login.css">
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
  <nav class="navbar border">
    <a class="navbar-brand " href="../index.html">
      <img src="../asset/img/logo.png" alt="Logo" width="60" height="60" class="d-inline-block align-text-center mb-2">
      <span>Family Healting Information </span>
    </a>
    <div class="judul">
      <p>Log in</p>
    </div>
  </nav>

  <main>
    <!--hero-->
    <div class="hero">
      <div class="card-login row py-5">
        <div class="logo-login ">
          <!-- <img src="./asset/img/logo-login.png" alt=""> -->
        </div>
        <div class="card  col-lg-3 align-items-center pb-5">
          <div class="login">
            <h2>Log in</h2>
            <form action="../proses/login.php" method="POST">
              <div class="form-floating mb-3">
                <input type="text" class="form-control " name="username" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput" class="">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control " name="password" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword" class="">Password</label>
              </div>
              <div class="d-grid tombol">
                <button type="submit" class="d-grid btn mt-4">Log in</button>
              </div>
              <div class="col-md-4"> </div>
               <?php
                  if (isset($_SESSION['login_gagal'])) {
                    echo '<div class="alert alert-warning" role="alert">';
                    echo $_SESSION['login_gagal'];
                    echo '</div> ';
                    session_unset();
                     }
                    ?>
                  </div>
            </form>
            <div class="form-group">
        </div>
      </div>
    </div>
    <!--feture 1-->


  </main>

  <footer>
    <div class="container footer-1">
      <div class="row">
        <div class="col-md-4 pt-3 text-center">
          <h3 class="pb-3">Tentang Kami</h3>
          <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore architecto ea quo
            enim alias omnis consequatur nobis consectetur sunt incidunt non laborum perferendis perspiciatis facilis,
            reprehenderit, dignissimos a at tempora?</p>
        </div>
        <div class="col-md-4 pt-3 text-center ">
          <h3 class="pb-3">Credit By</h3>
          <p class="credit">Lorem ipsum.com</p>
          <p class="credit">Lorem ipsum.com</p>
          <p class="credit">Lorem ipsum.com</p>
          <p class="credit">Lorem ipsum.com</p>
        </div>
        <div class="col-md-4 pt-3 text-center">
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

<script src="../asset/script/index.js"