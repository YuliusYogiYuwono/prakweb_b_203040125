 <?php
  // memanggil file koneksi.php untuk membuat koneksi
include 'function.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM buku WHERE no='$id'";
    $result = mysqli_query($koneksi, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
      // apabila data tidak ada pada database maka akan dijalankan perintah ini
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='index.php';</script>";
       }
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data id.');window.location='index.php';</script>";
  }         
  ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Edit CRUD Buku</title>
    <link rel="stylesheet" type="text/css" href="editproduk.css">
  </head>
  <body>
      <center>
        <h1>Edit Data Buku <?php echo $data['nama']; ?></h1>
      <center>
      <form method="POST" action="proses_edit.php" enctype="multipart/form-data" >
      <section class="base">
        <!-- menampung nilai id produk yang akan di edit -->
        <input name="no" value="<?php echo $data['no']; ?>"  hidden />
        <div>
          <label>Nama Buku</label>
          <input type="text" name="nama" value="<?php echo $data['nama']; ?>" autofocus="" required="" />
        </div>
        <div>
          <label>Author Buku</label>
         <input type="text" name="author" value="<?php echo $data['author']; ?>" />
        </div>
          <div>
              <label>Jumlah Halaman</label>
              <input type="text" name="jumlah_halaman" value="<?php echo $data['jumlah_halaman']; ?>" />
          </div>
        <div>
          <label>Harga Beli</label>
         <input type="text" name="harga" required=""value="<?php echo $data['harga']; ?>" />
        </div>
        <div>
          <label>Gambar Buku</label>
          <img src="gambar/<?php echo $data['gambar']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
          <input type="file" name="gambar" />
          <i style="float: left;font-size: 11px;color: red">Abaikan jika tidak merubah gambar produk</i>
        </div>
        <div>
         <button type="submit">Simpan Perubahan</button>
        </div>
        </section>
      </form>
  </body>
</html>