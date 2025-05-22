<?php
include "koneksi.php";

// Ambil ID terbesar saat ini
$result = mysqli_query($koneksi, "SELECT MAX(id) AS max_id FROM anggota");
$row = mysqli_fetch_assoc($result);
$id_baru = $row['max_id'] + 1;

$nama = $_POST['nama'];
$nik = $_POST['nik'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$jk = $_POST['jenis_kelamin'];

$query = "INSERT INTO anggota (id, nama, nik, alamat, email, jenis_kelamin) 
          VALUES ('$id_baru', '$nama', '$nik', '$alamat', '$email', '$jk')";
mysqli_query($koneksi, $query);

header("Location: sukses.html");
?>
