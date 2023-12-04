<?php 
require 'koneksi.php';

if (isset($_POST["submit"])) {
    $gambar = $_FILES['gambar'];
    $namaFile = $gambar['name'];
    $ukuranFile = $gambar['size'];
    $error = $gambar['error'];
    $tmpName = $gambar['tmp_name'];

    if ($error === 0) {
        $tujuan = 'img/' . $namaFile;
        move_uploaded_file($tmpName, $tujuan);
        $_POST['gambar'] = $namaFile;

        if (tambah($_POST) > 0) {
            echo "
            <script>
            alert('Data berhasil ditambah');
            document.location.href='latihanweb1.php';
            </script>
            ";
        } else {
            echo "
            <script>
            alert('Data gagal ditambah');
            document.location.href='latihanweb1.php';
            </script>
            ";
        }
    } else {
        echo "File gagal diunggah!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data komik</title>
    <link rel="stylesheet" href="css/style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nova+Square&family=Silkscreen&display=swap" rel="stylesheet">
</head>
<body>
    <h1>Tambah Data Komik</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="file" name="gambar" id="gambar" required>
            </li>
            <li>
                <label for="judul">Judul : </label>
                <input type="text" name="judul" id="judul;" required>
            </li>
            <li>
                <label for="tipe">Tipe : </label>
                <input type="text" name="tipe" id="tipe" required>
            </li>
            <li>
                <label for="warna">Warna : </label>
                <input type="text" name="warna" id="warna" required>
            </li>
            <li>
                <label for="harga">Harga : </label>
                <input type="text" name="harga" id="harga" required>
            </li>
            <br><br>
            <button type="submit" name="submit">Tambah Data</button>
        </ul>
    </form>
</body>
</html>