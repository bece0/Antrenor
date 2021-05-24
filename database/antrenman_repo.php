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

        $sql = "SELECT haftalik_ortalama FROM antrenman a WHERE a.sporcu_no='$sporcu_no' AND  WEEK(a.tarih,1) >= WEEK(NOW(),1) ";

        return SQLCalistir($sql);
    } 

    function puanFiltrele($yay_turu,$atis_mesafesi){

        if($yay_turu !=NULL && $atis_mesafesi !=NULL ){
            $sql = "SELECT  * FROM antrenman a INNER JOIN sporcu s on a.sporcu_no=s.sporcu_no WHERE a.yay_turu= '$yay_turu' AND a.atis_mesafesi='$atis_mesafesi' " ;
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
?>

