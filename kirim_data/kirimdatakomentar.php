
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kirim Data</title>
</head>
<body>
    <center>
        <h2>Tambah Data Tabel Komentar</h2>
        <form action="../proses_kirim/proseskirimkomentar.php" method="POST">
            <label for="id_post">No Post</label> 
            <input type="text" name="id_post" id="id_post"> <br>
            <label for="komentar">Komentar</label> 
            <input type="text" name="komentar" id="komentar"> <br>
            <input type="submit" name="kirim" value="Kirim" />
        </form>
    </center>
        
</body>
</html>