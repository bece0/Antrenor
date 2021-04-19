 <?php 
    include '../database/database.php';
    header('Content-type: application/json');

    $json_alinan_veri = file_get_contents('php://input');  
    $json_decode_edilmis = json_decode($json_alinan_veri); 
    
    $sporcu_no = $json_decode_edilmis->sporcu_no;
    $sene = $json_decode_edilmis->sene;


    $sporcu_aidat_bilgileri= array();

    $sporcu_aidat_bilgileri= SporcununAidatBilgisiGetir($sporcu_no,$sene);

    echo json_encode($sporcu_aidat_bilgileri);
?>

