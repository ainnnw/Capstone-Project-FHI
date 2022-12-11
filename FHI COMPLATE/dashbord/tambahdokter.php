<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add dokter</title>
    <!--style-->
    <meta name="dicoding:email" content="202310021@student.ibik.ac.id">
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
    <nav class="navbar  navbar-light bg-light navbar-expand-lg  shadow-sm p-2 mb-4 bg-body rounded justify-content-centar padding-bottom-5 "
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
        <form method="post" action="../proses/tambahdokter.php" class=" row " enctype="multipart/form-data">
            <div class="card col-lg-12 g-4 justify-content-center mx-5">
                <div class="card-header">
                    TAMBAH PROFILE DOKTER
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">NAMA LENGKAP DOKTER</label>
                    <input type="text" class="form-control" name="NamaDokter" id="exampleFormControlInput1" rows="3">
                </div>

                <div class="mb-3 ">
                    <label for="exampleFormControlTextarea1" class="form-label">PROFILE SINGKAT</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="profilesingkat"
                        rows="4"></textarea>
                </div>

                <div class="mb-3 ">
                    <label for="exampleFormControlTextarea1" class="form-label">PENDIDIKAN YANG TELAH DILALUI</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="pendidikan"
                        placeholder="Sp.OG - Spesialis Obstetri & Ginekologi (Kebidanan dan Kandungan) - Universitas Indonesia"
                        rows="3"></textarea>
                </div>

                <select class="form-select form-label mb-3 " style="width: 250px;" name="spesailis"
                    aria-label="Default select example">
                    <option selected>Keahlian/Spesialis</option>
                    <option value="UMUM" name="kategori">UMUM</option>
                    <option value="DOKTER BAYI" name="kategori">DOKTER BAYI</option>
                    <option value="DOKTER ANAK" name="kategori">DOKTER ANAK</option>
                    <option value="DOKTER KANDUNGAN" name="kategori">DOKTER KANDUNGAN</option>
                    <option value="DOKTER GIGI" name="kategori">DOKTER GIGI</option>
                    <option value="DOKTER LANSIA" name="kategori">DOKTER LANSIA</option>
                    <option value="DOKTER LAINNYA" name="kategori">DOKTER LAINNYA</option>
                </select>
                <div class="mb-3 ">
                    <label for="exampleFormControlTextarea1" class="form-label">ORGANISASI PREFISIONAL</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="organisasi"
                        rows="3"></textarea>
                </div>

                <div class="mb-3 ">
                    <label for="exampleFormControlTextarea1" class="form-label">PELAYANAN</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="pelayanan"
                        rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">TEMPAT BEKERJA/PRATIK</label>
                    <input type="text" class="form-control" name="tempatpraktik" id="exampleFormControlInput1">
                </div>

                <div class="mb-3 ">
                    <label for="exampleFormControlTextarea1" class="form-label">ALAMAT BEKERJA/TEMPAT PRAKTIK</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="alamatpraktik"
                        rows="3"></textarea>
                </div>


                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">JADWAL PRAKTIK</label>
                    <input type="text" class="form-control" name="jadwalpraktik" id="exampleFormControlInput1"
                        placeholder="SENIN-KAMIS">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">JAM PRAKTIK</label>
                    <input type="text" class="form-control" name="jampraktik" id="exampleFormControlInput1"
                        placeholder="09.00- 15.00">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">MINIMAL BIAYA</label>
                    <input type="text" class="form-control" name="biaya" id="exampleFormControlInput1"
                        placeholder="50000">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">NO HP AKTIF </label>
                    <input type="text" class="form-control" name="nohp" id="exampleFormControlInput1">
                </div>
                <div class="mb-3">
                    <input type="file" name="gambar" />
                </div>

                <div class="aksi">
            <button type="submit" name="simpan" value="simpan" class="btn btn-success float-end ms-2">Simpan</button>
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