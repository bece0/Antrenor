<?php 

    function SporculariGetir($antrenor_no){
        $sql = "SELECT  * FROM sporcu WHERE antrenor_no= '$antrenor_no'" ;
        return SQLCalistir($sql);

    }

    function SporcuKayit($antrenor_no,$ad,$soyad,$tc_no,$cinsiyet,$dogum_tarihi,$tel_no){
        $sql="INSERT INTO sporcu (antrenor_no,ad,soyad,tc_no,cinsiyet,dogum_tarihi,tel_no,yas_grubu,kategori) VALUES ('$antrenor_no','$ad', '$soyad','$tc_no','$cinsiyet','$dogum_tarihi','$tel_no',' ',' ') " ;
       return SQLInsertCalistir($sql);
    }

    function SporcuYayBilgileriKayit($sporcu_no){
        $sql="INSERT INTO yay_bilgi (sporcu_no,ebat,cekis_agirligi,yay_sertligi,tiller,kiris_yuksekligi,handle,limp,berger,kliker,nisangah,stabilizer,atis_mesafesi,yay_notlar)
         VALUES ('$sporcu_no',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ') ";
        
        return SQLInsertCalistir($sql);
    }

    function SporcuOkBilgileriKayit($sporcu_no){
        $sql="INSERT INTO ok_bilgi (sporcu_no,ok_sayisi,ok_numarasi,uzunluk,malzeme,sapma,cap,agirlik,uc_agirligi,tuy,arkalik,kol_boyu,ok_notlar)
        VALUES ('$sporcu_no',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ') ";
        
        return SQLInsertCalistir($sql);
    }
    
    function SporcuSil($sporcu_no){
        $sql="DELETE FROM sporcu WHERE sporcu_no= '$sporcu_no'" ;
       return SQLDeleteCalistir($sql);
    }

    
    function SporcuSilYay($sporcu_no){
        $sql="DELETE FROM yay_bilgi WHERE sporcu_no= '$sporcu_no'" ;
    return SQLDeleteCalistir($sql);
    }

    function SporcuSilOk($sporcu_no){
        $sql="DELETE FROM ok_bilgi WHERE sporcu_no= '$sporcu_no'" ;
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

    function SporcuOkBilgileriGetir($sporcu_no){
        $sql = "SELECT  * FROM ok_bilgi WHERE sporcu_no= '$sporcu_no'" ; 
        
        return SQLTekliKayitGetir($sql);
    }

    function SporcuYayBilgileriGetir($sporcu_no){
        $sql = "SELECT  * FROM yay_bilgi WHERE sporcu_no= '$sporcu_no'" ; 
        
        return SQLTekliKayitGetir($sql);
    }

    function SporcuBilgileriGüncelle($sporcu_no,$ad,$soyad,$tc_no,$cinsiyet,$dogum_tarihi,$tel_no,$yas_grubu,$kategori){
        $sql="UPDATE sporcu SET ad='$ad',soyad='$soyad',tc_no='$tc_no',cinsiyet='$cinsiyet',dogum_tarihi='$dogum_tarihi',tel_no='$tel_no',yas_grubu='$yas_grubu',
        kategori='$kategori' WHERE sporcu_no='$sporcu_no'";
        
        return SQLUpdateCalistir($sql);
    }

    function SporcuYayBilgileriGüncelle($sporcu_no,$ebat,$cekis_agirligi,$yay_sertligi,$tiller,$kiris_yuksekligi,$handle,$limp,$berger,$kliker,$nisangah,$stabilizer,$atis_mesafesi,$yay_notlar){
        $sql="UPDATE yay_bilgi SET ebat='$ebat',cekis_agirligi='$cekis_agirligi',yay_sertligi='$yay_sertligi',tiller='$tiller',kiris_yuksekligi='$kiris_yuksekligi',handle='$handle',
        limp='$limp',berger='$berger',kliker='$kliker',nisangah='$nisangah',stabilizer='$stabilizer',atis_mesafesi='$atis_mesafesi',yay_notlar='$yay_notlar' WHERE sporcu_no='$sporcu_no'";
        
        return SQLUpdateCalistir($sql);
    }

    function SporcuOkBilgileriGüncelle($sporcu_no,$ok_sayisi,$ok_numarasi,$uzunluk,$malzeme,$sapma,$cap,$agirlik,$uc_agirligi,$tuy,$arkalik,$kol_boyu,$ok_notlar){
        $sql="UPDATE ok_bilgi SET ok_sayisi='$ok_sayisi',ok_numarasi='$ok_numarasi',uzunluk='$uzunluk',malzeme='$malzeme',sapma='$sapma',cap='$cap',
        agirlik='$agirlik',uc_agirligi='$uc_agirligi',tuy='$tuy',arkalik='$arkalik',kol_boyu='$kol_boyu',ok_notlar='$ok_notlar' WHERE sporcu_no='$sporcu_no'";
        
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

    function SporculariGetirYay($yay){
        $sql = "SELECT  * FROM sporcu WHERE kategori= '$yay'" ;
        return SQLCalistir($sql);

    }

    function SporcuAra($yay_kategori,$yas_grubu,$isim_ara){
        $sql = "SELECT  * FROM sporcu" ;
        $where_exist=TRUE;

        if($yay_kategori ==NULL && $yas_grubu ==NULL ){
            $sql = "SELECT  * FROM sporcu" ; 
            $where_exist=FALSE;
        }
        else if($yay_kategori !=NULL && $yas_grubu !=NULL ){
            $sql = "SELECT  * FROM sporcu WHERE kategori= '$yay_kategori' AND yas_grubu='$yas_grubu' " ;
        }else{
            if($yay_kategori == NULL){
                $sql = "SELECT  * FROM sporcu WHERE yas_grubu='$yas_grubu' " ;
            }else if($yas_grubu == NULL){
                $sql = "SELECT  * FROM sporcu WHERE kategori= '$yay_kategori' " ;
            }
        }

        if($isim_ara!=NULL){
            if($where_exist==FALSE){
                $sql=$sql." WHERE ";
            }else{
                $sql=$sql." AND ";
            }
            $sql=$sql." (ad LIKE '%$isim_ara%' OR soyad LIKE '%$isim_ara%')  ";
        }
       
       // echo $sql;
        return SQLCalistir($sql);

    }
 

?>