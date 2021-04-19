<?php 

    session_start();
    include '../database/database.php';


    $json_alinan_veri = file_get_contents('php://input');  
	$json_decode_edilmis = json_decode($json_alinan_veri); 
    
    $sporcu_no = $json_decode_edilmis->sporcu_no;
    $yarisma_adi = $json_decode_edilmis->yarisma_adi;
    $tarih = $json_decode_edilmis->tarih;
    $siralama = $json_decode_edilmis->siralama;
    $madalya = $json_decode_edilmis->madalya;

    
    SporcuYarismaEkle($sporcu_no,$yarisma_adi,$tarih,$siralama,$madalya);
      
  


?>