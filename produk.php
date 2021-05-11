<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Produk</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/tampilan.css">
    
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>
    <?php
        include "navbar.php";
    ?>

    <!--Kategori-->
    <div class="container-fluid" id="produk" style="padding-top:90px">
        <div class="row">
            <div class="mr-auto">
                <h3>Kategori</h3>
            </div>
            <a class="lihat-semua" href="">Lihat Semua</a>
        </div>
        <br>
        <div class="row">
            <div class="col-lg">
                <div class="card">
                    <a href="#samsung" class="kategori">
                        <img src="img/brandSamsung.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="text-center">Samsung</h5>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg">
                <div class="card">
                    <a href="#iphone" class="kategori">
                        <img src="img/brandIphone.png" class="card-img-top">
                        <div class="card-body">
                            <h5 class="text-center">iPhone</h5>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg">
                <div class="card">
                    <a href="#oppo" class="kategori">
                        <img src="img/brandOppo.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="text-center">Oppo</h5>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg">
                <div class="card">
                    <a href="#vivo" class="kategori">
                        <img src="img/brandVivo.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="text-center">Vivo</h5>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg">
                <div class="card">
                    <a href="#nokia" class="kategori">
                        <img src="img/brandNokia.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="text-center">Nokia</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <!--End of Kategori-->

    <!--Samsung-->
    <div class="container" id="samsung" style="padding-top:30px">
        <div class="row">
            <div class="mr-auto">
                <h3>Samsung</h3>
            </div>
            <a class="lihat-semua" href="">Lihat Semua</a>
        </div>
        <br>

        <table class="table table-bordered table-stripped">
            <tbody>
                <?php
                include "koneksi.php";
                $kolom = 4;
                $data = mysqli_query($conn,"SELECT * FROM tabel_produk");
		            while($d = mysqli_fetch_array($data)){
                        if(($d['id_produk']) % $kolom == 1){
                            echo '<tr>';
                        }
                        echo '<td align="center"><img src="img/'.$d['gambar'].'" height="200px" />
                        <br><b>'.$d['nama_produk'].'</b>
                        <br>Rp '.$d['harga_produk'].'
                        <br>
                        <form method="GET" action="prosesOrder.php">
                            <input type="hidden" name="id_produk" value='.$d['id_produk'].'/>
                                <input class="form-control-inline form-control-sm" type="number" name="total_item" value="1" min="1" max='.$d['stok'].' >
                                <button class="btn btn-primary btn-sm" type="submit" name="submit">
                                    <i class="fa fa-shopping-cart"></i>
                                </button>
                        </form> </td>';

                        if(($d['id_produk']) % $kolom == 0){
                            echo '</tr>';
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
    <hr>
    <!--End of Samsung-->

    <!--iPhone-->
    <div class="container" id="iphone" style="padding-top:30px">
        <div class="row">
            <div class="mr-auto">
                <h3>iPhone</h3>
            </div>
            <a class="lihat-semua" href="">Lihat Semua</a>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <a href="" class="produk">
                        <img src="img/iphone12promax.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="text-center">Iphone 12 ProMax 128GB</h5>
                            <p class="card-text text-center">Rp 20.499.000,</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <a href="" class="produk">
                        <img src="img/iphone11pro.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="text-center">iphone 11 pro 64GB </h5>
                            <p class="card-text text-center">Rp 15.999.000</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <a href="" class="produk">
                        <img src="img/iphoneXR.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="text-center">iPhone XR 128GB, Black</h5>
                            <p class="card-text text-center">Rp 9.299.000</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <a href="" class="produk">
                        <img src="img/iPhone SE 2nd Gen.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="text-center">iPhone SE 2nd Gen 256GB, Black</h5>
                            <p class="card-text text-center">Rp 10.199.000</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <!--End of iPhone-->

    <!--Oppo-->
    <div class="container" id="oppo" style="padding-top:30px">
        <div class="row">
            <div class="mr-auto">
                <h3>Oppo</h3>
            </div>
            <a class="lihat-semua" href="">Lihat Semua</a>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <a href="" class="produk">
                        <img src="img/oppoA5.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="text-center">OPPO A5 2020</h5>
                            <p class="card-text text-center">Rp 2.399.000,</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <a href="" class="produk">
                        <img src="img/oppoA91.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="text-center">Oppo A91</h5>
                            <p class="card-text text-center">Rp 3.250.000</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <a href="" class="produk">
                        <img src="img/OPPO_Reno_5G.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="text-center">OPPO Reno 5G</h5>
                            <p class="card-text text-center">Rp 6.999.000</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <a href="" class="produk">
                        <img src="img/OPPO_Find_X2_Pro_L_1.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="text-center">OPPO Find X2 Pro</h5>
                            <p class="card-text text-center"> Rp 17.999.000 </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <!--End of Oppo-->

    <!--Vivo-->
    <div class="container" id="vivo" style="padding-top:30px">
        <div class="row">
            <div class="mr-auto">
                <h3>Vivo</h3>
            </div>
            <a class="lihat-semua" href="">Lihat Semua</a>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <a href="" class="produk">
                        <img src="img/vivoY12i.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="text-center">vivo Y12i</h5>
                            <p class="card-text text-center">Rp 1.700.000,</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <a href="" class="produk">
                        <img src="img/vivoy51.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="text-center">Vivo y51</h5>
                            <p class="card-text text-center">Rp 3.240.000</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <a href="" class="produk">
                        <img src="img/Vivo_Z1_Pro_L_4.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="text-center">Vivo Z1 Pro</h5>
                            <p class="card-text text-center">Rp 2.549.000</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <a href="" class="produk">
                        <img src="img/Vivo_X50_Pro_th_L_1.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="text-center">vivo X50 Pro </h5>
                            <p class="card-text text-center">  Rp 8.160.600 </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <!--End of Vivo-->

    <?php
        include "footer.php";
    ?>

</body>

</html>
