<!DOCTYPE html>
<html>
<head>
    <title>Pengisian Biodata Siswa SMKN 26</title>
</head>

<body>
    <header>
        <h3>Pengisian Biodata Siswa</h3>
        <h1>SMKN 26</h1>
    </header>

    <h4>Menu</h4>
    <nav>

        <ul>
            <li><a href="FORM_BIODATA.PHP">Pengisian biodata murid</a></li>
            <li><a href="HASIL_BIODATA.PHP">Biodata Siswa-Siswi</a></li>
        </ul>
    </nav>

    <?php if (isset($_GET['status'])): ?>
    <p>
         <?php
         if ($_GET['status'] == 'sukses') {
            echo"Pengisian Biodata Siswa Berhasil";
         } else {
            echo"Pengisian Biodata Siswa Gagal";
         }
         ?>
    </p>
 <?php endif;?>

    </body>
</html>


