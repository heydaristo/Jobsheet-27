<?php
include("../koneksi.php");
if(isset($_POST['kirim'])) {
    
    $id_kategori = $_POST['id_kategori'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];

    // buat query
    $sql = "INSERT INTO post (id_kategori, judul, isi) VALUES ('$id_kategori', '$judul', $isi)";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: ../tampildata.php?status=sukses');
    } else {
        header('Location: ../kirim_data/kirimdatapost.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}

?>