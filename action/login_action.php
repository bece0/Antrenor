<?php

   //bu sayfa giriş bilgilerini kontrol eder
   //giriş bilgileri doğruysa kullanıcı bilgilerini cookieye yazar ve anasayfaya yönlendirir
   //değilse login sayfasına yönlendirir
    session_start();

    $email_value=$_POST["email"];
    $pwd_value=$_POST["pwd"];

    include '../database/database.php';

    //kullanıcı adı-mail ve parola doğrulama
    if(isset($email_value) && isset($pwd_value)){
        
        $kullanici = KullaniciBilgileriniGetir($email_value);
       //var_dump($kullanici);

        if($kullanici != NULL){

            if($email_value == $kullanici['email'] && $pwd_value == $kullanici['parola']){
                echo "girdi";        
                $_SESSION["email"]= $email_value;
                $_SESSION["kullanici_id"]= $kullanici["antrenor_no"]; var_dump($kullanici);
                header('Location: ../index.php'); 
            }
            else{     // kullanıcı parolası yanlış
                echo "kullanıcı parolası yanlış";
                header('Location: ../login.php');             
                $_SESSION["_error"] = "Giriş bilgileri geçersiz!";
            }
        }
    
        else{      // böyle bir mailli kullanıcı yok
            echo "böyle bir mailli kullanıcı yok";
            header('Location: ../login.php');
            $_SESSION["_error"] =  "Giriş bilgileri geçersiz!";
        
        }
    }
    else{     // mail ya da parola gönderilmedi
        echo "mail ya da parola gönderilmedi";
        header('Location: ../login.php');
    }

?>