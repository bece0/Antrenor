
<?php 


session_start();
include 'database/database.php';

$sporcu_no = $_GET["sporcu"];

$json_alinan_veri = file_get_contents('php://input');  
$json_decode_edilmis = json_decode($json_alinan_veri); 


if(SporcuSil($sporcu_no)=== TRUE){
        
    AidatSporcuSil($sporcu_no);

}


   



?>