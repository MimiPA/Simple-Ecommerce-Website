<?php 
include "koneksi.php";
include "cekSession.php";

$id_produk = $_GET['id_produk'];
$total_item = $_GET['total_item'];

$queryLogin = mysqli_query($conn, "SELECT id_login FROM tabel_login WHERE user = '$username'");
$infoLogin = mysqli_fetch_array($queryLogin);
$id_login = $infoLogin['id_login'];

//di cek dulu apakah barang yang di beli sudah ada di tabel keranjang
$queryCek = mysqli_query($conn, "SELECT id_produk FROM tabel_order WHERE id_produk = '$id_produk' AND id_login = '$id_login'");
$cek = mysqli_fetch_array($queryCek);
$cek_id = $cek['id_produk'];

if ($cek_id >= 1){
    $queryUpdate = mysqli_query($conn, "UPDATE tabel_order SET total_item = total_item + '$total_item' WHERE id_login ='$id_login' AND id_produk='$id_produk'");
}
else{
    $queryInsert = mysqli_query($conn, "INSERT INTO tabel_order (id_login, id_produk, total_item) VALUES ('$id_login', '$id_produk', '$total_item')");
}
header('Location:keranjangBelanja.php');
?>