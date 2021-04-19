<?php 

    function sporcuAntrenmanlariGetir($sporcu_no){

        $sql = "SELECT  * FROM puan WHERE sporcu_no= '$sporcu_no'" ; 
                
            return SQLCalistir($sql);

    }

    function AntrenmanDetayiGetir($sporcu_no , $antrenman_no){

        $sql = "SELECT  * FROM puan p inner join antrenman a on p.antrenman_no=a.antrenman_no WHERE p.sporcu_no='$sporcu_no' and a.antrenman_no='$antrenman_no'" ; 
                
            return SQLCalistir($sql);
        
    }






?>