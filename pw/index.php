<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "prakweb_2022_b_203040125");

// ambil dari tabel buku query
$result = mysqli_query($conn, "SELECT * FROM buku");

// ubah data ke dalam array
// $row = mysqli_fetch_row($result); // array numerik
// $row = mysqli_fetch_assoc($result); // array associative
// $row = mysqli_fetch_array($result); // keduanya
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}
// tampung ke variabel buku
$bk = $rows;
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="" href="style.css">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buku yang saya jual</title>
</head>

<body>

  <center><h1>Daftar Buku Mahasiswa</h1></center>

<center><table border="1" cellpading="10" cellspacing="0"></center>
    <tr bgcolor="#FFE4C4">
      <th>no</th>
      <th>Nama buku</th>
      <th>Penulis</th>
      <th>Gambar</th>
      <th>Harga</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($bk as $rows) : ?>
    <tr>
        <td><?= $rows["id"]; ?></td>
        <td style="vertical-align : middle;text-align:center;"><?= $rows["nama_buku"]; ?></td>
        <td style="vertical-align : middle;text-align:center;"><?= $rows["penulis_buku"]; ?></td>
        <td>
          <figure class="image is-120x120">
            <img src="img/<?= $rows["img"]; ?>" width="100" alt="">
          </figure>
        </td>
        <td style="vertical-align : middle;text-align:center;"><b><?= $rows["harga"]; ?></td></b>
        
      <?php endforeach; ?>

</html>