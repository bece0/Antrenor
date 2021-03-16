<?php 

    function SporculariGetir($antrenor_id){
        $sql = "SELECT  * FROM sporcu WHERE antrenor_no= '$antrenor_id'" ;
        return SQLCalistir($sql);

    }

    function SporcuKayit($antrenor_id){

    }

?>