<?php
include("../koneksi.php");
if(isset($_POST['kirim'])) {
    
    $kategori = $_POST['kategori'];

    // buat query
    $sql = "INSERT INTO post (kategori) VALUE ('$kategori')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: ../tampildata.php?status=sukses');
    } else {
        header('Location: ../kirim_data/kirimdatakategori.php?status=gagal');
        
    }
} else {
    die("Akses dilarang...");
}

?>