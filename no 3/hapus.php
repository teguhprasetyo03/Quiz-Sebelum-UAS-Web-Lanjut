<?php

include 'koneksi.php'; //menghubungkan ke file koneksi untuk ke database
$id = $_GET['id']; //menampung id

//query hapus
$datas = mysqli_query($koneksi, "delete from tb_hp where id ='$id'") or die(mysqli_error($koneksi));

//alert dan redirect ke index.php
echo "<script>
  alert('data berhasil dihapus.');
  window.location = 'tampil_hp.php';
</script>";
