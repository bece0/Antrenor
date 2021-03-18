<?php 
    include 'head.php';
   
    $kullanici_giris_yapti_mi = isset($_SESSION["kullanici_id"]);
  //  var_dump($kullanici_giris_yapti_mi);
?>

<div class="navbar-fixed">
<nav>
    <div class="nav-wrapper orange darken-1 ">
        <a href="index.php" class="brand-logo "> <img src="files/images/logo.png"  style="margin-left:10px;border-radius:1000px;width:60px"> </a>  

        <ul id="nav-mobile" class="right hide-on-med-and-down">

            <li class="active"><a href="index.php">Sporcu Listesi</a></li>
            <li><a href="puan.php">Puan Tablosu</a></li>
            <li><a href="aidat.php">Aidat Tablosu</a></li>

            <?php if($kullanici_giris_yapti_mi ){ ?>
            <li><a class="waves-effect waves-light btn  deep-orange darken-1" href="login.php">Çıkış</a></li>
            <?php } ?>

        </ul>

    </div>
</nav>
</div>