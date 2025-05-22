<?php
include "koneksi.php";

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $data = mysqli_query($koneksi, "SELECT * FROM anggota WHERE id='$id'");
  $d = mysqli_fetch_assoc($data);
} else {
  header("Location: anggota.php");
}

if (isset($_POST['update'])) {
  $nama = $_POST['nama'];
  $nik = $_POST['nik'];
  $alamat = $_POST['alamat'];
  $email = $_POST['email'];
  $jk = $_POST['jenis_kelamin'];

  mysqli_query($koneksi, "UPDATE anggota SET 
    nama='$nama', 
    nik='$nik', 
    alamat='$alamat', 
    email='$email', 
    jenis_kelamin='$jk' 
    WHERE id='$id'");

  header("Location: anggota.php");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Data Anggota</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <h2>Edit Data Anggota</h2>
  <form method="POST">
    <label>Nama Lengkap</label>
    <input type="text" name="nama" value="<?= $d['nama'] ?>" required>

    <label>NIK</label>
    <input type="text" name="nik" value="<?= $d['nik'] ?>" required>

    <label>Alamat</label>
    <input type="text" name="alamat" value="<?= $d['alamat'] ?>" required>

    <label>Email</label>
    <input type="email" name="email" value="<?= $d['email'] ?>" required>

    <label>Jenis Kelamin</label>
    <select name="jenis_kelamin" required>
      <option <?= $d['jenis_kelamin'] == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
      <option <?= $d['jenis_kelamin'] == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
    </select>

    <button type="submit" name="update" class="btn">Simpan Perubahan</button>
    <a href="anggota.php" class="btn">Batal</a>
  </form>
</div>
</body>
</html>
