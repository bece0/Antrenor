<?php 

    /**
     * Verilen bilgileri kullanıcı tablosuna kaydeder.
     *
     * @param string $name kullanıcının adı
     * @param string $surname kullanıcının soyadı
     * @param string $email  kullanıcının mail adresi
     * @param string $password kullanıcının parolası
     * @return bool kaydetme işlemi başarılı ise true değil ise false döner
     */
    function KullaniciKaydet($kodu, $name, $surname, $email, $password, $salt, $kullaniciTip){
        
        //$password = password_hash($password, PASSWORD_BCRYPT);

        $sql = "INSERT INTO antrenor (id, adi, soyadi, email, parola)
        VALUES ('$kodu', '$name', '$surname', '$email', '$password' )";

        $con = BAGLANTI_GETIR();

        if ($con->query($sql) === TRUE) {
            return TRUE;
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
            return FALSE;
        }
    }

    /**
     * Maili verilen kullanıcının databasede olup olmadığını kontrol eder.
     *
     * @param string $email kontrol edilecek mail adresi
     * @return bool var ise true yok ise false döner
     */
    function KullaniciVarmi($email) {
        $sql = "SELECT * FROM antrenor where email = '$email'";

        $con = BAGLANTI_GETIR();
        $result = $con->query($sql);
    
        if ($result->num_rows > 0) 
            return TRUE;
        else
            return FALSE;
    }

    /**
     * Giriş bilgileri alınan kullanıcının databasede olup olmadığını kontrol eder.
     *
     * @param string $email kontrol edilecek kullanıcının mail adresi
     * @param string $password kontrol edilecek kullanıcının parolası
     * @return bool bilgiler dogru ise true yanlış ise false döner
     */
    function KullaniciGirisKontrol($email, $password) {
       // $password = password_hash($password, PASSWORD_BCRYPT);
        $sql = "SELECT * FROM antrenor where email = '$email' and parola = '$password'";
        
        $con = BAGLANTI_GETIR();
        $result = $con->query($sql);
    
        if ($result->num_rows > 0) 
            return TRUE;
        else
            return FALSE;
    }

      
    /**
     * Emaili parametre olarak verilen kullanıcının bilgilerini getirir
     * @param string $email kullanıcının maili
     * @return string gelen sonucu döner,sonuç boş ise NULL döner  
     */
    function KullaniciBilgileriniGetir($email){
        $sql = "SELECT * FROM antrenor where email = '$email'"; 
        
        $con = BAGLANTI_GETIR();
        $result = $con->query($sql); 

        if ($result->num_rows > 0) 
            return mysqli_fetch_assoc($result);
        else
            return NULL;
    }

    function TumKullaniciBilgileriniGetir(){
        $sql = "SELECT * FROM antrenor";
        
        return SQLCalistir($sql, FALSE);
    }


    /**
     * Id parametre olarak verilen kullanıcının bilgilerini getirir
     * @param string $id kullanıcının id'si
     * @return string  gelen sonucu döner,sonuç boş ise NULL döner 
     */
    function KullaniciBilgileriniGetirById($kullanici_id){
        $sql = "SELECT * FROM antrenor where antrenor_no = '$kullanici_id'";
        
        $con = BAGLANTI_GETIR();
        $result = $con->query($sql);
        if ($result->num_rows > 0) 
            return mysqli_fetch_assoc($result);
        else
            return NULL;
    }



?>