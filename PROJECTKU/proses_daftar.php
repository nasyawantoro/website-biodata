<?php

include("CONFIG.PHP");

if (isset($_POST['simpan'])) {
     
      $nama = $_POST['nama'];
      $jurusan = $_POST['jurusan'];
      $kelas = $_POST['kelas'];
      $ttl = $_POST['ttl'];
      $gender = $_POST['gender'];
      $no = $_POST['no_hp'];
      $agama = $_POST['agama'];
      $alamat = $_POST['alamat'];

      $sql = "INSERT INTO biodataku(nama,jurusan,kelas,ttl,gender,no_hp,agama,alamat) VALUE ('$nama','$jurusan','$kelas','$ttl','$gender','$no','$agama','$alamat')";
      $query = mysqli_query($db, $sql);

      if ($query) {
        header('Location: INDEX.PHP?status=sukses');
      }else {
        header('Location: INDEX.PHP?status=gagal');
      }
}else {
    die("Akses Dilarang...");
}

?>