<?php
    session_start();
    include '../database/database.php';
  

    $json_alinan_veri = file_get_contents('php://input');  
	$json_decode_edilmis = json_decode($json_alinan_veri); 
    
    $sporcu_no=$json_decode_edilmis->sporcu_no;
    //kişisel bilgi
    $ad = $json_decode_edilmis->ad;
    $soyad = $json_decode_edilmis->soyad;
    $tc_no = $json_decode_edilmis->tc_no;
    $cinsiyet = $json_decode_edilmis->cinsiyet;
    $dogum_tarihi = $json_decode_edilmis->dogum_tarihi;
    $tel_no = $json_decode_edilmis->tel_no;
    $yas_grubu = $json_decode_edilmis->yas_grubu;
    $kategori = $json_decode_edilmis->kategori;
    //yay
    $ebat = $json_decode_edilmis->ebat;
    $cekis_agirligi = $json_decode_edilmis->cekis_agirligi;
    $yay_sertligi = $json_decode_edilmis->yay_sertligi;
    $tiller = $json_decode_edilmis->tiller;
    $kiris_yuksekligi = $json_decode_edilmis->kiris_yuksekligi;
    $limp = $json_decode_edilmis->limp;
    $handle = $json_decode_edilmis->handle;
    $nisangah = $json_decode_edilmis->nisangah;
    $atis_mesafesi = $json_decode_edilmis->atis_mesafesi;
    $stabilizer = $json_decode_edilmis->stabilizer;
    $berger = $json_decode_edilmis->berger;
    $kliker = $json_decode_edilmis->kliker;
    $yay_notlar = $json_decode_edilmis->yay_notlar;
    //ok
    $ok_sayisi = $json_decode_edilmis->ok_sayisi;
    $ok_numarasi = $json_decode_edilmis->ok_numarasi;
    $uzunluk = $json_decode_edilmis->uzunluk;
    $malzeme = $json_decode_edilmis->malzeme;
    $sapma = $json_decode_edilmis->sapma;
    $cap = $json_decode_edilmis->cap;
    $agirlik = $json_decode_edilmis->agirlik;
    $uc_agirligi = $json_decode_edilmis->uc_agirligi;
    $tuy = $json_decode_edilmis->tuy;
    $arkalik = $json_decode_edilmis->arkalik;
    $kol_boyu = $json_decode_edilmis->kol_boyu;
    $ok_notlar = $json_decode_edilmis->ok_notlar;

   /*

    $ad = $_POST["ad"]; 

    $soyad = $_POST["soyad"];

    $tc_no = $_POST["tc_no"];

    $cinsiyet = $_POST["cinsiyet"];

    $dogum_tarihi = $_POST["dogum_tarihi"];

    $tel_no = $_POST["tel_no"];

    $yas_grubu = $_POST["yas_grubu"]; 

    $kategori = $_POST["kategori"];

    //////////////

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

    ////////////////
    
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
   */

   

     SporcuBilgileriGüncelle($sporcu_no,$ad,$soyad,$tc_no,$cinsiyet,$dogum_tarihi,$tel_no,$yas_grubu,$kategori);
     SporcuYayBilgileriGüncelle($sporcu_no,$ebat,$cekis_agirligi,$yay_sertligi,$tiller,$kiris_yuksekligi,$handle,$limp,$berger,$kliker,$nisangah,$stabilizer,$atis_mesafesi,$yay_notlar);
     SporcuOkBilgileriGüncelle($sporcu_no,$ok_sayisi,$ok_numarasi,$uzunluk,$malzeme,$sapma,$cap,$agirlik,$uc_agirligi,$tuy,$arkalik,$kol_boyu,$ok_notlar);

  


?>