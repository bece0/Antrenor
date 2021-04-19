<?php 

    session_start();
    include '../database/database.php';

    $antrenor_no = $_SESSION["kullanici_id"];

    $json_alinan_veri = file_get_contents('php://input');  
	$json_decode_edilmis = json_decode($json_alinan_veri); 
    
    $ad = $json_decode_edilmis->ad;
    $soyad = $json_decode_edilmis->soyad;
    $tc_no = $json_decode_edilmis->tc_no;
    $cinsiyet = $json_decode_edilmis->cinsiyet;
    $dogum_tarihi = $json_decode_edilmis->dogum_tarihi;
    $tel_no = $json_decode_edilmis->tel_no;
    
    if(SporcuKayit($antrenor_no,$ad,$soyad,$tc_no,$cinsiyet,$dogum_tarihi,$tel_no)=== TRUE){
        
        $sporcu= SonKayitIdGetir(); //var_dump($sporcu_no);
        $sporcu_no=$sporcu["sporcu_no"];
        AidatTablosunaEkle($antrenor_no, $sporcu_no);   
        SporcuYayBilgileriKayit($sporcu_no);
        SporcuOkBilgileriKayit($sporcu_no);
    }
  


?>