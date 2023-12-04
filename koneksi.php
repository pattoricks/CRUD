<?php
$conn = mysqli_connect("127.0.0.1", "root", "", "latihan");

function read($data){
    global $conn;
    $result = mysqli_query($conn, $data);
    if (!$result){
        echo mysqli_error($conn);
        return [];
    }
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;
    $gambar = htmlspecialchars($data['gambar']);
    $judul = htmlspecialchars($data['judul']);
    $tipe = htmlspecialchars($data['tipe']);
    $warna = htmlspecialchars($data['warna']);
    $harga = htmlspecialchars($data['harga']);

    $query = "INSERT INTO buku (gambar, judul, tipe, warna, harga) VALUES ('$gambar', '$judul', '$tipe', '$warna', '$harga')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function delete($id){
    global $conn;
    $query = "DELETE FROM buku WHERE id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function edit($data){
    global $conn;
    $id = $data['id'];
    $gambar = htmlspecialchars($data['gambar']);
    $judul = htmlspecialchars($data['judul']);
    $tipe = htmlspecialchars($data['tipe']);
    $warna = htmlspecialchars($data['warna']);
    $harga = htmlspecialchars($data['harga']);

    $query = "UPDATE buku SET gambar = '$gambar', judul = '$judul', tipe = '$tipe', warna = '$warna', harga = '$harga' WHERE id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
?>