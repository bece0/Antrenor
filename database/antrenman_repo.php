<?php 

    function sporcuAntrenmanlariGetir($sporcu_no){

        $sql = "SELECT  * FROM antrenman WHERE sporcu_no= '$sporcu_no'" ; 
                
            return SQLCalistir($sql);

    }

    function AntrenmanDetayiGetir($sporcu_no , $antrenman_no){

        $sql = "SELECT  * FROM antrenman p INNER JOIN antrenman_atis a ON p.id=a.antrenman_no WHERE p.sporcu_no='$sporcu_no' AND a.antrenman_no='$antrenman_no'" ; 
                
            return SQLCalistir($sql);
        
    }

    function sporcuHaftalikPuanHesapla($sporcu_no){
        $sql = "SELECT * FROM antrenman a WHERE sporcu_no= '$sporcu_no' AND WEEK(a.tarih,1) >= WEEK(NOW(),1) "; 
        
    } 


?>

