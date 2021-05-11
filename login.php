<?php
    include "koneksi.php";
    session_start();
    if(isset($_POST['login'])){
        $user = $_POST['user'];
		$pass = $_POST['pass'];

        $cekLogin = mysqli_query($conn,"select * from tabel_login WHERE user='$user' AND pass='$pass'");
        // menghitung jumlah data yang ditemukan
        $cek = mysqli_num_rows($cekLogin);

        if($cek > 0){
            $_SESSION['username'] = $user;
			$_SESSION['password'] = $pass;
            header("Location: home.php");
        }
        else{
            header("location:landingPage.php?pesan=gagal");
        }
    }

?>