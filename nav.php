<?php 
    include 'head.php';
    include 'database/database.php';

   
    $kullanici_giris_yapti_mi = isset($_SESSION["kullanici_id"]); //  var_dump($kullanici_giris_yapti_mi);
    $antrenor_id=  $_SESSION["kullanici_id"];
    $antrenor=KullaniciBilgileriniGetirById($antrenor_id);

    $yil = date("Y");
  
?>

<div class="navbar-fixed">
<nav>
    <div class="nav-wrapper teal darken-1 ">
        <a href="index.php" class="brand-logo ">  <img src="files/images/logo.png"  style="margin-left:10px;border-radius:1000px;width:60px"> </a>  
        <?php // echo $antrenor["ad"]." ".$antrenor["soyad"] ?>  
       
        <ul id="nav-mobile" class="right hide-on-med-and-down">
      
            <li class="active"><a href="index.php">Sporcu Listesi</a></li>
            <li><a href="puan.php">Puan Tablosu</a></li>
            <li><a href="aidat.php?sene=<?php echo $yil ?>">Malzeme Ücret</a></li>

            <?php if($kullanici_giris_yapti_mi ){ ?>
            <li><a class="waves-effect waves-light btn  orange darken-2" href="login.php">Çıkış</a></li>
            <?php } ?>

        </ul>

    </div>
</nav>
</div>