<?php 
require 'koneksi.php';
$buku = read("SELECT * FROM buku");
?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nova+Square&family=Silkscreen&display=swap" rel="stylesheet">
</head> 
</head>
<body>
  <br></br>
  <h1>Daftar Komik</h1>
  <br></br>
  <table border="1" cellpadding="10">
    <tr>
      <th>No.</th> 
      <th>Gambar</th>
      <th>Judul</th> 
      <th>Tipe</th> 
      <th>Warna</th> 
      <th>Harga</th>
      <th>Tools</th>
    </tr>
  
    <?php $x=1;
    foreach ($buku as $bk) : ?>
      <tr> 
        <td><?php echo $x; ?></td> 
        <td><img src="img/<?php echo $bk["gambar"]; ?>" alt="" width=50></td>
        <td><?php echo $bk["judul"]; ?></td> 
        <td><?php echo $bk["tipe"]; ?></td> 
        <td><?php echo $bk["warna"]; ?></td> 
        <td>Rp <?php echo number_format($bk["harga"], 0, ',', '.'); ?></td>
        <td>
          <a href="edit.php?id=<?php echo $bk["id"]; ?>">Edit</a> |
          <a href="hapus.php?id=<?php echo $bk["id"]; ?>" onclick="return confirm('Apakah anda yakin?')">Hapus</a> 
        </td>
      </tr>
      <?php $x++; endforeach; ?>
    </table> 
    <br></br>
    <a href="tambah.php"><button class="btn">Tambah Data</button></a>
    <br></br>
  </body> 
</html>