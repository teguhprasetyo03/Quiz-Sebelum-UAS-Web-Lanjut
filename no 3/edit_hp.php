<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="js/bootstrap-datepicker.js"></script>
  <link rel="stylesheet" href="css/datepicker.css">
  <title>Data Handphone</title>
</head>

<body>
  <div class="container col-md-6 mt-4">
    <h1>Tabel Handphone</h1> <br>
    <div class="card">
      <div class="card-header bg-info text-white">
        Edit Data Handphone
      </div>
      <div class="card-body">
        <?php
        include('koneksi.php');

        $id = $_GET['id']; //mengambil id barang yang ingin diubah

        //menampilkan barang berdasarkan id
        $data = mysqli_query($koneksi, "select * from tb_hp where id = '$id'");
        $row = mysqli_fetch_assoc($data);

        ?>
        <form action="" method="post" role="form">
          <div class="form-group">
            <label>Kode Handphone</label>
            <input type="text" name="kode_hp" required="" class="form-control" value="<?= $row['kode_hp']; ?>">
            <!-- ini digunakan untuk menampung id yang ingin diubah -->
            <input type="hidden" name="id" required="" value="<?= $row['id']; ?>">
          </div>
          <div class=" form-group">
            <label>Merk</label>
            <input type="text" name="merk" class="form-control" value="<?= $row['merk']; ?>">
          </div>
          <div class="form-group">
            <label>Jenis Hp</label>
            <input type="text" name="jenis_hp" class="form-control" value="<?= $row['jenis_hp']; ?>">
          </div>
          <div class="form-group">
            <label>Warna</label> <br>
            <input type="text" name="warna" class="form-control" value="<?= $row['warna']; ?>">
          </div>
          <div class="form-group">
            <label>Harga</label>
            <input type="text" name="harga" required="" class="form-control" value="<?= $row['harga']; ?>">
          </div>
          <div class=" form-group">
            <label>Berat</label>
            <input type="text" name="berat" required="" class="form-control" value="<?= $row['berat']; ?>">
          </div>
          <div class="form-group">
            <label>Ukuran</label>
            <input type="text" name="ukuran" class="form-control datepicker" required value="<?= $row['ukuran']; ?>">
          </div>
          <br>
          <button type="submit" class="btn btn-primary" name="submit" value="simpan">Ubah Data</button>
        </form>

        <?php

        if (isset($_POST['submit'])) {
          //menampung data dari inputan
          $id = $_POST['id'];
          $kode = $_POST['kode_hp'];
          $merk = $_POST['merk'];
          $jenis = $_POST['jenis_hp'];
          $warna = $_POST['warna'];
          $harga = $_POST['harga'];
          $berat = $_POST['berat'];
          $ukuran = $_POST['ukuran'];

          //query untuk menambahkan barang ke database, pastikan urutan nya sama dengan di database
          mysqli_query($koneksi, "update tb_hp set kode_hp='$kode', merk= '$merk',jenis_hp='$jenis',
                        warna='$warna',harga='$harga',berat='$berat',ukuran='$ukuran' where id ='$id'")
            or die(mysqli_error($koneksi));
          //id barang tidak dimasukkan, karena sudah menggunakan AUTO_INCREMENT, id akan otomatis

          //ini untuk menampilkan alert berhasil dan redirect ke halaman index
          echo "<script>alert('data berhasil diubah.');window.location='tampil_hp.php';</script>";
        }
        ?>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->

</body>

</html>