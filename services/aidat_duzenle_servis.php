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
    $aylar = $json_decode_edilmis->aylar;
    
        if (in_array("ocak", $aylar)) {
             $ocak = 1; 
        } else  {
             $ocak = 0; }
    
        if (in_array("subat", $aylar)) {
             $subat = 1;
        } else  {
             $subat = 0; }
    
        if (in_array("mart", $aylar)) {
            $mart = 1; 
        } else  {
            $mart = 0; }
    
        if (in_array("nisan", $aylar)) { 
            $nisan = 1;
        } else  {
            $nisan = 0; }
    
        if (in_array("mayis", $aylar)) {
             $mayis = 1;
        } else  {
            $mayis = 0; }
    
        if (in_array("haziran", $aylar)) {
             $haziran = 1; 
        } else  {
            $haziran = 0; }
    
        if (in_array("temmuz", $aylar)) {
            $temmuz = 1; 
        } else  {
            $temmuz = 0; }
    
        if (in_array("agustos", $aylar)) {
             $agustos = 1;    
        } else  {
            $agustos = 0; }
    
        if (in_array("eylul", $aylar)) {
              $eylul = 1; 
        } else  {
            $eylul = 0; }
    
        if (in_array("ekim", $aylar)) {
    
            $ekim = 1;
        } else  {
            $ekim = 0; }
        
    
        if (in_array("kasim", $aylar)) {
            $kasim = 1;     
        } else  {
            $kasim = 0; }
    
        if (in_array("aralik", $aylar)) {
            $aralik = 1;
        } else  {
            $aralik = 0; }
    
        AidatTablosuGuncelle($sporcu_no,$sene,$ocak,$subat,$mart,$nisan,$mayis,$haziran,$temmuz,$agustos,$eylul,$ekim,$kasim,$aralik);
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