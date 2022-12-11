<?php 
session_start();
// koneksi database
include '../koneksi.php';
if (isset($_POST['simpan'])) {
    $folder = 'data/';
    $name_p = $_FILES['gambar']['name'];
    $sumber_p = $_FILES['gambar']['tmp_name'];
    move_uploaded_file($sumber_p, $folder . $name_p);
    // menangkap data yang di kirim dari form
    $NamaDokter = $_POST['NamaDokter'];
    $gambar = $_POST['gambar'];
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
    $add = mysqli_query($koneksi, "insert into dokter values('','$NamaDokter','$name_p','$spesailis','$profilesingkat','$pendidikan','$organisasi','$pelayanan','$tempatpraktik','$alamatpraktik','$jadwalpraktik','$jampraktik','$biaya','$nohp')");
    if ($add) {

        // pesan dengan sistem session
        $_SESSION['pesan'] = '<div class="alert alert-success text-center alert-dismissible fade show" role="alert">
    <strong>Data Berhasil ditambah</strong>.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
        header("location:../dashbord/dashboarddokter.php"); // kembali ke halaman tampil
    } else {
        echo "Gagal tambah data";
    }
}
?>




