<?php

include("CONFIG.PHP");

if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $kelas = $_POST['kelas'];
    $ttl = $_POST['ttl'];
    $gender = $_POST['gender'];
    $no = $_POST['no_hp'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];

    $sql = "UPDATE biodataku SET nama='$nama' ,jurusan='$jurusan' ,kelas='$kelas', ttl='$ttl', gender='$gender',no_hp='$no' , agama='$agama', alamat='$alamat' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: HASIL_BIODATA.PHP');
    } else {
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>