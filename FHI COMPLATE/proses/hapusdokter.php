<?php 
session_start();
// koneksi database
include '../koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database

$delete=mysqli_query($koneksi,"delete from dokter where id='$id'");
if($delete){

    // pesan dengan sistem session
    $_SESSION['pesan'] = '<div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
    <strong>Data Berhasil dihapus</strong>.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
    header("location:../dashbord/dashboarddokter.php"); // kembali ke halaman tampil
    }else{
    echo "Gagal update data!";
    }
?>