<?php 

/*
$ocak= $_POST['ocak'];   
$subat= $_POST['subat'];
$mart= $_POST['mart']; 
$nisan= $_POST['nisan'];
$mayis= $_POST['mayis'];
$haziran= $_POST['haziran']; 
$temmuz= $_POST['temmuz'];
$agustos= $_POST['agustos'];
$eylul= $_POST['eylul']; 
$ekim= $_POST['ekim'];
$kasim= $_POST['kasim'];
$aralik= $_POST['aralik']; 

if(isset($ocak) || isset($subat) || isset($mart) || isset($nisan) || isset($mayis) || isset($haziran) || isset($temmuz) || isset($agustos) || isset($eylul) || isset($ekim) || isset($kasim) || isset($aralik)) { 
    echo 'Değişti!';

} else { 
    echo 'Değişmedi.';
}
*/

session_start();
include '../database/database.php';
$sporcu_no=$_POST["sporcu_no"]; 

if(isset($_POST['aylar'])) {
    $aylar = $_POST['aylar']; //var_dump($aylar);
  
     
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
        $ekim = 0; }}

    if (in_array("kasim", $aylar)) {
        $kasim = 1;     
    } else  {
        $kasim = 0; }

    if (in_array("aralik", $aylar)) {
        $aralik = 1;
    } else  {
        $aralik = 0; }


        if(AidatTablosuGuncelle($sporcu_no,$ocak,$subat,$mart,$nisan,$mayis,$haziran,$temmuz,$agustos,$eylul,$ekim,$kasim,$aralik)=== TRUE){
       
            header('Location: ../aidat.php'); 
            
        }else {
                $_SESSION["_error"] = "Bir hata oluştu.";
    
                header('Location: ../sporcu_kayit.php'); 
            }
    
    



?>