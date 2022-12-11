<?php 
session_start();
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$NamaDokter = $_POST['NamaDokter'];
$spesailis = $_POST['spesailis'];
$profilesingkat = $_POST['profilesingkat'];
$pendidikan = $_POST['pendidikan'];
$organisasi = $_POST['organisasi'];
$pelayanan = $_POST['pelayanan'];
$tempatpraktik = $_POST['tempatpraktik'];
$alamatpraktik = $_POST['alamatpraktik'];
$jadwalpraktik = $_POST['jadwalpraktik'];
$jampraktik = $_POST['jampraktik'];
$biaya = $_POST['biaya'];
$nohp = $_POST['nohp'];
// menginput data ke database
$update=mysqli_query($koneksi,"update dokter set NamaDokter='$NamaDokter', spesailis='$spesailis', profilesingkat='$profilesingkat', pendidikan='$pendidikan', 
organisasi='$organisasi', pelayanan='$pelayanan', tempatpraktik='$tempatpraktik', alamatpraktik='$alamatpraktik', jadwalpraktik='$jadwalpraktik', jampraktik='$jampraktik',
biaya='$biaya', nohp='$nohp' where id='$id'");
if($update){
  $_SESSION['pesan'] = '<div class="alert alert-warning text-center alert-dismissible fade show" role="alert">
  <strong>Data Berhasil diperbarui</strong>.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
  header("location:../dashbord/dashboarddokter.php"); // kembali ke halaman tampil
} else {
  echo "Gagal update data!";
  // pesan dengan sistem session
}
?>
 
?>  