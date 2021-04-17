<?php

header('Content-type: application/json');

$sonucObjesi = new stdClass();
$sonucObjesi->sonuc = false;
$sonucObjesi->mesaj = "asfasdfa";
$sonucObjesi->data = new stdClass();
$statusCode=200 ;

echo json_encode($sonucObjesi);
echo $_GET["name"];

try {
    if(isset($_GET["name"])){
        $sonucObjesi->mesaj = $_GET["name"];

    }else{

    }



} catch (Throwable $hata) {
    $sonucObjesi->mesaj = "Hata oluştu";
    $statusCode=500 ;
}

http_response_code($statusCode);




?>