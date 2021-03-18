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
            <h4 class="jumbotron-heading">SPORCU LİSTESİ</h4>
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
                    
                    for($i=0 ; $i < $sporcu_sayisi; $i++){
                        
                        $sporcu = $sporcu_listesi[$i]; //var_dump($sporcu);
                        $ad_soyad=  $sporcu['ad']." ".$sporcu['soyad'];
                        $kategori= $sporcu['kategori'];
                        $yas_grubu= $sporcu['yas_grubu'];
                        $sporcu_no= $sporcu['sporcu_no']; 
                        
                        ?>
                     
                        <tr>                     
                            <td><a href="sporcu_sayfasi.php?sporcu=<?php echo $sporcu_no ?>">
                                  <img src="files/images/logo.jpg" style="margin-bottom:5px;border-radius:1000px;width:20%"></a></td>
                            <td><?php echo $ad_soyad  ?></td>
                            <td><?php echo $kategori ?></td>
                            <td><?php echo $yas_grubu ?></td>
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
                <a class=" waves-light btn cyan darken-4" id= "sporcu_kayit_buton"  >Sporcu Kayıt</a>
                </div>
            </div>
        </div>
    </div>
</div>


</body>

</html>


<script>

$(function() {
    
        $('#sporcu_kayit_buton').on("click",function() {
    
            alert("heyy!");

    })


})




</script>