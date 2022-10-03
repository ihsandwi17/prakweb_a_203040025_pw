<?php 
// koneksi ke DB dan pilih DB
$conn = mysqli_connect('localhost', "root","", "prakweb_a_203040025_pw");

//query isi tabel mahasiswa 
$result = mysqli_query($conn, "SELECT * FROM buku");

//ubah data ke dalam array
// $row = mysqli_fetch_row($result); Array numerik
// $row = mysqli_fetch_assoc($result); Array assosiative
// $row = mysqli_fetch_array($result); Keduanya
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}

//tampung ke varubel mahasiswa
$buku = $rows;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h3>Daftar Buku</h3>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>id_buku</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>gambar</th>
           
        </tr>

        <?php $i = 1; 
        foreach($buku as $buku) : ?>

        <tr>
            <td><?= $buku['id_buku']; ?></td>
            <td><?= $buku['judul_buku']; ?></td>
            <td><?= $buku['penulis']; ?></td>
            <td><img src="gambar/<?= $buku['gambar']; ?>" width="150"></td>
            <td>
                <a href="">ubah</a>  | <a href="">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>