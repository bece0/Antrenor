<?php 
 
    include '../database/database.php';
    header('Content-type: application/json');

    $json_alinan_veri = file_get_contents('php://input');  
	$json_decode_edilmis = json_decode($json_alinan_veri); 
	
    $antrenor_id = $json_decode_edilmis->antrenor_id;
    
    $sporcu_listesi= array();

    $sporcu_listesi= SporculariGetir($antrenor_id);


    echo json_encode($sporcu_listesi);






?>