<?php 

    session_start();
    include '../database/database.php';

    //kişisel bilgi

    $sporcu_no=$_POST["sporcu_no"]; 

    $ad = $_POST["ad"]; 

    $soyad = $_POST["soyad"];

    $tc_no = $_POST["tc_no"];

    $cinsiyet = $_POST["cinsiyet"];

    $dogum_tarihi = $_POST["dogum_tarihi"];

    $tel_no = $_POST["tel_no"];

    $yas_grubu = $_POST["yas_grubu"]; 

    $kategori = $_POST["kategori"];

    //yay

    $ebat = $_POST["ebat"];
    
    $cekis_agirligi = $_POST["cekis_agirligi"];

    $yay_sertligi = $_POST["yay_sertligi"];

    $tiller = $_POST["tiller"];

    $kiris_yuksekligi = $_POST["kiris_yuksekligi"];

    $limp = $_POST["limp"];

    $handle = $_POST["handle"]; 

    $nisangah = $_POST["nisangah"];

    $atis_mesafesi = $_POST["atis_mesafesi"];

    $stabilizer = $_POST["stabilizer"];

    $berger = $_POST["berger"]; 

    $kliker = $_POST["kliker"];

    $yay_notlar = $_POST["yay_notlar"];

    //ok

    $ok_sayisi = $_POST["ok_sayisi"];
    
    $ok_numarasi = $_POST["ok_numarasi"];

    $uzunluk = $_POST["uzunluk"];

    $malzeme = $_POST["malzeme"];

    $sapma = $_POST["sapma"];

    $cap = $_POST["cap"];

    $agirlik = $_POST["agirlik"]; 

    $uc_agirligi = $_POST["uc_agirligi"];

    $tuy = $_POST["tuy"];

    $arkalik = $_POST["arkalik"];

    $kol_boyu = $_POST["kol_boyu"]; 

    $ok_notlar = $_POST["ok_notlar"]; //var_dump($ok_notlar);


    if(SporcuBilgileriGüncelle($sporcu_no,$ad,$soyad,$tc_no,$cinsiyet,$dogum_tarihi,$tel_no,$yas_grubu,$kategori)=== TRUE &&
     SporcuYayBilgileriGüncelle($sporcu_no,$ebat,$cekis_agirligi,$yay_sertligi,$tiller,$kiris_yuksekligi,$handle,$limp,$berger,$kliker,$nisangah,$stabilizer,$atis_mesafesi,$yay_notlar) === TRUE &&
     SporcuOkBilgileriGüncelle($sporcu_no,$ok_sayisi,$ok_numarasi,$uzunluk,$malzeme,$sapma,$cap,$agirlik,$uc_agirligi,$tuy,$arkalik,$kol_boyu,$ok_notlar) === TRUE){

        header('Location: ../sporcu_sayfasi.php?sporcu='.$sporcu_no.''); 
    }else {
        $_SESSION["_error"] = "Bir hata oluştu.";

        header('Location: ../index.php'); 
    }







?>