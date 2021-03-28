<?php 


function AidatBilgisiGetir($antrenor_no){
    $sql = "SELECT  sporcu.ad,sporcu.soyad,aidat. * FROM aidat inner join sporcu on aidat.sporcu_no=sporcu.sporcu_no WHERE sporcu.antrenor_no= '$antrenor_no'" ;
    return SQLCalistir($sql);

}

function SporcununAidatBilgisiGetir($sporcu_no){
    $sql = "SELECT  sporcu.ad,sporcu.soyad,aidat. * FROM aidat inner join sporcu on aidat.sporcu_no=sporcu.sporcu_no WHERE sporcu.sporcu_no= '$sporcu_no'" ;
    return SQLTekliKayitGetir($sql);

}

function AidatTablosunaEkle($antrenor_no,$sporcu_no){
    $sql="INSERT INTO aidat (antrenor_no,sporcu_no,sene,ocak,subat,mart,nisan,mayis,haziran,temmuz,agustos,eylul,ekim,kasim,aralik) VALUES ('$antrenor_no','$sporcu_no','2021', '0','0','0','0','0','0','0','0','0','0','0','0') " ;
    return SQLInsertCalistir($sql);

}

function AidatTablosuGuncelle($sporcu_no,$ocak,$subat,$mart,$nisan,$mayis,$haziran,$temmuz,$agustos,$eylul,$ekim,$kasim,$aralik){
   
   $sql="UPDATE aidat SET ocak='$ocak',subat='$subat',mart='$mart',nisan='$nisan',mayis='$mayis',haziran='$haziran',
    temmuz='$temmuz',agustos='$agustos',eylul='$eylul',ekim='$ekim',kasim='$kasim',aralik= '$aralik' WHERE sporcu_no='$sporcu_no'";

    return SQLUpdateCalistir($sql);

}






?>