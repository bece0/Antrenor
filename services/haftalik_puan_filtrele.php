<?php 

        $sonucObjesi = new stdClass();
        $sonucObjesi->sonuc = true;
        $sonucObjesi->mesaj = "";
        $sonucObjesi->code = 200;
        $sonucObjesi->data = new stdClass();
        $statusCode = 0;

    try {

        include '../database/database.php';
        header('Content-type: application/json');
    
        $json_alinan_veri = file_get_contents('php://input');  
        $json_decode_edilmis = json_decode($json_alinan_veri); 
        
        $yay_turu = $json_decode_edilmis->yay_turu;
        $atis_mesafesi = $json_decode_edilmis->atis_mesafesi;
    
        $puan_listesi= array();
    
       if($yay_turu=="yay_default") $yay_turu=NULL;
       
       if($atis_mesafesi=="mesafe_default") $atis_mesafesi=NULL;
    
        $puan_listesi= puanFiltrele($yay_turu,$atis_mesafesi);
    
        $sonucObjesi->data =  $puan_listesi;

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

