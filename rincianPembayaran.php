<?php
    include "koneksi.php";
    include "navbar.php";
    
    $id_produk = '';
    $total_item = '';

    $dataOrder = "SELECT * FROM tabel_order, tabel_login WHERE tabel_order.id_login=tabel_login.id_login AND tabel_login.user='$username'";
    $result = mysqli_query($conn, $dataOrder);
    while($isi = mysqli_fetch_array($result)){
        $id_produk .= $isi['id_produk'] . ',';
        $id_login = $isi['id_login'];
        $total_item .= $isi['total_item'] . ',';
    }   

    date_default_timezone_set('Asia/Makassar');
    $tanggal = date("Y-m-d H:i:sa");

    if(isset($_POST['bayar'])){
        $total_harga = $_POST['total_harga'];
        $jasa_kirim = $_POST['jasa_kirim'];

        if($total_harga > 0 && $jasa_kirim != "Pilih Jasa"){
            $queryBayar = mysqli_query($conn, "INSERT INTO tabel_pembelian (id_login, id_produk, jumlah_item, total_harga, jasa_kirim, tanggal_pembelian) VALUES ('$id_login', '$id_produk', '$total_item', '$total_harga', '$jasa_kirim', '$tanggal')");

            if ($queryBayar) {
                $dataStok = mysqli_query($conn, "SELECT * FROM tabel_order, tabel_produk, tabel_login WHERE tabel_order.id_produk=tabel_produk.id_produk AND tabel_order.id_login=tabel_login.id_login AND tabel_login.user='$username'");
                while($data = mysqli_fetch_array($dataStok)){
                    $item = $data['total_item'];
                    $produk = $data['id_produk'];
                    $queryUpdate = mysqli_query($conn, "UPDATE tabel_produk SET stok = stok - '$item' WHERE id_produk='$produk'");
                }

                if($queryUpdate){
                    $queryDelete = mysqli_query($conn, "DELETE FROM tabel_order WHERE id_login='$id_login'");
                    echo "<script>alert('Pembayaran Berhasil pada tanggal $tanggal. Terima Kasih')</script>";
                    echo "<script>window.location.href='home.php';</script>";
                }
                else{
                    die ('Update Gagal!' .mysqli_error($conn));
                }
            }
            else {
                die ('Input Gagal!' .mysqli_error($conn));
            }
        }
        else{
            $msg = "Harap Pilih Jasa Pengiriman";
        }
    }
?>

<div class="container mt-3" style="padding-top:90px">
    <h2>Rincian Pembayaran</h2>
    <!-- Media Pembayaran -->
    <?php
        include "koneksi.php";

        $total_harga = 0;
        $data = mysqli_query($conn,"SELECT * FROM tabel_produk, tabel_order, tabel_login WHERE tabel_produk.id_produk = tabel_order.id_produk AND tabel_login.id_login=tabel_order.id_login AND tabel_login.user='$username'");
        while($d = mysqli_fetch_array($data)) {
    ?>
        <div class="media border p-3 mt-3">
            <?php echo '<img src="img/'.$d['gambar'].'" class="align-self-center mr-3" style="width:120px">' ?>
            <div class="media-body">
                <h4><?php echo $d['nama_produk']; ?></h4>
                <p>Rp. <?php echo $d['harga_produk']; ?></p>
                <p><?php echo $d['total_item']; ?></p>
                <?php
                    $total_item = $d['total_item'];
                    $harga_produk = $d['harga_produk'];
                    $total_belanjaan = $total_item * $harga_produk;
                    $total_harga += $total_belanjaan;
                ?>
            </div>
            <p class="mt-5"><b>Rp. <?php echo $total_belanjaan; ?></b></p>
        </div>
    <?php } ?>
    <br>
    <br>
    <form method="POST" action="rincianPembayaran.php">
        <h5>Pilih Jasa Pengiriman</h5>
        <div class="btn-group">
            <button type="button" name="prhl" class="btn btn-warning" id="btn1">PRHL Express (Bebas Ongkir)</button>
            <button type="button" name="jnt" class="btn btn-danger" id="btn2">JNT Express (Rp43.000 - Rp53.000)</button>
            <button type="button" name="kargo" class="btn btn-dark" id="btn3">Kargo (Rp120.000 - Rp170.000)</button>
        </div>
        <br>
        <hr>

        <p class="text-right">Total Harga Barang : <b>Rp. </b>
        <input type="text" name="total_harga_barang" value="<?=$total_harga; ?>" readonly></p>

        <input type="hidden" name="jasa_kirim" id="jasa_kirim" value="Pilih Jasa" readonly></p>

        <p class="text-right">Harga Ongkir : <b>Rp. </b>
        <input type="text" name="ongkir" id="ongkir" value="-" readonly></p>

        <p class="text-right">Total Harga : <b>Rp. </b>
        <input type="text" name="total_harga" id="total_harga" value="-" readonly></p>
        
        <script>
            $(document).ready(function(){
                $("#btn1").click(function(){
                    $("#ongkir").val("0");
                    $("#jasa_kirim").val("PRHL");
                    $("#total_harga").val(<?=$total_harga; ?> + 0);
                });
                $("#btn2").click(function(){
                    $("#ongkir").val("43000");
                    $("#jasa_kirim").val("JNT");
                    $("#total_harga").val(<?=$total_harga; ?> + 43000);
                });
                $("#btn3").click(function(){
                    $("#ongkir").val("120000");
                    $("#jasa_kirim").val("KARGO");
                    $("#total_harga").val(<?=$total_harga; ?> + 120000);
                });
            });
        </script>
        
        <a href="keranjangBelanja.php"><i class='fas fa-arrow-left' style='font-size:36px'></i></a>
        
        <?php 
            if(isset($msg)){  // Check if $msg is not empty
                echo '<p class="text-right"><b style="color:red">'.$msg.'</b></p>'; // Display our message
            } 
        ?>

        <button class="btn btn-success btn-sm" type="submit" name="bayar" style="float:right; font-size:40px;">
            <i class="far fa-credit-card" style="font-size:40px"></i> Bayar
        </button>
    </form>
</div>
<br>
<br>
<br>
<br>
<hr>