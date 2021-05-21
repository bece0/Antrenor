<?php 
    include 'includes/head.php';
    include 'includes/nav.php';

    include 'modals/puan_filtrele_modal.php';
?>

<div class="container">

    <section class="jumbotron text-center">
        <div class="container">
            <center>
                <h4 class="jumbotron-heading">HAFTALIK PUAN TABLOSU</h4>
                <h5 class="jumbotron-heading" id="filtre_adi"></h5>
            </center>
        </div>
    </section>
    <br>

    <!-- <div class="col s12">
        <div class="row">
            <div class="input-field col s6">
                <select id="yay_turu_ara" >
                    <option value="yay_default" disabled selected>Yay türü seçin</option>
                    <option value="klasik">Klasik yay</option>
                    <option value="makarali">Makaralı Yay</option>
              
                </select>
              
            </div>
            <div class="input-field col s6">
                <select  id="atis_mesafe_ara" onchange="puan_arama_yap()">
                    <option value="mesafe_default" disabled selected>Atış Mesafesi seçin</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                    <option value="50">50</option>
                    <option value="60">60</option>
                    <option value="70">70</option>
                </select>
         
            </div>
        </div>
    </div>  -->

    <div class="fixed-action-btn">
        <a class="btn-floating btn-large teal">
            <i class="large material-icons">menu</i>
        </a>
        <ul>
            <li><a class="btn-floating orange modal-trigger" id="puan_filtrele_buton"
                    href="#puan_filtrele_modal"><i class="material-icons">search</i></a>Filtrele</li>
        </ul>
    </div> 


    <table class="table table-bordered highlight  ">
        <thead>
            <tr>
                <th>Sıralama</th>
                <th>Ad Soyad</th>
                <th>Puan</th>

            </tr>
        </thead>
        <tbody id="haftalik_puan" class="amber lighten-5 striped">
       
        </tbody>
    </table>
    <br>
    <div id="hata_mesaji_puan"></div> 
    
</div>
<br>


<?php  //   include 'footer.php';?>

<script>
  var puan_listesi_getir = function(){
   
    };

  var puan_arama_yap = function(){
    var yay_turu= $("#yay_turu_ara option:selected").val();
    var atis_mesafesi= $("#atis_mesafe_ara option:selected").val();

    $("#filtre_adi").text(yay_turu + " Yay - " + atis_mesafesi+ " metre" );

    var veri={
        "yay_turu" : yay_turu,
        "atis_mesafesi" : atis_mesafesi
    };

    var json_string= JSON.stringify(veri);

    $.ajax({

        url: 'services/haftalik_puan_filtrele.php' ,
        type: 'POST',
        data: json_string,
        contentType: 'application/json',
        success: function(response){
            $("#haftalik_puan").empty();
            $("#haftalik_puan").append("");
            if (!response.sonuc) {
         
                $("#hata_mesaji_puan").empty();
                $("#hata_mesaji_puan").append(
                    "<div class='card-panel amber lighten-4'><center>Bir hata oluştu.</center></div>"
                );
     
            } else if (!response.data || response.data.length == 0) {
           
                $("#hata_mesaji_puan").empty();
                $("#hata_mesaji_puan").append(
                    "<div class='card-panel amber lighten-4'><center>Aradığınız kriterlere uygun sonuç bulunamadı.</center></div>"
                );

            } else {
                var cevap = response.data;
                $("#hata_mesaji_puan").empty();
               
                for (var i = 0; i < cevap.length; i++) {
                    var satir = `
                                                        
                                                         <tr>                                                         
                                                            <td>${ i+1 }</td>
                                                            <td>${ cevap[i].ad + " " + cevap[i].soyad }</td>
                                                            <td>${ cevap[i].toplam_puan}</td>                                                        
                                                        
                                                        </tr>
                                                    
                                                    `;
                    $("#haftalik_puan").append(satir);

                }
            }

            console.log(cevap);
        },
        error: function(error){
            console.log(error);
        },
    });
  };

    $(document).ready(function() {
        $("#hata_mesaji_puan").append(
                    "<div class='card-panel teal lighten-5'><center>Yay türü ve Atış mesafesini seçiniz.</center></div>"
                );
 

    });
</script>