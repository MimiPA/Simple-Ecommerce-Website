<?php
    include "koneksi.php";
    include "navbar.php";
    $id_order = $_GET['id_order'];
    $queryEdit = mysqli_query($conn, "SELECT * FROM tabel_order, tabel_produk WHERE tabel_order.id_order = $id_order AND tabel_order.id_produk=tabel_produk.id_produk");
    $info = mysqli_fetch_array($queryEdit);
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edit Keranjang Belanja</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>

    <div class="container" style="padding-top:90px">
        <table class="table table-bordered table-stripped">
            <tbody>
                <tr>
                    <?php echo '<td align="center" width="100px"><img src="img/'.$info['gambar'].'" height="500px" /></td>';?>
                    <?php echo '<td style="padding-top:190px; font-size:36px;"><b>'.$info['nama_produk'].'</b>
                        <br>Rp '.$info['harga_produk'].'
                        <br>
                        <form method="GET" action="updateEditOrder.php">
                            <input type="hidden" name="id_order" value='.$info['id_order'].'/>
                            <input type="hidden" name="id_produk" value='.$info['id_produk'].'/>
                                <input class="form-control-inline form-control-sm" type="number" name="total_item" value="1" min="0" max='.$info['stok'].' style="font-size:40px">
                                <button class="btn btn-success btn-sm" type="submit" name="submit">
                                    <i class="fa fa-shopping-cart" style="font-size:40px"></i>
                                </button>
                        </form> </td>';
                        ?>
                </tr>
            </tbody>
        </table>
    </div>
    <br>
    <hr>
    <br>
        
    <?php
        include "footer.php";
    ?>
</body>

</html>