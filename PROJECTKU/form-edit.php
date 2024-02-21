<?php

include("CONFIG.PHP");

if( !isset($_GET['id']) ){
    header('Location: HASIL_BIODATA.PHP');
}

$id = $_GET['id'];

$sql = "SELECT * FROM biodataku WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pengisian Biodata Siswa SMKN 26</title>
</head>
<body>
    <div class="container">
    <header>
        <H3>Formulir Pengisian Biodata Siswa</H3>
    </header>

    <form action="PROSES_EDIT.PHP" method="POST">

    <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />


          <input type="text" name="nama" placeholder="Nama lengkap" value="<?php echo $siswa['nama'] ?>" />
            <input type="text" name="jurusan"  placeholder="Jurusan" value="<?php echo $siswa['jurusan'] ?>" />
            <input type="text" name="kelas" placeholder="Kelas" value="<?php echo $siswa['kelas'] ?>" />
            <input type="date" name="ttl" placeholder="Tanggal"value="<?php echo $siswa['ttl'] ?>" />
            <label><input type="radio" name="gender"  value="laki-laki" placeholder="Laki-Laki "><?php echo ($siswa == 'laki-laki') ? "checked": "" ?> Laki-laki</label>
            <label><input type="radio" name="gender"  value="perempuan" placeholder="Perempuan"><?php echo ($siswa == 'perempuan') ? "checked": "" ?> Perempuan</label>
            <input type="text" name="no_hp" placeholder="Nomor Handphone"value="<?php echo $siswa['no_hp'] ?>"  />
             <select name="agama" placeholder="Agama">
                <option> <?php echo ($siswa == 'Islam') ? "selected": "" ?>Islam</option>
                <option> <?php echo ($siswa == 'Kristen') ? "selected": "" ?>Kristen</option>
                <option> <?php echo ($siswa == 'Hindu') ? "selected": "" ?>Hindu</option>
                <option> <?php echo ($siswa == 'Buddha') ? "selected": "" ?>Budhha</option>
                <option> <?php echo ($siswa == 'Konghucu') ? "selected": "" ?>Konghucu</option>
             </select>
            <textarea name="alamat" placeholder="Alamat"><?php echo $siswa['alamat'] ?></textarea>
            <input type="submit" value="Simpan" name="simpan"/>

     </form>
     </div>
</body>
</html>