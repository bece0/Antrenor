<?php 

    session_start();
    include '../database/database.php';

    $sporcu_no=$_POST["sporcu_no"]; 

    $ad = $_POST["ad"]; 

    $soyad = $_POST["soyad"];

    $cinsiyet = $_POST["cinsiyet"];

    $dogum_tarihi = $_POST["dogum_tarihi"];

    $tel_no = $_POST["tel_no"];

    $yas_grubu = $_POST["yas_grubu"]; 

    $kategori = $_POST["kategori"];

    $yay_kilo = $_POST["yay_kilo"];
    
    $handle = $_POST["handle"];

    $limp = $_POST["limp"];

    $berger = $_POST["berger"]; 

    $kliker = $_POST["kliker"];

    $nisangah = $_POST["nisangah"];

    $stabilizer = $_POST["stabilizer"];

    $ok = $_POST["ok"];

    $kol_boyu = $_POST["kol_boyu"];

    $yay_sertligi = $_POST["yay_sertligi"];

    $atis_mesafesi = $_POST["atis_mesafesi"];


    ;

    if(SporcuBilgileriGüncelle($sporcu_no,$ad,$soyad,$cinsiyet,$dogum_tarihi,$tel_no,$yas_grubu,$kategori,$yay_kilo,$handle,$limp,$berger,$kliker,$nisangah,$stabilizer,$ok,$kol_boyu,$yay_sertligi,$atis_mesafesi)=== TRUE){
      

        header('Location: ../sporcu_sayfasi.php?sporcu='.$sporcu_no.''); 
    }else {
        $_SESSION["_error"] = "Bir hata oluştu.";

        header('Location: ../index.php'); 
    }







?>