<?php
    include "koneksi.php";
    include "navbar.php";
    
?>

<div class="container mt-3" style="padding-top:90px">
    <h2>Riwayat Pesanan</h2>
    <div id="accordion">
    <?php
        include "koneksi.php";

        $col = 1;
        $data = mysqli_query($conn,"SELECT * FROM tabel_pembelian, tabel_login WHERE tabel_login.id_login=tabel_pembelian.id_login AND tabel_login.user='$username'");
        while($d = mysqli_fetch_array($data)) {
            $id_produk =$d['id_produk'];
            $panjang =strlen($id_produk);

            $jumlah_item = $d['jumlah_item'];
            $total_harga = $d['total_harga'];
            $jasa_kirim = $d['jasa_kirim'];

    ?>
    <div class="card">
        <div class="card-header" style="background-color: rgb(147, 245, 122);">
            <div class="row">
                <div class="col">
                    <a class="card-link" data-toggle="collapse" href="#collapseOne">Id_beli : <b class="text-dark"><?php echo $id_beli = $d['id_beli']; ?> </b></a>
                </div>
                <div class="col text-right">
                    <a class="card-link" data-toggle="collapse" href="#collapseOne">Tanggal : <b class="text-dark"><?php echo $d['tanggal_pembelian'];?></b></a>
                </div>
            </div>
        </div>
        
        <div id="collapseOne" class="collapse" data-parent="#accordion">
            <div class="card-body" style="border-style:dotted; border-color:red;">
                <?php
                for($i=0; $i<$panjang; $i+=2){
                    $id_produk1 = substr($id_produk, $i, 1);

                    $jumlah_item1 = substr($jumlah_item, $i, 1);

                    $dataProduk = mysqli_query($conn,"SELECT * FROM tabel_produk WHERE id_produk='$id_produk1'");
                    $info = mysqli_fetch_array($dataProduk);

                ?>
                
                <div class="media border p-3 mt-3">
                    <?php echo '<img src="img/'.$info['gambar'].'" class="align-self-center mr-3" style="width:120px">' ?>
                    <div class="media-body">
                        <h4><?php echo $info['nama_produk']; ?></h4>
                        <p>Rp. <?php echo $info['harga_produk']; ?> &emsp;&emsp;&nbsp; x<?php echo $jumlah_item1; ?></p>
                    </div>
                </div>
                <?php
                }
                ?>
                <br>
                <p class="text-right"><b>Jasa Kirim : </b><input type="text" value="<?=$jasa_kirim.' Express'; ?>" readonly></p>
                <p class="text-right"><b>Total Harga Pesanan : </b><input type="text" value="<?=$total_harga; ?>" readonly></p>
            </div>
        </div>
    </div>
    <br>
    <br>
            <?php
        }
    ?>
    </div>
</div>
        