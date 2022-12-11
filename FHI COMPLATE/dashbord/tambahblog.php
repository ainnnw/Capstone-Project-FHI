<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="dicoding:email" content="202310021@student.ibik.ac.id">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add Blog</title>
  <!--style-->
  <link href="../asset/style/fituradd.css" rel="stylesheet">
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
  <nav
    class="navbar  navbar-light bg-light navbar-expand-lg  shadow-sm p-2 mb-4 bg-body rounded justify-content-centar padding-bottom-5 "
    style="position: fixed; width: 100%; z-index:1;">
    <a class="navbar-brand ms-5" href="../index.php"><img src="../asset/img/logo.png" width="30px" height="30px">
      Famili Healting Information
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon "></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav justify-content-center">
        <li class="nav-item d-none d-sm-inline-block">
          <a href="../index.php" class="nav-link"><i class="bi bi-house"></i> Beranda</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="" class="nav-link"><i class="bi bi-gear"></i> Blog</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link"><i class="bi bi-currency-exchange"></i> Dokter</a>
        </li>
      </ul>
    </div>
    </div>
  </nav>
  <div class="container col-lg-6 pt-5">
    <form method="post" action="../proses/proses_tambah.php" class=" row ">
      <div class="card col-lg-12 g-4 justify-content-center mx-5">
        <div class="card-header">
          Tambah Artikel
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Judul Blog</label>
          <input type="text" class="form-control" name="judul" id="exampleFormControlInput1" rows="3">
          <div class="mb-3 ">
            <label for="exampleFormControlInput1" class="form-label ">TanggalPost</label>
            <input type="date" class="form-control" style="width: 150px;" name="tanggalPost"
              id="exampleFormControlInput1">
            <div class="mb-3 ">
              <label for="exampleFormControlTextarea1" class="form-label">Slug</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" name="isipendek" rows="4"></textarea>
            </div>
            <div class="mb-3 ">
              <label for="exampleFormControlTextarea1" class="form-label">Isi Detail</label>
              <textarea class="form-control" name="isi" id="exampleFormControlTextarea1" name="isi"
                rows="15"></textarea>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Nama Gambar</label>
              <input type="text" class="form-control" name="gambar" id="exampleFormControlInput1">
            </div>
            <select class="form-select form-label mb-3 " style="width: 150px;" name="kategori"
              aria-label="Default select example">
              <option selected>Kategori</option>
              <option value="Terbaru" name="kategori">Terbaru</option>
              <option value="Terpopuler" name="kategori">Terpopuler</option>
              <option value="lansia" name="kategori">Lansia</option>
              <option value="bayi" name="kategori">Bayi</option>
              <option value="anak" name="kategori">Anak</option>
              <option value="Ibu mengandung" name="kategori">ibu mengandung</option>
              <option value="Ibu menyusui" name="kategori">ibu menyusui</option>
              <option value="Kesehatan mental" name="kategori">Kesehatan mental</option>
              <option value="Umum" name="kategori">Umum</option>
              <option value="Lainnya" name="kategori">Lainnya</option>
            </select>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Editor</label>
              <input type="text" class="form-control" name="penulis" id="exampleFormControlInput1">
              <div class="mb-3 ">
                <label for="exampleFormControlTextarea1" class="form-label">Refrensi</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="refrensi" rows="3"></textarea>
              </div>
              <div class="aksi">
                <button type="submit" 
                  class="btn btn-success float-end ms-2">Simpan</button>
                <button type="cancel" class="btn btn-danger float-end">Batal</button>
              </div>
            </div>
    </form>
  </div>
</body>
<footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</footer>

</html>