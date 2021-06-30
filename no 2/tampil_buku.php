<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <script src="js/bootstrap-datepicker.js"></script>
  <link rel="stylesheet" href="css/datepicker.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Data Handphone</title>
</head>

<body>
  <div class="container col-md-12 mt-4">
    <h1>Tabel Handphone</h1> <br>
    <div class="card">
      <div class="card-header bg-info text-white ">
        Data Handphone
        <a href="tambah.php" class="btn btn-sm btn-success float-right">Tambah</a>
      </div>
      <div class="card">
        <div class="card-header">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Kode Buku</th>
                <th>Judul Buku</th>
                <th>Jenis Buku</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Ketebalan Buku</th>
                <th>Tahun Terbit</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include('koneksi.php'); //memanggil file koneksi
              $datas = mysqli_query($koneksi, "select * from tb_buku") or die(mysqli_error($koneksi));
              //script untuk menampilkan data barang

              $no = 1; //untuk pengurutan nomor

              //melakukan perulangan
              while ($row = mysqli_fetch_assoc($datas)) {
              ?>

                <tr>
                  <td><?= $no; ?></td>
                  <td><?= $row['kode_buku']; ?></td>
                  <td><?= $row['judul_buku']; ?></td>
                  <td><?= $row['jenis_buku']; ?></td>
                  <td><?= $row['penulis']; ?></td>
                  <td><?= $row['penerbit']; ?></td>
                  <td><?= $row['ketebalan_buku']; ?></td>
                  <td><?= $row['tahun_terbit']; ?></td>
                  <td>
                    <a href="edit_buku.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                    <a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('anda yakin ingin hapus?');">Hapus</a>
                  </td>
                </tr>

              <?php $no++;
              } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
</body>

</html>