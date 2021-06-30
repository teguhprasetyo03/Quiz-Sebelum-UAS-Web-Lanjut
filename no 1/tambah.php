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
        Tambah Data Karyawan
      </div>
      <div class="card-body">
        <form action="" method="post" role="form">
          <div class="form-group">
            <label>Kode Karyawan</label>
            <input type="text" name="kode_kar" required="" class="form-control">
          </div>
          <div class="form-group">
            <label>Nama Karyawan</label>
            <input type="text" name="nama_kar" class="form-control">
          </div>
          <div class="form-group">
            <label>Alamat Karyawan</label>
            <textarea class="form-control" name="alamat_kar"></textarea>
          </div>
          <div class="form-group">
            <label>Jenis Kelamin</label> <br>
            <select name="jenis_kelamin">
              <option value="laki">Laki-Laki</option>
              <option value="perempuan">Perempuan</option>
              <option value="transgender">Transgender</option>
            </select>
          </div>
          <div class="form-group">
            <label>Telp Karyawan</label>
            <input type="text" name="telp_kar" required="" class="form-control">
          </div>
          <div class="form-group">
            <label>Pengalaman</label>
            <input type="text" name="pengalaman" required="" class="form-control">
          </div>
          <div class="form-group">
            <label>Tahun Masuk</label>
            <input type="text" name="tahun_masuk" class="form-control datepicker" required />
          </div>
          <br>
          <button type="submit" class="btn btn-primary" name="submit" value="simpan">Simpan data</button>
        </form>

        <?php
        include('koneksi.php');

        //melakukan pengecekan jika button submit diklik maka akan menjalankan perintah simpan dibawah ini
        if (isset($_POST['submit'])) {
          //menampung data dari inputan
          $kode = $_POST['kode_kar'];
          $nama = $_POST['nama_kar'];
          $alamat = $_POST['alamat_kar'];
          $kelamin = $_POST['jenis_kelamin'];
          $telefon = $_POST['telp_kar'];
          $pengalaman = $_POST['pengalaman'];
          $tahun_masuk = $_POST['tahun_masuk'];


          //query untuk menambahkan barang ke database, pastikan urutan nya sama dengan di database
          $datas = mysqli_query($koneksi, "insert into tb_karyawan (kode_kar,nama_kar,alamat_kar, jenis_kelamin,telp_kar,pengalaman,tahun_masuk) values('$kode', '$nama', '$alamat', '$kelamin', '$telefon', '$pengalaman', '$tahun_masuk')") or die(mysqli_error($koneksi));
          //id barang tidak dimasukkan, karena sudah menggunakan AUTO_INCREMENT, id akan otomatis

          //ini untuk menampilkan alert berhasil dan redirect ke halaman index
          echo "<script>alert('data berhasil disimpan.');window.location='tampil_karyawan.php';</script>";
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