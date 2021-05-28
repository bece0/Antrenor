<?php 

    function sporcuAntrenmanlariGetir($sporcu_no){

        $sql = "SELECT  * FROM antrenman WHERE sporcu_no= '$sporcu_no'" ; 
                
            return SQLCalistir($sql);

    }

    function AntrenmanDetayiGetir($sporcu_no , $antrenman_no){

        $sql = "SELECT  * FROM antrenman p INNER JOIN antrenman_atis a ON p.id=a.antrenman_no WHERE p.sporcu_no='$sporcu_no' AND a.antrenman_no='$antrenman_no'" ; 
                
            return SQLCalistir($sql);
        
    }

    function HaftalikPuanHesapla($sporcu_no){

        $sql = "SELECT SUM(a.toplam_puan) DIV 6 as haftalik_ortalama FROM antrenman a WHERE a.sporcu_no='$sporcu_no' AND WEEK(a.tarih,1) >= WEEK(NOW(),1)";

        return SQLCalistir($sql);
    } 

    function HaftalikPuanGuncelle($sporcu_no,$haftalik_puan){

        $sql = "UPDATE haftalik_puan h INNER JOIN antrenman a ON h.sporcu_no=a.sporcu_no
        SET h.sporcu_no = '$sporcu_no', h.yay_turu = a.yay_turu, h.atis_mesafesi=a.atis_mesafesi, h.haftalik_puan= '$haftalik_puan'
        WHERE h.sporcu_no='$sporcu_no' ";

        return SQLCalistir($sql);
    } 

    function puanFiltrele($yay_turu,$atis_mesafesi){

        if($yay_turu !=NULL && $atis_mesafesi !=NULL ){
            $sql = "SELECT  * FROM haftalik_puan h 
            INNER JOIN sporcu s on h.sporcu_no=s.sporcu_no       
            WHERE h.yay_turu= '$yay_turu' AND h.atis_mesafesi='$atis_mesafesi' ORDER BY h.haftalik_puan DESC" ;
        }

        return SQLCalistir($sql);
        
   /*     $sql = "SELECT  * FROM antrenman " ;
        $where_exist=TRUE;

        if($yay_turu ==NULL && $atis_mesafesi ==NULL ){
            $sql = "SELECT  * FROM antrenman" ; 
            $where_exist=FALSE;
        }
        else if($yay_turu !=NULL && $atis_mesafesi !=NULL ){
            $sql = "SELECT  * FROM antrenman a INNER JOIN sporcu s on a.sporcu_no=s.sporcu_no WHERE a.yay_turu= '$yay_turu' AND a.atis_mesafesi='$atis_mesafesi' " ;
        }else{
            if($yay_turu == NULL){
                $sql = "SELECT  * FROM antrenman a INNER JOIN sporcu s on a.sporcu_no=s.sporcu_no WHERE a.atis_mesafesi='$atis_mesafesi' " ;
            }else if($atis_mesafesi == NULL){
                $sql = "SELECT  * FROM antrenman a INNER JOIN sporcu s on a.sporcu_no=s.sporcu_no WHERE a.yay_turu= '$yay_turu' " ;
            }
        
        
        }
   */
    }

   
// Seri Toplam Hesapla UPDATE antrenman_atis a SET a.seri_toplam=a.ok_1+a.ok_2+a.ok_3 WHERE a.id = '1'

/* UPDATE haftalik_puan h INNER JOIN antrenman a ON h.sporcu_no=a.sporcu_no
SET h.sporcu_no = '1', h.yay_turu = a.yay_turu, h.atis_mesafesi=a.atis_mesafesi, h.haftalik_puan=SUM(a.toplam_puan) DIV 6
WHERE WEEK(a.tarih,1) >= WEEK(NOW(),1);*/

?>

