<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Keranjang Belanja</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body class="bg-dark">
    <?php
        include "navbar.php";
    ?>

    <!--Tabel Keranjang Belanja-->
    <div id="listBelanja" class="container-fluid table-responsive" style="padding-top:90px">
    <h3 class="text-light">Tabel Data Keranjang Belanja</h3>
        <table class="table table-bordered table-hover table-light">
            <thead class="thead-light text-center">
                <tr>
                    <th>Gambar</th>
                    <th>Nama Produk</th>
                    <th>Harga Produk</th>
                    <th>Total Barang</th>
                    <th>Total Harga</th>
                    <th colspan="2" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "koneksi.php";

                $data = mysqli_query($conn,"SELECT * FROM tabel_produk, tabel_order, tabel_login WHERE tabel_produk.id_produk = tabel_order.id_produk AND tabel_login.id_login=tabel_order.id_login AND tabel_login.user='$username'");
                while($d = mysqli_fetch_array($data)){
                      ?>
                <tr>
                    <?php echo '
                    <td align="center"><img src="img/'.$d['gambar'].'" height="200px" /></td>'
                    ?>
                    <td><?php echo $d['nama_produk']; ?></td>
                    <td>Rp. <?php echo $d['harga_produk']; ?></td>
                    <td><?php echo $d['total_item']; ?></td>

                    <?php
                        $total_item = $d['total_item'];
                        $harga_produk = $d['harga_produk'];
                        $total_belanjaan = $total_item * $harga_produk;
                    ?>
                    <td>Rp. <?php echo $total_belanjaan; ?></td>
                    <td align="center"><a href="edit.php?id_order=<?php echo $d['id_order']; ?>"><i class='far fa-edit'></i> Edit</a></td>
                    <td align="center"><a href="hapus.php?id_order=<?php echo $d['id_order']; ?>"><i class='fas fa-eraser'></i> Hapus</a></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>

        <button class="btn btn-warning btn-block" type="submit" name="membayar" style="float:right; font-size:40px;">
            <a href="rincianPembayaran.php" class="text-dark">
                <i class="far fa-credit-card" style="font-size:40px"></i> Bayar Sekarang
            </a>
        </button>
    </div>
    <!--End of List Keranjang-->
    <br>
</body>

</html>