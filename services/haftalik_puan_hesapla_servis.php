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
        
        $antrenor_no = $json_decode_edilmis->antrenor_no;
        $sporcular= array();
        $sporcular = SporculariGetir($antrenor_no);
        $haftalik_puan=0;

        for ($i=0; $i < count($sporcular) ; $i++) { 
            $sporcu = $sporcular[$i];
            $sporcu_no = $sporcu["sporcu_no"];
       //   $haftalik_puan= HaftalikPuanHesapla($sporcu_no); 
            HaftalikPuanGuncelle($sporcu_no/*,$haftalik_puan*/);
        }

        
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