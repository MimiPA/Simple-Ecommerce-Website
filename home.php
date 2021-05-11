<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        window.setTimeout("waktu()", 1000);

        function waktu(){
            var waktu = new Date();
            setTimeout("waktu()", 1000);
            document.getElementById("jam").innerHTML = waktu.getHours();
            document.getElementById("menit").innerHTML = waktu.getMinutes();
            document.getElementById("detik").innerHTML = waktu.getSeconds();
        }
    </script>
</head>

<body>
    <?php
        include "navbar.php";
    ?>

    <div id="home"></div>
    <!--Carousel-->
    <div id="demo" class="carousel slide" data-ride="carousel" style="padding-top:90px">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        
        <!--Carousel Promosi 3 Item-->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/flashSale.png" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h3>Super Flash Sale</h3>
                    <p>We really look forward to it</p>
                </div>
            </div>
            
            <div class="carousel-item">
                <img src="img/samsung.png" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h3>Samsung</h3>
                    <p>These are various types of Samsung mobile phones</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="img/oppo.png" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h3>Oppo</h3>
                    <p>These are various types of Oppo mobile phones</p>
                </div>
            </div>
        </div>
        
        <!--Control Carousel-->
        <a class="carousel-control-prev" href="#demo" data-slide="prev" role="button">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        
        <a class="carousel-control-next" href="#demo" data-slide="next" role="button">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!--Flash Sale-->
    <div class="container" style="padding-top:50px; padding-bottom:50px;">
        <div class="row">
            <div class="col-lg-2">
                <h3>Flash Sale</h3>
            </div>

            <!--Flash Sale Jam Digital-->
            <div class="col-lg-9">
                <div class="jam-digital">
                    <div class="kotak">
                        <p id="jam"></p>
                    </div>
                    <div class="kotak">
                        <p id="menit"></p>
                    </div>
                    <div class="kotak">
                        <p id="detik"></p>
                    </div>
                </div>
            </div>
            <a class="lihat-semua" href="">Lihat Semua</a>
        </div>
        <br>
        
        <!-- 4 Panel untuk Flash Sale-->
        <div class="row">
            <div class="col-lg flash-sale">
                <img src="img/samsungS20.jpg" href="#">
                <h6>Samsung S20+</h6>
                <p>Samsung S20+ BTS Edition with Dual SIM, Memory 128GB ...<br><span>Rp 17.499.000</span><br><b>Rp 17.000.000</b></p>
            </div>
            &nbsp;&nbsp;

            <div class="col-lg flash-sale">
                <img src="img/iphoneXR.jpg" href="#">
                <h6>iPhone XR</h6>
                <p>iPhone XR 256GB Kuning with Processor A12 Bionic<br><span>Rp 17.700.000</span><br><b>Rp 15.999.999</b></p>
            </div>
            &nbsp;&nbsp;

            <div class="col-lg flash-sale">
                <img src="img/oppoA91.jpg" href="#">
                <h6>Oppo A91</h6>
                <p>Oppo A91 128GB Unlocked Smartphone Blazing BLue<br><span>Rp 3.599.000</span><br><b>Rp 3.000.000</b></p>
            </div>
            &nbsp;&nbsp;

            <div class="col-lg flash-sale">
                <img src="img/vivoY12i.jpg" href="#">
                <h6>Vivo Y12i</h6>
                <p>Vivo Y12i with Dual Camera, RAM 3GB, Memory 32GB<br><span>Rp 1.899.000</span><br><b>Rp 1.500.000</b></p>
            </div>
            &nbsp;&nbsp;

            <div class="col-lg flash-sale">
                <img src="img/nokia110.jpg" href="#">
                <h6>Nokia 110</h6>
                <p>Nokia 110 with GSM Network, Body dimensions 115.2 x 49.9 ...<br><span>Rp 319.000</span><br><b>Rp 300.000</b></p>
            </div>
        </div>
    </div>
    <hr>

    <!--Pencarian Terpopuler-->
    <div class="container" style="padding-top:50px; padding-bottom:50px;">
        <div class="row">
            <div class="mr-auto">
                <h3>Pencarian Terpopuler</h3>
            </div>
            <a class="lihat-semua" href="">Lihat Semua</a>
        </div>
        <br>
        
        <!-- 4 Panel untuk Pencarian Terpopuler-->
        <div class="row">
            <div class="col-lg info-panel">
                <img src="img/samsungA21s.jpg" href="" class="float-left">
                <h6>Samsung A21s</h6>
                <p>Display 6.4"HD + RAM 6GB + Memory 128GB ...<br><span>Rp 3.000.000</span></p>
            </div>
            &nbsp;&nbsp;

            <div class="col-lg info-panel">
                <img src="img/oppoA5.jpg" href="#" class="float-left">
                <h6>Oppo A5</h6>
                <p>Dazzling White + Storage 64GB + RAM 3GB ...<br><span>Rp 2.999.000</span></p>
            </div>
            &nbsp;&nbsp;

            <div class="col-lg info-panel">
                <img src="img/iphone11pro.jpg" href="#" class="float-left">
                <h6>iPhone 11 Pro</h6>
                <p>Processor Apple A13 Bionic + RAM 64GB ...<br><span>Rp 13.500.000</span></p>
            </div>
            &nbsp;&nbsp;

            <div class="col-lg info-panel">
                <img src="img/nokia5310.jpg" href="#" class="float-left">
                <h6>Nokia 5310</h6>
                <p>Camera 0.3MP + Battery 1200mAh ...<br><span>Rp 600.000</span></p>
            </div>
        </div>
    </div>
    <hr>

    <!--Brand Terpopuler-->
    <div class="container-fluid" style="padding-top:50px; padding-bottom: 50px;">
        <div class="row">
            <!--Col4 Carousel Brand-->
            <div class="col-lg-4">
                <div class="card">
                    <!--Panel Body - Carousel-->
                    <div class="card-body">
                        <div id="brand" class="carousel slide" data-ride="carousel">
                            <ul class="carousel-indicators">
                                <li data-target="#brand" data-slide-to="0" class="active"></li>
                                <li data-target="#brand" data-slide-to="1"></li>
                                <li data-target="#brand" data-slide-to="2"></li>
                            </ul>

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/samsung1.png" class="d-block w-100" alt="...">
                                </div>
                                
                                <div class="carousel-item">
                                    <img src="img/iphone1.jpg" class="d-block w-100" alt="...">
                                </div>
                    
                                <div class="carousel-item">
                                    <img src="img/oppo1.png" class="d-block w-100" alt="...">
                                </div>
                            </div>

                            <!--Control Carousel-->
                            <a class="carousel-control-prev" href="#brand" data-slide="prev" role="button">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            
                            <a class="carousel-control-next" href="#brand" data-slide="next" role="button">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!--Col4 Brand Terpopuler-->
            <div class="col-lg-8">
                <!--Panel Heading-->
                <div class="card">
                    <div class="card-header bg-warning">
                        <h3>Brand Terpopuler</h3>
                    </div>

                    <!--Panel Body-->
                    <div class="card-columns">
                        <div class="card-body">
                            <img src="img/brandIphone.png" href="#" class="brand">
                            <p class="text-center">iPhone</p>
                        </div>
                        <div class="card-body">
                            <img src="img/brandSamsung.jpg" href="#" class="brand">
                            <p class="text-center">Samsung</p>
                        </div>
                        <div class="card-body">
                            <img src="img/brandNokia.jpg" href="#" class="brand">
                            <p class="text-center">Nokia</p>
                        </div>
                        <div class="card-body">
                            <img src="img/brandOppo.jpg" href="#" class="brand">
                            <p class="text-center">Oppo</p>
                        </div>
                        <div class="card-body">
                            <img src="img/brandVivo.jpg" href="#" class="brand">
                            <p class="text-center">Vivo</p>
                        </div>
                        <div class="card-body">
                            <img src="img/brandXiaomi.png" href="#" class="brand">
                            <p class="text-center">Xiaomi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include "footer.php";
    ?>

</body>

</html>
