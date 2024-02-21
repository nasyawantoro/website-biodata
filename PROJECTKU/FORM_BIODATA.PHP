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

    <form action="proses_daftar.php" method="POST">
          <input type="text" name="nama" placeholder="Nama lengkap"/>
            <input type="text" name="jurusan" placeholder="Jurusan"/>
            <input type="text" name="kelas" placeholder="Kelas"/>
            <input type="date" name="ttl" placeholder="Tanggal Lahir"/>
            <input type="radio" name="gender"  value="laki-laki" placeholder="Laki-Laki "> Laki-Laki</input>
            <input type="radio" name="gender"  value="perempuan" placeholder="Perempuan">Perempuan</input>
            <input type="text" name="no_hp" placeholder="Nomor Handphone" />
             <select name="agama" placeholder="Agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Buddha</option>
                <option>Konghucu</option>
             </select>
            <textarea name="alamat" placeholder="Alamat"></textarea>
            <input type="submit" value="Simpan" name="simpan"/>

     </form>
     </div>
</body>
</html>