<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kirim Data Kategori</title>
</head>
<body>
    <center>
        <form action="../proses_kirim/proseskirimkategori.php" method="POST">
            <h2>Tambah Data Tabel Kategori</h2>
            <form action="proseskirimkategori.php" method="POST">
                <label for="kategori">Kategori</label> 
                <input type="text" name="kategori"> <br>
                <input type="submit" name="kirim" value="Kirim" />
            </form>
        </center>
    
</body>
</html>