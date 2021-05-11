<?php
    include "cekSession.php";
?>

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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>

<body>

    <!-- Navbar (sit on top)-->
    <nav class="navbar navbar-expand-lg navbar-light bg-red fixed-top">
        <!--Logo e-commerce-->
        <a class="navbar-brand" href="#">
            <img src="img/shop.png" href="#">
        </a>

        <!--Navbar List-->
        <ul class="nav navbar-nav mr-auto font-weight-bold">
            <li class="nav-item">
                <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="produk.php">Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="promo.php">Promo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="aboutUs.php">About</a>
            </li>
        </ul>

        <!--Search-->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <form class="form-inline">
                    <input type="search" placeholder="Search"> &nbsp;&nbsp;
                    <a class="navbar-brand" href="#">
                        <img src="img/search.png" href="#" class="search">
                    </a>
                </form>
            </li>
        </ul>

        <!--Keranjang Belanjaanku-->
        <a class="navbar-brand" href="keranjangBelanja.php">
            <i class="fa fa-shopping-cart" style='font-size:30px;color:red'></i>
        </a> &nbsp;&nbsp;

        <!--Login / Profil-->
        <a class="navbar-brand" href="#" data-toggle="modal" data-target="#myModal">
            <i class='far fa-user-circle' style='font-size:36px;color:green'></i>
        </a>
    </nav>

    <!-- Modal -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h4 class="modal-title">Informasi Akun</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                    
                <div class="modal-body">
                    <h4><i class='fas fa-user' style='font-size:46px'></i>&nbsp&nbsp&nbsp<?php echo $_SESSION['username'];?></h4>
                    <hr>
                    <p><a href="riwayatPesanan.php" class="text-dark"><i class='fas fa-shipping-fast' style='font-size:36px'></i>&nbsp Riwayat Pesanan</a></p>
                </div>
                    
                <div class="modal-footer">
                    <a href="logout.php" class="text-dark text-right"><i class='fas fa-sign-in-alt'></i> Logout</a></p>
                </div>
            </div>
        </div>
    </div>
    <!--End of Modal-->

</body>

</html>
