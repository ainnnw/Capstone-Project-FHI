<?php 
session_start();
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$tanggalpost = $_POST['tanggalPost'];
$judul = $_POST['judul'];
$gambar = $_POST['gambar'];
$isi = $_POST['isi'];
$refrensi = $_POST['refrensi'];
$penulis = $_POST['penulis'];
$isipendek = $_POST['isipendek'];
$kategori = $_POST['kategori'];
// menginput data ke database
$update=mysqli_query($koneksi,"update blog set tanggalPost='$tanggalpost', judul='$judul', gambar='$gambar', isi='$isi', refrensi='$refrensi', penulis='$penulis', isipendek='$isipendek', kategori='$kategori' where id='$id'");
if($update){

    // pesan dengan sistem session
    $_SESSION['pesan'] = '<div class="alert alert-warning text-center alert-dismissible fade show" role="alert">
    <strong>Data Berhasil diperbarui</strong>.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
    header("location:../dashbord/dashboardblog.php"); // kembali ke halaman tampil
    }else{
    echo "Gagal update data!";
    }
?>
 
?>  