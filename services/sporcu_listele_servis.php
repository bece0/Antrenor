<?php 
 
    include '../database/database.php';
    header('Content-type: application/json');

    $json_alinan_veri = file_get_contents('php://input');  
	$json_decode_edilmis = json_decode($json_alinan_veri); 
	
    $yay = $json_decode_edilmis->yay;
    $yas_grubu = $json_decode_edilmis->yas_grubu;
    $text = $json_decode_edilmis->text;

    $sporcu_listesi= array();

   if($yay=="yay_default") $yay=NULL;
   
   if($yas_grubu=="yas_default") $yas_grubu=NULL;

   if($text=="") $text=NULL;

    $sporcu_listesi= SporcuAra($yay,$yas_grubu,$text);


    echo json_encode($sporcu_listesi);






?>