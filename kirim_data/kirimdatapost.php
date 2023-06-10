<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kirim Data Post</title>
</head>
<body>
    <center>
        <form action="../proses_kirim/proseskirimpost.php" method="POST">
            <h2>Tambah Data Tabel Post</h2>
            <label for="id_post">No Kategori</label> 
            <input type="text" name="id_kategori"> <br>
            <label for="judul">Judul</label> 
            <input type="text" name="judul"> <br>
            <label for="isi">Isi</label> 
            <input type="text" name="isi"> <br>
            <input type="submit" name="kirim" value="Kirim" /> 
        </form>
    </center>
    </body>
</html>