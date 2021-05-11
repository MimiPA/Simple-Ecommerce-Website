<?php
require_once("koneksi.php");
 
$id_order = $_GET['id_order'];

$query = "DELETE FROM tabel_order WHERE id_order='$id_order'";

if(mysqli_query($conn, $query)){
    header("Location: keranjangBelanja.php");
}
else{
    die ('Hapus Data Gagal!' .mysqli_error($conn));
}
?>