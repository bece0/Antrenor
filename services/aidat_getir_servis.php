<?php 
 
    $sonucObjesi = new stdClass();
    $sonucObjesi->sonuc = false;
    $sonucObjesi->mesaj = "";
    $sonucObjesi->code = 200;
    $sonucObjesi->data = new stdClass();
    $statusCode = 0;

try {
    include '../database/database.php';
    header('Content-type: application/json');

    $json_alinan_veri = file_get_contents('php://input');  
    $json_decode_edilmis = json_decode($json_alinan_veri); 
    
    $sporcu_no = $json_decode_edilmis->sporcu_no;
    $sene = $json_decode_edilmis->sene;

    $sporcu_aidat_bilgileri= array();
    $sporcu_aidat_bilgileri= SporcununAidatBilgisiGetir($sporcu_no,$sene);
    $sonucObjesi->data = $sporcu_aidat_bilgileri;

    $statusCode=200;
    
} catch (Throwable $exp) {
    if($statusCode == 0){
        $statusCode = 500;
    }

    http_response_code($statusCode);

    $sonucObjesi->sonuc = false;
    $sonucObjesi->code = $statusCode;
    $sonucObjesi->hata = $exp->getMessage();
    $sonucObjesi->mesaj = $exp->getMessage();

    if($statusCode == 401 || $statusCode >= 500){
        $sonucObjesi->headers = getallheaders();
        $sonucObjesi->detay = $exp->getTraceAsString();
    }
}

echo json_encode($sonucObjesi);

?>