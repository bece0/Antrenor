<?php 

    session_start();
    include '../database/database.php';

    $antrenor_no = $_SESSION["kullanici_id"];

    $ad = $_POST["ad"]; 

    $soyad = $_POST["soyad"];

    $cinsiyet = $_POST["cinsiyet"];

    $dogum_tarihi = $_POST["dogum_tarihi"];

    $tel_no = $_POST["tel_no"];


    //SporcuKayit($antrenor_no,$ad,$soyad,$cinsiyet,$dogum_tarihi,$tel_no);

    if(SporcuKayit($antrenor_no,$ad,$soyad,$cinsiyet,$dogum_tarihi,$tel_no)=== TRUE){
       
        $sporcu= SonKayitIdGetir(); //var_dump($sporcu_no);
        $sporcu_no=$sporcu["sporcu_no"];
        AidatTablosunaEkle($antrenor_no, $sporcu_no);   
        header('Location: ../index.php'); 
        
    }else {
            $_SESSION["_error"] = "Bir hata oluştu.";

            header('Location: ../sporcu_kayit.php'); 
        }





?>