<?php
$koneksi = mysqli_connect("localhost", "root", "", "komunitas");
if (!$koneksi) {
  die("Koneksi gagal: " . mysqli_connect_error());
}
?>
