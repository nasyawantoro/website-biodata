<?php

include("CONFIG.PHP");

if( isset($_GET['id']) ){
   
    $id = $_GET['id'];

    $sql = "DELETE FROM biodataku WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ){
        header('Location: HASIL_BIODATA.PHP');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>