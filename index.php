<?php 

    include 'head.php';
    include 'nav.php';
  
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
            <h4 class="jumbotron-heading">SPORCU LİSTESİ</h4>
        </center>
    </div>
</section>
<br>


<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <!-- <div class="table-responsive"> -->

            <div class="row">
                <div class="col s12">
                    <form>
                        <div class="input-field col s4">
                            <i class="material-icons prefix">search</i>
                            <input type="text" id="autocomplete-input" class="autocomplete">
                            <label for="autocomplete-input">Sporcu Ara</label>
                        </div>
                        <div class="input-field col s4">

                            <select>
                                <option value="" disabled selected>Yay türü seçin</option>
                                <option value="1">Klasik yay</option>
                                <option value="2">Makaralı Yay</option>

                            </select>
                        </div>
                        <div class="input-field col s4">

                            <select>
                                <option value="" disabled selected>Yaş Grubu seçin</option>
                                <option value="1">Büyükler</option>
                                <option value="2">Gençler</option>
                                <option value="3">Kadetler</option>
                                <option value="4">Yıldızlar</option>
                                <option value="5">Minikler</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>


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
                    
                    for($i=0 ; $i < $sporcu_sayisi; $i++){
                        
                        $sporcu = $sporcu_listesi[$i]; //var_dump($sporcu);
                        $ad_soyad=  $sporcu['ad']." ".$sporcu['soyad'];
                        $kategori= $sporcu['kategori'];
                        $yas_grubu= $sporcu['yas_grubu'];
                        $sporcu_no= $sporcu['sporcu_no']; 
                        
                        ?>

                    <tr onclick="document.location = 'sporcu_sayfasi.php?sporcu=<?php echo $sporcu_no ?>';">
                        <td><a href="sporcu_sayfasi.php?sporcu=<?php echo $sporcu_no ?>">
                                <img src="files/images/logo.jpg"
                                    style="margin-bottom:5px;border-radius:1000px;width:20%"></a></td>
                        <td><?php echo $ad_soyad  ?></td>
                        <td><?php echo $kategori ?></td>
                        <td><?php echo $yas_grubu ?></td>
                        <!-- <td class="text-right"><button class="btn btn-sm btn-info"><i class="fa fa-pencil"></i> </button> </td> -->

                    </tr>

                    <?php } ?>

                </tbody>
            </table>

        </div>
        <br><br>
        <div class="col mb-2">
            <div class="row">

                <div class="col-sm-12 col-md-2 ">
                    <a class=" waves-light btn green " id="sporcu_kayit_buton" href="sporcu_kayit.php">Sporcu Kayıt</a>

                </div>
            </div>
        </div>
    </div>
</div>


<?php     include 'footer.php';?>

<?php    // include 'footer.php';?>


<script>
$(document).ready(function() {
    $('select').formSelect();
});
$(document).ready(function(){
    $('.modal').modal();
  });

$(document).ready(function() {
    $('input.autocomplete').autocomplete({
        data: {
            "Apple": null,
            "Microsoft": null,
            "Google": 'https://placehold.it/250x250'
        },
    });
});
$(function() {


})
</script>