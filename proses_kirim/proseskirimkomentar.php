<?php
include("../koneksi.php");
if(isset($_POST['kirim'])){

    $id_post = $_POST['id_post'];
    $komentar = $_POST['komentar'];

    // buat query
    $sql = "INSERT INTO komentar (id_post, komentar) VALUE ('$id_post', '$komentar')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: ../tampildata.php?status=sukses');
    } else {
        header('Location: ../kirim_data/kirimdatakomentar.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}

?>