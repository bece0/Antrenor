<?php 

    function SporculariGetir($antrenor_no){
        $sql = "SELECT  * FROM sporcu WHERE antrenor_no= '$antrenor_no'" ;
        return SQLCalistir($sql);

    }

    function SporcuKayit($antrenor_no,$ad,$soyad,$cinsiyet,$dogum_tarihi,$tel_no){
        $sql="INSERT INTO sporcu (antrenor_no,ad,soyad,cinsiyet,dogum_tarihi,tel_no) VALUES ('$antrenor_no','$ad', '$soyad','$cinsiyet','$dogum_tarihi','$tel_no') " ;
       return SQLInsertCalistir($sql);
    }

        
    function SporcuBilgileriGetir($sporcu_no){
        $sql = "SELECT  * FROM sporcu WHERE sporcu_no= '$sporcu_no'" ; 
        
        return SQLTekliKayitGetir($sql);
    }

    function SporcuBilgileriGüncelle($sporcu_no,$ad,$soyad,$cinsiyet,$dogum_tarihi,$tel_no,$yas_grubu,$kategori,$yay,$ok,$kol_boyu,$yay_sertligi,$atis_mesafesi){
        $sql="UPDATE sporcu SET ad='$ad',soyad='$soyad',cinsiyet='$cinsiyet',dogum_tarihi='$dogum_tarihi',tel_no='$tel_no',yas_grubu='$yas_grubu',
        kategori='$kategori',yay='$yay',ok='$ok',kol_boyu='$kol_boyu',yay_sertligi='$yay_sertligi',atis_mesafesi= '$atis_mesafesi' WHERE sporcu_no='$sporcu_no'";
        
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