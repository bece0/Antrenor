<?php 

    include 'head.php';
    include 'nav.php';
    include 'database/database.php';
   // var_dump($_SESSION);
    if(!$kullanici_giris_yapti_mi){
        header('Location: login.php'); 
   }

   $sporcu_listesi = array();
   $antrenor_id=  $_SESSION["kullanici_id"];
   $sporcu_listesi= SporculariGetir($antrenor_id);
  //var_dump( $sporcu_listesi);
?>

<link rel="stylesheet" href="assets/index.css">
<section class="jumbotron text-center">
    <div class="container">
        <center>
            <h3 class="jumbotron-heading">SPORCU LİSTESİ</h3>
        </center>
    </div>
</section>

<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <!-- <div class="table-responsive"> -->
            <table class="table table-striped  table-hover highlight ">
                <thead>
                    <tr>

                        <th scope="col"> Sporcu </th>
                        <th scope="col"> Ad - Soyad</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Yaş grubu</th>
                        <!-- <th> </th> -->
                    </tr>
                </thead>
                <tbody>

                <?php 
                    $sporcu_sayisi=count($sporcu_listesi);
 
                    for($i=0 ; $i < $sporcu_sayisi; $i++){ ?>
                        <tr>                       
                            <td><a href="sporcu_sayfasi.php"><img src="files/images/logo.jpg"
                                        style="margin-bottom:5px;border-radius:1000px;width:20%"></a> </td>
                            <td><?php echo $sporcu_listesi[$i]['ad']." ".$sporcu_listesi[$i]['soyad']  ?></td>
                            <td><?php echo $sporcu_listesi[$i]['kategori'] ?></td>
                            <td><?php echo $sporcu_listesi[$i]['yas_grubu'] ?></td>
                            <!-- <td class="text-right"><button class="btn btn-sm btn-info"><i class="fa fa-pencil"></i> </button> </td> -->
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
            <!-- </div> -->
        </div>
        <br><br>
        <div class="col mb-2">
            <div class="row">

                <div class="col-sm-12 col-md-2 ">
                    <a class="waves-effect waves-light btn cyan darken-4" href="sporcu_kayit.php">Sporcu Kayıt</a>
                </div>
            </div>
        </div>
    </div>
</div>


</body>

</html>