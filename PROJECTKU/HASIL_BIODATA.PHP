<?php include ("CONFIG.PHP"); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengisian Biodata SIswa</title>
</head>
<body>
    <header>
        <h3>Siswa sudah Mengisi Biodata<h3>
    </header>

    <nav>
        <a href="FORM_BIODATA.PHP">[+] ADD NEW</a>
    </nav>

    <br>
<div class="table-wrapper">

    <table  border="1">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Kelas</th>
            <th>TTL</th>
            <th>Jenis Kelamin</th>
            <th>Nomor hp</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

    <?php
    $sql = "SELECT * FROM biodataku";
    $query = mysqli_query($db, $sql);

    while ($siswa = mysqli_fetch_array ($query)) {
        echo "<tr>";

        echo "<td>".$siswa['id']."</td>";
        echo "<td>".$siswa['nama']."</td>";
        echo "<td>".$siswa["jurusan"]."</td>";
        echo "<td>".$siswa["kelas"]."</td>";
        echo "<td>".$siswa["ttl"]."</td>";
        echo "<td>".$siswa["gender"]."</td>";
        echo "<td>".$siswa["no_hp"]."</td>";    
        echo "<td>".$siswa["agama"]."</td>";
        echo "<td>".$siswa["alamat"]."</td>";

        echo "<td>";
        echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
        echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
        echo "</td>";
        
        echo "</tr>";
    }
    ?>
    </div>
    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query)?></p>
</body>
</html>