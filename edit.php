<?php 
require 'koneksi.php';
$id = $_GET["id"];
$bk = read("SELECT * FROM buku WHERE id = $id")[0];

if (isset($_POST["submit"])) {
    if ($_FILES['gambar']['error'] === 0) {
        $gambar = $_FILES['gambar'];
        $namaFile = $gambar['name'];
        $tmpName = $gambar['tmp_name'];
        $tujuan = 'img/' . $namaFile;

        move_uploaded_file($tmpName, $tujuan);
        $bk['gambar'] = $namaFile;
    }

    $bk['judul'] = $_POST['judul'];
    $bk['tipe'] = $_POST['tipe'];
    $bk['warna'] = $_POST['warna'];
    $bk['harga'] = $_POST['harga'];

    if (edit($bk) > 0) {
        echo "
        <script>
        alert('Data berhasil diupdate');
        document.location.href='latihanweb1.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data gagal diupdate');
        document.location.href='latihanweb1.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit data komik</title>
    <link rel="stylesheet" href="css/style3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nova+Square&family=Silkscreen&display=swap" rel="stylesheet">
</head>
<body>
    <h1>Edit Data Komik</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <ul>
                <input type="hidden" name="id" value="<?php echo $bk["id"]; ?>">
                <li>
                    <label for="gambar">Gambar :</label>
                    <input type="file" name="gambar" id="gambar" required value="<?php echo $bk["gambar"]; ?>">
                </li>
                <li>
                    <label for="judul">Judul :</label>
                    <input type="text" name="judul" id="judul" required value="<?php echo $bk["judul"]; ?>">
                </li>
                <li>
                    <label for="tipe">Tipe :</label>
                    <input type="text" name="tipe" id="tipe" required value="<?php echo $bk["tipe"]; ?>">
                </li>
                <li>
                    <label for="warna">Warna :</label>
                    <input type="text" name="warna" id="warna" required value="<?php echo $bk["warna"]; ?>">
                </li>
                <li>
                    <label for="harga">Harga :</label>
                    <input type="text" name="harga" id="harga" required value="<?php echo $bk["harga"]; ?>">
                </li>
                <br></br>
                <button type="submit" name="submit">Edit Data</button>
            </ul>
        </form>
</body>
</html>