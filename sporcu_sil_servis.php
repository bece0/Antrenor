
<?php 

    session_start();
    include '../database/database.php';

    $sporcu_no = $_GET["sporcu"];


    if(SporcuSil($sporcu_no)=== TRUE){
        
        AidatSporcuSil($sporcu_no);
    
        header('Location: ../index.php'); 
        
    }else {
            $_SESSION["_error"] = "Bir hata oluştu.";

            header('Location: ../sporcu_kayit.php'); 
        }





?>