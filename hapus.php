<?php 
require 'koneksi.php';
$id = $_GET["id"];
if (delete($id) > 0){
    echo "
    <script>
        alert('Data berhasil dihapus');
        document.location.href='latihanweb1.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('Data gagal dihapus'.mysqli_error($conn));
        document.location.href='latihanweb1.php';
    </script>
    ";
}
?>