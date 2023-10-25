<?php
include("config.php");
if (isset($_POST['commit'])) {

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $sekolah = $_POST['sekolah_asal'];

    $query = pg_query("UPDATE calonsiswa SET (nama, alamat, jenis_kelamin, sekolah_asal) = ('$nama', '$alamat', '$jk', '$sekolah') WHERE id='$id'");

    if ($query == TRUE) {
        header('Location: daftarsiswa.php?status=sukses');
    } else {
        header('Location: daftarsiswa.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}
?>