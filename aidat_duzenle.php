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

    $sporcu_no= $_GET['sporcu'];
    $sporcu= SporcuBilgileriGetir($sporcu_no);

    $ad_soyad=  $sporcu['ad']." ".$sporcu['soyad'];

    $aidat = array();
    $aidat = SporcununAidatBilgisiGetir($sporcu_no); //var_dump( $aidat);


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
                                <tr>
                                    <td><?php echo  $ad_soyad ?></td>
                                    <td> <label><input type="checkbox" name="ocak" <?php if  ($ocak=="1"){ ?>
                                                checked="checked" <?php }else ?> /><span></span></label></td>
                                    <td> <label><input type="checkbox" name="subat" <?php if  ($subat=="1"){ ?>
                                                checked="checked" <?php }?> /><span></span></label></td>
                                    <td> <label><input type="checkbox" name="mart" <?php if  ($mart=="1"){ ?>
                                                checked="checked" <?php }?> /><span></span></label></td>
                                    <td> <label><input type="checkbox" name="nisan" <?php if  ($nisan=="1"){ ?>
                                                checked="checked" <?php }?> /><span></span></label></td>
                                    <td> <label><input type="checkbox" name="mayis" <?php if  ($mayis=="1"){ ?>
                                                checked="checked" <?php }?> /><span></span></label></td>
                                    <td> <label><input type="checkbox" name="haziran" <?php if  ($haziran=="1"){ ?>
                                                checked="checked" <?php }?> /><span></span></label></td>
                                    <td> <label><input type="checkbox" name="temmuz" <?php if  ($temmuz=="1"){ ?>
                                                checked="checked" <?php }?> /><span></span></label></td>
                                    <td> <label><input type="checkbox" name="agustos" <?php if  ($agustos=="1"){ ?>
                                                checked="checked" <?php }?> /><span></span></label></td>
                                    <td> <label><input type="checkbox" name="eylul" <?php if  ($eylul=="1"){ ?>
                                                checked="checked" <?php }?> /><span></span></label></td>
                                    <td> <label><input type="checkbox" name="ekim" <?php if  ($ekim=="1"){ ?>
                                                checked="checked" <?php }?> /><span></span></label></td>
                                    <td> <label><input type="checkbox" name="kasim" <?php if  ($kasim=="1"){ ?>
                                                checked="checked" <?php }?> /><span></span></label></td>
                                    <td> <label><input type="checkbox" name="aralik" <?php if  ($aralik=="1"){ ?>
                                                checked="checked" <?php }?> /><span></span></label></td>
                                </tr>

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