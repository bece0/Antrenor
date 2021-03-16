<?php 
    include 'head.php';

    $kullanici_giris_yapti_mi = isset($_SESSION["kullanici_id"]);
  //  var_dump($kullanici_giris_yapti_mi);
?>

<nav>
    <div class="nav-wrapper teal lighten-2 ">
        <a href="index.php" class="brand-logo"> <img src="files/images/logo.png"
                style="margin-bottom:1px;border-radius:1000px;width:5%"></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="index.php">Sporcu Listesi</a></li>
            <li><a href="puan.php">Puan Tablosu</a></li>
            <li><a href="aidat.php">Aidat Tablosu</a></li>
            <?php if($kullanici_giris_yapti_mi ){ ?>
            <li><a class="waves-effect waves-light btn cyan darken-4" href="login.php">Çıkış</a></li>
            <?php } ?>
        </ul>
    </div>
</nav>