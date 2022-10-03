<?php
session_start();

require 'function.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// ambil id dari url
$id = $_GET['id'];

// query buku berdasarkan id
$data = query("SELECT * FROM buku WHERE id = $id");

// cek apakah tombol ubah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('data berhasil diubahkan!');
            document.location.href = 'index.php';
          </script>";
  } else {
    echo "data gagal diubahkan!";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data buku</title>
</head>

<body>
  <h3>Form Ubah Data Buku</h3>

  <form method="POST" action="">
    <input type="hidden" name="id" value="<?= $m['id']; ?>">
    <ul>
      <li>
        <label>
          id_buku :
          <input type="text" name="id_buku" autofocus required value="<?= $data['id_buku']; ?>">
        </label>
      </li>

      <li>
        <label>
          Gambar :
          <input type="text" name="gambar" required value="<?= $data['gambar']; ?>">
        </label>
      </li>

      <li>
        <label>
          Penulis :
          <input type="text" name="penulis" required value="<?= $data['penulis']; ?>">
        </label>
      </li>

      <li>
        <label>
          penulis :
          <input type="text" name="penulis" required value="<?= $data['penulis']; ?>">
        </label>
      </li>
      <li>
        <button type="submit" name="ubah">Ubah Data!</button>
      </li>
    </ul>
  </form>
</body>


</html