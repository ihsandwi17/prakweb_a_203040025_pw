<?php
session_start();

require 'function.php';
$buku = query("SELECT * FROM buku");


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buku</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <h1>Daftar Buku </h1>
  <a href="tambah.php">Tambah Buku</a>
  <table border="1" cellpading="10" cellspacing="0">
    <tr>
      <th>id_buku</th>
      <th>gambar</th>
      <th>Judul</th>
      <th>Penulis</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($buku as $buku) : ?>
      <tr>
        <td><?= $buku['id_buku']; ?></td>
        <td><img src="gambar/<?= $buku['gambar']; ?>" width="170"></td>
        <td><?= $buku['judul_buku']; ?></td>
        <td><?= $buku['penulis']; ?></td>
        <td>
        <center>
                  <button style="background-color: white;">
                    <div class="update"> <a href="ubah.php?id=<?= $row["id"]; ?>" onclick="return confirm('Ubah Data??')" class="btn btn-primary mt-4">Ubah</a></div>
                  </button>
                  <button style="background-color: red;">
                    <div class="update"><a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Hapus Data??')" class="btn btn-danger mt-3">Hapus</a></div>
                  </button>
                  <a href="tambah.php">
  <button>Tambah</button>
</a>
                </center>
      </tr>
    <?php endforeach; ?>
  </table>

</body>

</html>