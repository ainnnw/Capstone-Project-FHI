
<?php 
session_start();
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$judul = $_POST['judul'];
$tanggalpost = $_POST['tanggalPost'];
$gambar = $_POST['gambar'];
$isipendek = $_POST['isipendek'];
$isi = $_POST['isi'];
$kategori = $_POST['kategori'];
$refrensi = $_POST['refrensi'];
$penulis = $_POST['penulis'];
// menginput data ke database
$add=mysqli_query($koneksi,"insert into blog values('','$tanggalpost','$judul','$gambar','$isi','$refrensi','$penulis','$isipendek','$kategori')");
if($add){

    // pesan dengan sistem session
    $_SESSION['pesan'] = '<div class="alert alert-success text-center alert-dismissible fade show" role="alert">
    <strong>Data Berhasil ditambah</strong>.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
    header("location:../dashbord/dashboardblog.php"); // kembali ke halaman tampil
    }else{
    echo "Gagal tambah data";
    }
?>




