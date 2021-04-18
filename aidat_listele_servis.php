<?php 
 
    include 'database/database.php';
    header('Content-type: application/json');

    $json_alinan_veri = file_get_contents('php://input');  
    $json_decode_edilmis = json_decode($json_alinan_veri); 
    
    $antrenor_id = $json_decode_edilmis->antrenor_id;
    $gosterilen_yil = $json_decode_edilmis->gosterilen_yil;

    $aidat_bilgileri= array();

    $aidat_bilgileri= AidatBilgisiGetir($antrenor_id , $gosterilen_yil);

    echo json_encode($aidat_bilgileri);



?>