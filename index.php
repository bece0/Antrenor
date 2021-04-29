<?php 

    include 'includes/head.php';
    include 'includes/nav.php';

    include 'modals/sporcu_kayit_modal.php';
    include 'modals/sporcu_arama_modal.php';
  
   // var_dump($_SESSION);
    if(!$kullanici_giris_yapti_mi){
        header('Location: login.php'); 
   }

  
   $antrenor_id=  $_SESSION["kullanici_id"];
   // $sporcu_listesi = array();
  // $sporcu_listesi= SporculariGetir($antrenor_id); var_dump( $sporcu_listesi);
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
                ARAMA FİLTRE
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

            <table class="table table-striped  table-hover highlight ">
                <thead>
                    <tr>

                        <th scope="col"> Sporcu </th>
                        <th scope="col"> Ad - Soyad</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Yaş grubu</th>
                        <th scope="col"></th>

                    </tr>
                </thead>
                <tbody id="sporcu_listesi"></tbody>
            </table>
            <br>
            <div id="hata_mesaji"></div>
            <input type="hidden" id="antrenor_id" value="<?php echo $antrenor_id ?>" />
        </div>
        <br><br>

    </div>
</div>


<?php  //   include 'footer.php';?>



<script>
var sporculari_getir = function() {
    var antrenor_id = $("#antrenor_id").val();
    var veri = {
        "antrenor_id": antrenor_id
    };

    var json_string = JSON.stringify(veri);

    $.ajax({
        url: 'services/sporcu_listele_servis.php',
        type: 'POST',
        data: json_string,
        contentType: 'application/json',
        success: function(response) {

            $("#sporcu_listesi").empty();

            if (!response.sonuc) {
                $("#hata_mesaji").empty();
                $("#hata_mesaji").append(
                    "<div class='card-panel red lighten-4'><center>Bir hata oluştu </center></div>"
                );

            } else if (!response.data || response.data.length == 0) {
                $("#hata_mesaji").empty();
                $("#hata_mesaji").append(
                    "<div class='card-panel amber lighten-4'><center>Sporcu Yok.</center></div>"
                );

            } else {
                var cevap = response.data;
                $("#hata_mesaji").empty();
                for (var i = 0; i < cevap.length; i++) {
                    var sporcu_listesi = `  <tr onclick="document.location = 'sporcu_sayfasi.php?sporcu=${cevap[i].sporcu_no}';">
                                            <td><img src="files/images/profile3.png" style="margin-bottom:5px;border-radius:1000px;width:20%"></td>
                                            <td>${  cevap[i].ad + " " + cevap[i].soyad }</td>
                                            <td>${  cevap[i].kategori  }</td>
                                            <td>${ cevap[i].yas_grubu}</td>     
                                            <td><div class="chip orange">Performans</div></td>     
                                        </tr>
                 `;

                    $("#sporcu_listesi").append(sporcu_listesi);

                }
            }

            console.log(cevap);
        },
        error: function(error) {

            console.log(error);
        }

    });

}

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
        url: 'services/sporcu_arama_servis.php',
        type: 'POST',
        data: json_string,
        contentType: 'application/json',
        success: function(response) {
            $("#sporcu_listesi").empty();

            if (!response.sonuc) {
                $("#hata_mesaji").empty();
                $("#hata_mesaji").append(
                    "<div class='card-panel amber lighten-4'><center>Sporcu Bulunamadı.</center></div>"
                );
                // Swal.fire('Sporcu Bulunamadı');
                M.toast({
                    html: 'Sporcu Bulunamadı!'
                })
            } else if (!response.data || response.data.length == 0) {
                $("#hata_mesaji").empty();
                $("#hata_mesaji").append(
                    "<div class='card-panel amber lighten-4'><center>Sporcu Yok.</center></div>"
                );

            } else {
                var cevap = response.data;
                $("#hata_mesaji").empty();
                for (var i = 0; i < cevap.length; i++) {
                    var satir = `
                                                        <tr onclick="document.location = 'sporcu_sayfasi.php?sporcu=${cevap[i].sporcu_no}';">
                                                            <td><img src="files/images/profile3.png" style="margin-bottom:5px;border-radius:1000px;width:20%"></td>
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
    sporculari_getir();
});
</script>