<?php
  include('function.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Tambah Produk Buku</title>
    <link rel="stylesheet" type="text/css" href="tambahproduk.css">

  </head>
  <body>
      <center>
        <h1>Tambah Produk</h1>
      <center>
      <form method="POST" action="proses_tambah.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>Nama Buku</label>
          <input type="text" name="nama" autofocus="" required="" />
        </div>
        <div>
          <label>Author Buku</label>
         <input type="text" name="author" />
        </div>
        <div>
          <label>Jumlah Halaman</label>
         <input type="text" name="jumlah_halaman" required="" />
        </div>
        <div>
          <label>Harga</label>
         <input type="text" name="harga" required="" />
        </div>
        <div>
          <label>Gambar Produk</label>
         <input type="file" name="gambar" required="" />
        </div>
        <div>
         <button type="submit">Simpan Produk</button>
        </div>
        </section>
      </form>
  </body>
</html>