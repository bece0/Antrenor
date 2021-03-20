
<?php 

session_start();
include '../database/database.php';

$sporcu_no = $_POST["sporcu_no"];

$yarisma_adi = $_POST["yarisma_adi"]; 

$tarih = $_POST["tarih"];

$siralama = $_POST["siralama"];

$madalya = $_POST["madalya"];



if(SporcuYarismaEkle($sporcu_no,$yarisma_adi,$tarih,$siralama,$madalya)=== TRUE){
    header('Location: ../sporcu_sayfasi.php?sporcu='.$sporcu_no.''); 
    
}else {
        $_SESSION["_error"] = "Bir hata oluştu.";

        header('Location: ../index.php'); 
    }





?>



