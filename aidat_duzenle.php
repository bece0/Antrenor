<?php 
    include 'head.php';
    include 'nav.php';
   // include 'database/database.php';

    if(!$kullanici_giris_yapti_mi){
       header('Location: login.php'); 
      
   }

  
   if(!$kullanici_giris_yapti_mi){
    header('Location: login.php'); 
}

$sporcu_listesi = array();
$antrenor_id=  $_SESSION["kullanici_id"];
$sporcu_listesi= SporculariGetir($antrenor_id);

$aidat_listesi = array();
$aidat_listesi = AidatBilgisiGetir($antrenor_id); //var_dump( $aidat_listesi);
?>


<div class="container">
    <br>

    <div class="row">


        <div id="bilgiler" class="col s12">
            <br>

            <div class="card row mx-2 mb-3">

                <div class="card-body">
                    <br>

                    <h5 style="text-align:center"> Aidat Tablosu</h5>
                    <form action="action/aidat_duzenle_action.php" method="post" id="aidat_duzenle">

                        <table class="table table-bordered highlight">
                            <thead>
                                <tr>
                                    <th>Ad Soyad</th>
                                    <th>Oca</th>
                                    <th>Şub</th>
                                    <th>Mar</th>
                                    <th>Nis</th>
                                    <th>May</th>
                                    <th>Haz</th>
                                    <th>Tem</th>
                                    <th>Ağu</th>
                                    <th>Eyl</th>
                                    <th>Eki</th>
                                    <th>Kas</th>
                                    <th>Ara</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
             
                $sporcu_sayisi=count($sporcu_listesi);
            for($i=0 ; $i<$sporcu_sayisi;$i++){
              
                $sporcu= $sporcu_listesi[$i];
                $aidat = $aidat_listesi[$i]; //var_dump($aidat);
               
                $ad_soyad=  $sporcu['ad']." ".$sporcu['soyad'];
         
               
                $ocak= $aidat['ocak']; 
                $subat= $aidat['subat'];
                $mart= $aidat['mart']; 
                $nisan= $aidat['nisan'];
                $mayis= $aidat['mayis'];
                $haziran= $aidat['haziran']; 
                $temmuz= $aidat['temmuz'];
                $agustos= $aidat['agustos'];
                $eylul= $aidat['eylul']; 
                $ekim= $aidat['ekim'];
                $kasim= $aidat['kasim'];
                $aralik= $aidat['aralik']; 
            ?>
                                <tr>
                                    <td><?php echo  $ad_soyad ?></td>
                                    <td> <label><input type="checkbox"  <?php if  ($ocak=="1"){ ?>
                                                checked="checked" <?php }else ?> /><span></span></label></td>
                                    <td> <label><input type="checkbox"  <?php if  ($subat=="1"){ ?>
                                                checked="checked" <?php }?> /><span></span></label></td>
                                    <td> <label><input type="checkbox"  <?php if  ($mart=="1"){ ?>
                                                checked="checked" <?php }?> /><span></span></label></td>
                                    <td> <label><input type="checkbox"  <?php if  ($nisan=="1"){ ?>
                                                checked="checked" <?php }?> /><span></span></label></td>
                                    <td> <label><input type="checkbox"  <?php if  ($mayis=="1"){ ?>
                                                checked="checked" <?php }?> /><span></span></label></td>
                                    <td> <label><input type="checkbox"  <?php if  ($haziran=="1"){ ?>
                                                checked="checked" <?php }?> /><span></span></label></td>
                                    <td> <label><input type="checkbox"  <?php if  ($temmuz=="1"){ ?>
                                                checked="checked" <?php }?> /><span></span></label></td>
                                    <td> <label><input type="checkbox"  <?php if  ($agustos=="1"){ ?>
                                                checked="checked" <?php }?> /><span></span></label></td>
                                    <td> <label><input type="checkbox"  <?php if  ($eylul=="1"){ ?>
                                                checked="checked" <?php }?> /><span></span></label></td>
                                    <td> <label><input type="checkbox"  <?php if  ($ekim=="1"){ ?>
                                                checked="checked" <?php }?> /><span></span></label></td>
                                    <td> <label><input type="checkbox"  <?php if  ($kasim=="1"){ ?>
                                                checked="checked" <?php }?> /><span></span></label></td>
                                    <td> <label><input type="checkbox"  <?php if  ($aralik=="1"){ ?>
                                                checked="checked" <?php }?> /><span></span></label></td>
                                </tr>
                                <?php  } ?>

                            </tbody>
                        </table>



                        <br>
                        <center>
                            <button type="submit" class="waves-light btn green" id="aidat_duzenle_buton"
                                form="aidat_duzenle">TAMAMLA</a>
                        </center>
                    </form>



                </div>
            </div>

        </div> <!-- bilgiler -->



    </div>
</div>

</div>

<script>
$(function() {

    $('#aidat_duzenle_buton').on("click", function() {

        swal({
            title: "Sporcu Kayıt edildi!",
            icon: "success",
        });

    })


})
</script>