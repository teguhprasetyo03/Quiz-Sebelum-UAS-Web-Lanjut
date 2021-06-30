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
  <title>Data Karyawan</title>
</head>

<body>
  <div class="container col-md-6 mt-4">
    <h1>Tabel Karyawan</h1> <br>
    <div class="card">
      <div class="card-header bg-secondary text-white">
        Edit Data Karyawan
      </div>
      <div class="card-body">
        <?php
        include('koneksi.php');

        $id = $_GET['id']; //mengambil id barang yang ingin diubah

        //menampilkan barang berdasarkan id
        $data = mysqli_query($koneksi, "select * from tb_karyawan where id = '$id'");
        $row = mysqli_fetch_assoc($data);

        ?>
        <form action="" method="post" role="form">
          <div class="form-group">
            <label>Kode Karyawan</label>
            <input type="text" name="kode_kar" required="" class="form-control" value="<?= $row['kode_kar']; ?>">
            <!-- ini digunakan untuk menampung id yang ingin diubah -->
            <input type="hidden" name="id" required="" value="<?= $row['id']; ?>">
          </div>
          <div class=" form-group">
            <label>Nama Karyawan</label>
            <input type="text" name="nama_kar" class="form-control" value="<?= $row['nama_kar']; ?>">
          </div>
          <div class="form-group">
            <label>Alamat Karyawan</label>
            <textarea class="form-control" name="alamat_kar"><?= $row['alamat_kar']; ?></textarea>
          </div>
          <div class="form-group">
            <label>Jenis Kelamin</label> <br>
            <select name="jenis_kelamin" value="<?= $row['jenis_kelamin']; ?>">
              <option value=" laki">Laki-Laki</option>
              <option value="perempuan">Perempuan</option>
              <option value="transgender">Transgender</option>
            </select>
          </div>
          <div class="form-group">
            <label>Telp Karyawan</label>
            <input type="text" name="telp_kar" required="" class="form-control" value="<?= $row['telp_kar']; ?>">
          </div>
          <div class=" form-group">
            <label>Pengalaman</label>
            <input type="text" name="pengalaman" required="" class="form-control" value="<?= $row['pengalaman']; ?>">
          </div>
          <div class="form-group">
            <label>Tahun Masuk</label>
            <input type="text" name="tahun_masuk" class="form-control datepicker" required value="<?= $row['tahun_masuk']; ?>">
          </div>
          <br>
          <button type="submit" class="btn btn-primary" name="submit" value="simpan">Ubah Data</button>
        </form>

        <?php

        if (isset($_POST['submit'])) {
          //menampung data dari inputan
          $id = $_POST['id'];
          $kode = $_POST['kode_kar'];
          $nama = $_POST['nama_kar'];
          $alamat = $_POST['alamat_kar'];
          $kelamin = $_POST['jenis_kelamin'];
          $telefon = $_POST['telp_kar'];
          $pengalaman = $_POST['pengalaman'];
          $tahun_masuk = $_POST['tahun_masuk'];


          //query untuk menambahkan barang ke database, pastikan urutan nya sama dengan di database
          mysqli_query($koneksi, "update tb_karyawan set kode_kar= '$kode',nama_kar= '$nama',alamat_kar='$alamat',jenis_kelamin='$kelamin',telp_kar='$telefon',pengalaman='$pengalaman',tahun_masuk='$tahun_masuk' where id ='$id'") or die(mysqli_error($koneksi));
          //id barang tidak dimasukkan, karena sudah menggunakan AUTO_INCREMENT, id akan otomatis

          //ini untuk menampilkan alert berhasil dan redirect ke halaman index
          echo "<script>alert('data berhasil diubah.');window.location='tampil_karyawan.php';</script>";
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