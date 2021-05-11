<?php
    include "koneksi.php";
    if(isset($_POST['buat'])){
        $userAkun = $_POST['userAkun'];
		$passAkun = $_POST['passAkun'];
        $confirmPass = $_POST['confirmPass'];

        if($passAkun == $confirmPass){
            $queryAkun = mysqli_query($conn, "INSERT INTO tabel_login (user, pass) VALUES ('$userAkun', '$passAkun')");

            if($queryAkun){
                include "cekSession.php";
                header("Location: home.php");
            }
            else{
                die ('Input Gagal!' .mysqli_error($conn));
            }
        }
        else{
            header("location:landingPage.php?pesan=gagalBuat");
        }
    }

?>