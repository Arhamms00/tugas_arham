<?php
include "koneksi.php";
$data = mysqli_query($koneksi, "SELECT * FROM anggota");
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Anggota</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Daftar Anggota</h2>
    <table>
      <tr>
        <th>No</th><th>Nama</th><th>NIK</th><th>Alamat</th><th>Email</th><th>Jenis Kelamin</th><th>Aksi</th>
      </tr>
      <?php $no = 1; while($row = mysqli_fetch_array($data)) { ?>
      <tr>
        <td><?= $no++ ?></td>
        <td><?= $row['nama'] ?></td>
        <td><?= $row['nik'] ?></td>
        <td><?= $row['alamat'] ?></td>
        <td><?= $row['email'] ?></td>
        <td><?= $row['jenis_kelamin'] ?></td>
        <td>
          <a href="edit.php?id=<?= $row['id'] ?>" class="edit">Edit</a>
          <a href="hapus.php?id=<?= $row['id'] ?>" class="hapus" onclick="return confirm('Yakin ingin hapus?')">Hapus</a>
        </td>
      </tr>
      <?php } ?>
      </table>
      <div class="countainer">
        <a href="halaman_utama.html" class="btn btn-center">Kembali ke halaman sebelumnya</a>
  </div>
</body>
</html>
