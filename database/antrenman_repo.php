<?php 

    function sporcuAntrenmanlariGetir($sporcu_no){

        $sql = "SELECT  * FROM antrenman WHERE sporcu_no= '$sporcu_no'" ; 
                
            return SQLCalistir($sql);

    }

    function AntrenmanDetayiGetir($sporcu_no , $antrenman_no){

        $sql = "SELECT  * FROM antrenman p inner join antrenman_atis a on p.id=a.antrenman_no WHERE p.sporcu_no='$sporcu_no' and a.antrenman_no='$antrenman_no'" ; 
                
            return SQLCalistir($sql);
        
    }






?>