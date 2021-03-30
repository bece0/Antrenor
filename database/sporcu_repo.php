<?php 

    function SporculariGetir($antrenor_no){
        $sql = "SELECT  * FROM sporcu WHERE antrenor_no= '$antrenor_no'" ;
        return SQLCalistir($sql);

    }

    function SporcuKayit($antrenor_no,$ad,$soyad,$tc_no,$cinsiyet,$dogum_tarihi,$tel_no){
        $sql="INSERT INTO sporcu (antrenor_no,ad,soyad,tc_no,cinsiyet,dogum_tarihi,tel_no) VALUES ('$antrenor_no','$ad', '$soyad','$tc_no','$cinsiyet','$dogum_tarihi','$tel_no') " ;
       return SQLInsertCalistir($sql);
    }

    
    function SporcuSil($sporcu_no){
        $sql="DELETE FROM sporcu WHERE sporcu_no= '$sporcu_no'" ;
       return SQLDeleteCalistir($sql);
    }

    function SonKayitIdGetir(){
        $sql = "SELECT sporcu_no FROM sporcu ORDER BY sporcu_no DESC LIMIT 1";
        return SQLTekliKayitGetir($sql);

    }

        
    function SporcuBilgileriGetir($sporcu_no){
        $sql = "SELECT  * FROM sporcu WHERE sporcu_no= '$sporcu_no'" ; 
        
        return SQLTekliKayitGetir($sql);
    }

    function SporcuBilgileriGüncelle($sporcu_no,$ad,$soyad,$cinsiyet,$dogum_tarihi,$tel_no,$yas_grubu,$kategori,$yay_kilo,$handle,$limp,$berger,$kliker,$nisangah,$stabilizer,$ok,$kol_boyu,$yay_sertligi,$atis_mesafesi){
        $sql="UPDATE sporcu SET ad='$ad',soyad='$soyad',cinsiyet='$cinsiyet',dogum_tarihi='$dogum_tarihi',tel_no='$tel_no',yas_grubu='$yas_grubu',
        kategori='$kategori',yay_kilo='$yay_kilo',handle='$handle',limp='$limp',berger='$berger',kliker='$kliker',nisangah='$nisangah',stabilizer='$stabilizer',ok='$ok',kol_boyu='$kol_boyu',yay_sertligi='$yay_sertligi',atis_mesafesi= '$atis_mesafesi' WHERE sporcu_no='$sporcu_no'";
        
        return SQLUpdateCalistir($sql);
    }
    
            
    function SporcuYarismalariGetir($sporcu_no){
        $sql = "SELECT  * FROM yarisma WHERE sporcu_no= '$sporcu_no'" ; 
        
         return SQLCalistir($sql);
    }

    function SporcuYarismaEkle($sporcu_no,$yarisma_adi,$tarih,$siralama,$madalya){
        $sql="INSERT INTO yarisma (sporcu_no,yarisma_adi,tarih,siralama,madalya) VALUES ('$sporcu_no','$yarisma_adi', '$tarih','$siralama','$madalya') " ;
        return SQLInsertCalistir($sql);
    }



 

?>