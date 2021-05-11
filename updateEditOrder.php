<?php 
include "koneksi.php";
include "cekSession.php";

$id_produk = $_GET['id_produk'];
$id_order = $_GET['id_order'];
$total_item = $_GET['total_item'];

if($total_item == 0){
    $query = "DELETE FROM tabel_order WHERE id_order='$id_order'";
    if(mysqli_query($conn, $query)){
        header("Location: keranjangBelanja.php");
    }
    else{
        die ('Hapus Data Gagal!' .mysqli_error($conn));
    }
}
else{
    $queryUpdate = mysqli_query($conn, "UPDATE tabel_order SET total_item = '$total_item' WHERE id_order='$id_order' AND id_produk='$id_produk'");
    
    if($queryUpdate){
        header('Location:keranjangBelanja.php');
    }
    else {
        die ('Edit Gagal!' .mysqli_error($conn));
    }
}
  
mysqli_close($conn);

?>