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
        <div class="col-12 ">

            <div class="fixed-action-btn">
                <a class="btn-floating btn-large teal">
                    <i class="large material-icons">menu</i>
                </a>
                <ul>
                    <li><a class="btn-floating orange modal-trigger" id="sporcu_arama_buton"
                            href="#sporcu_arama_modal"><i class="material-icons">search</i></a>Sporcu Ara</li>

                    <li><a class="btn-floating green darken-1 modal-trigger" id="sporcu_kayit_buton"
                            href="#sporcu_kayit_modal"><i class="material-icons">add</i></a>Sporcu Kayıt</li>


                </ul>
            </div>

            <!-- 
             <div class="col s11">
                    <ul class="collapsible ">
                        <li>
                            <div class="collapsible-header amber lighten-5"><i class="material-icons">search</i>Sporcu Ara
                            </div>
                            <div class="collapsible-body"><span>
                                    <div class="row ">
                                        <div class="col s12">

                                            <div class="input-field col s5">
                                                <i class="material-icons prefix">search</i>
                                                <input type="text" id="text_ara" class="autocomplete"
                                                    onchange="arama_yap()">

                                                <label for="text_ara">Sporcu Adı</label>

                                            </div>

                                            <div class="input-field col s3">

                                                <select id="yay_turu_ara" onchange="arama_yap()">
                                                    <option value="" selected>Yay türü seçin</option>
                                                    <option value="klasik">Klasik</option>
                                                    <option value="makarali">Makaralı</option>

                                                </select>
                                            </div>
                                            <div class="input-field col s3">

                                                <select id="yas_grubu_ara" onchange="arama_yap()">
                                                    <option value="" selected>Yaş Grubu seçin</option>
                                                    <option value="buyukler">Büyükler</option>
                                                    <option value="gencler">Gençler</option>
                                                    <option value="kadetler">Kadetler</option>
                                                    <option value="yildizlar">Yıldızlar</option>
                                                    <option value="minikler">Minikler</option>
                                                </select>
                                            </div>


                                            <div class="input-field col s1">
                                                <button class=" waves-light btn green" type="button" id="temizle_buton">
                                                    Temizle
                                                </button>
                                            </div>


                                        </div>
                                    </div>
                                </span></div>
                        </li>
                    </ul>
                </div>

                <div class="col s1">
                    <a class=" waves-light btn orange modal-trigger " id="sporcu_kayit_buton" href="#sporcu_kayit_modal">
                        Kayıt</a>
                
                </div> 
           -->

            <?php  include 'modals/sporcu_kayit_modal.php';
                 include 'modals/sporcu_arama_modal.php';  ?>

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
                <tbody id="sporcu_listesi">

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

    </div>
</div>




<?php  //   include 'footer.php';?>




<script>
        var arama_yap = function() {
            var yay = $("#yay_turu_ara option:selected").val();
            var yas_grubu = $("#yas_grubu_ara option:selected").val();
            var text = $("#text_ara").val();
            var veri = {
                "yay": yay,
                "yas_grubu": yas_grubu,
                "text": text,
            };

            var json_string = JSON.stringify(veri);

            $.ajax({
                url: 'listele_servis.php',
                type: 'POST',
                data: json_string,
                contentType: 'application/json',
                success: function(cevap) {
                    $("#sporcu_listesi").empty();
                    if (!cevap) { //<div class = 'alert alert-warning' role = 'alert' > Sporcu Bulunamadı </div>
                        $("#sporcu_listesi").append("Sporcu Bulunamadı");
                        // Swal.fire('Sporcu Bulunamadı');
                    } else {
                        for (var i = 0; i < cevap.length; i++) {
                            var satir = `
                                                <tr onclick="document.location = 'sporcu_sayfasi.php?sporcu=${cevap[i].sporcu_no}';">
                                                    <td><img src="files/images/logo.jpg" style="margin-bottom:5px;border-radius:1000px;width:20%"></td>
                                                    <td>${  cevap[i].ad + " " + cevap[i].soyad }</td>
                                                    <td>${  cevap[i].kategori  }</td>
                                                    <td>${ cevap[i].yas_grubu}</td>
                                                
                                                
                                                </tr>
                                            
                                            `;
                            $("#sporcu_listesi").append(satir);

                        }
                    }

                    console.log(cevap);
                },
                error: function(error) {
                    console.log(error);
                },



            });


}

        $(document).ready(function() {
            $('select').formSelect();
            $('.modal').modal();
            $('.collapsible').collapsible();

            // $('.modal').modal('dismissible');



        });
</script>