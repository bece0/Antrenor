<?php
    session_start();

    if(isset($_SESSION["kullanici_id"])){ //giriş yapılmış ise login'e git
        $kullanici_id = $_SESSION["kullanici_id"];
        if($kullanici_id != NULL) {
            include '../database/database.php';
            $KULLANICI = KullaniciBilgileriniGetirById($kullanici_id);

        }
    }

    session_unset();  
    header('Location: ../login.php'); //Çıkış yapılır,Login sayfasına yönlendirir
?>