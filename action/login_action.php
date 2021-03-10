<?php 
 session_start();

 $email_value=$_POST["email"];
 $pwd_value=$_POST["pwd"];

if($email_value == 0 &&  $pwd_value==0 ){

    header('Location: ../index.php');

}
else{
    header('Location: ../login.php'); 
}



?>