<?php 
    include 'includes/head.php';
    include 'includes/nav.php';
 
    include 'modals/yarisma_ekle_modal.php';
   
    if(!$kullanici_giris_yapti_mi){
       header('Location: login.php'); 
      
   }

    $sporcu_no =  $_GET["sporcu"]; //var_dump($sporcu_no);
/*
    $sporcu_bilgileri = array(); 
    $sporcu_bilgileri= SporcuBilgileriGetir($sporcu_no); //var_dump($sporcu_bilgileri);

    $ok_bilgileri = array(); 
    $ok_bilgileri= SporcuOkBilgileriGetir($sporcu_no); //var_dump($ok_bilgileri);


    $yay_bilgileri = array(); 
    $yay_bilgileri= SporcuYayBilgileriGetir($sporcu_no); //var_dump($yay_bilgileri);


    $yarisma_bilgileri = array();
    $yarisma_bilgileri = SporcuYarismalariGetir($sporcu_no); //var_dump($yarisma_bilgileri);

    $antrenman_bilgileri = array();
    $antrenman_bilgileri = sporcuAntrenmanlariGetir($sporcu_no); //var_dump($antrenman_bilgileri);
*/


?>



<input type="hidden" id="sporcu_no_hidden" value="<?php echo $sporcu_no ?>" />
<div class="container">
    <br> <br>

    <div class="row">
        <!-- tabs -->
        <div id="tabs" class="col s12">
            <ul class="tabs">
                <li class="tab col s3"><a class="active" href="#bilgiler">Bilgiler</a></li>
                <li class="tab col s3  "><a href="#yarisma">Yarışma Dereceleri</a></li>
                <li class="tab col s3"><a href="#puan">Antrenman Puanları</a></li>
                <li class="tab col s3 disabled"><a href="#antrenman">Antrenman Programı</a></li>

            </ul>
        </div>

        <!-- bilgiler -->
        <div id="bilgiler" class="col s12">
            <br><br>
            <h5 style="text-align:center"> Kişisel Bilgiler</h5>

            <div class="row">
                <div class="col s12" id="kisisel_bilgi_tablo">
                    <!-- kisisel -->
                </div>
            </div>

            <br>

            <h5 style="text-align:center"> Teknik Bilgiler </h5>

            <div class="row">
                <div class="col s6" id="yay_bilgi_tablo">
                    <!-- yay -->
                </div>
                <div class="col s6" id="ok_bilgi_tablo">
                    <!-- ok -->
                </div>
            </div>
            <br>

            <div class="fixed-action-btn">
                <a class="btn-floating btn-large teal">
                    <i class="large material-icons">menu</i>
                </a>
                <ul>
                    <li><a class="btn-floating amber" id="bilgi_duzenle_buton"
                            href="sporcu_duzenle.php?sporcu=<?php echo $sporcu_no ?>"><i
                                class="material-icons">mode_edit</i></a>Düzenle</li>
                    <li><a class="btn-floating red darken-1" id="sporcu_sil_buton" onclick="sporcu_sil()"><i
                                class="material-icons">delete</i></a>Sporcu Sil</li>
                    <!-- href="action/sporcu_sil_action.php?sporcu=<?php echo $sporcu_no ?>"> -->

                </ul>
            </div>

        </div>

        <!-- yarisma -->
        <div id="yarisma" class="col s12">
            <br><br>
            <h5 style="text-align:center"> Yarışma Dereceleri </h5>
            <br>
            <table>
                <thead class="amber lighten-5">
                    <tr>

                        <th scope="col"> Yarışma Adı </th>
                        <th scope="col"> Tarih </th>
                        <th scope="col"> Sıralama </th>
                        <th scope="col"> Madalya</th>

                    </tr>
                </thead>
                <tbody id="yarisma_bilgi_tablo" class="striped table-hover highlight ">
                    <!-- Yarışmalar -->

                </tbody>

            </table>
            <br><br>
            <div id="hata_mesaji_yarisma"></div>

            <br>

            <div class="fixed-action-btn">
                <a class="btn-floating btn-large teal">
                    <i class="large material-icons">menu</i>
                </a>
                <ul>
                    <li><a class="btn-floating orange modal-trigger" id="yarisma_ekle_buton"
                            href="#yarisma_ekle_modal"><i class="material-icons">mode_edit</i></a>Yarışma Ekle</li>

                </ul>
            </div>
            <br>
        </div>

        <!-- puan -->
        <div id="puan" class="col s12">
            <br><br>
           
            <h5 style="text-align:center">Antrenmanlar</h5>
            <br>
            <div id="hata_mesaji_antrenman"></div>
            <ul class="collapsible popout" data-collapsible="accordion" id="antrenman_tablo"> </ul>
          

            <div class="fixed-action-btn">
                <a class="btn-floating btn-large teal">
                    <i class="large material-icons">menu</i>
                </a>
                <ul>
                    <li><a class="btn-floating orange modal-trigger" id="puan_duzenle_buton" href="#">
                            <i class="material-icons">edit</i></a>Puan Düzenle</li>
                </ul>
            </div>

            <br>

        </div>

        <!-- antrenman -->
        <div id="antrenman" class="col s12">
            <br><br>
            <h5 style="text-align:center"> Antrenman Programı </h5>
            <br>

        </div>

    </div>

</div>

<?php   //  include 'footer.php';?>

<script>
$(document).ready(function() {

    sporcu_bilgileri_listele();
    sporcu_yarismalari_listele();
    sporcu_antrenmanlari_listele();

});

var sporcu_bilgileri_listele = function() {
    // var sporcu_no = $("#sporcu_no").val();
    var sporcu_no = $("#sporcu_no_hidden").val();
    var sporcu_bilgileri_veri = {
        "sporcu_no": sporcu_no
    };

    var json_string_sporcu_bilgileri = JSON.stringify(sporcu_bilgileri_veri);

    $.ajax({
        url: 'services/sporcu_bilgi_getir_servis.php',
        type: 'POST',
        data: json_string_sporcu_bilgileri,
        contentType: 'application/json',
        success: function(response) {
            var cevap = response.data;
            var kisisel_bilgi_tablo = `         
                
                        <table class="striped amber lighten-4">                     
                            <tbody>
                                <tr>
                                    <td style="text-align:center"><i class="material-icons">account_circle</i></td>
                                    <td><b> Ad Soyad :</b></td>
                                    <td>${cevap.ad + " " + cevap.soyad }</td>

                                </tr>
                                <tr>

                                    <td style="text-align:center"><i class="material-icons">assignment_ind</i></td>
                                    <td><b> TC No :</b></td>
                                    <td>${cevap.tc_no}</td>
                            
                                </tr>
                                <tr>

                                    <td style="text-align:center"><i class="material-icons">wc</i></td>
                                    <td><b> Cinsiyet :</b></td>
                                    <td>${cevap.cinsiyet }</td>
                        
                                </tr>
                                <tr>

                                    <td style="text-align:center"><i class="material-icons">cake</i></td>
                                    <td><b> Doğum Tarihi :</b></td>
                                    <td>${cevap.dogum_tarihi }</td>
                            
                                </tr>

                                <tr>

                                    <td style="text-align:center"><i class="material-icons">phone</i></td>
                                    <td><b> Tel No :</b></td>
                                    <td>${cevap.tel_no  }</td>
                                
                                </tr>

                            </tbody>
                        </table> 
            `;

            var yay_bilgi_tablo = `      
                    <table class="striped  amber lighten-4" > 
                            <tbody>
                                <tr>
                                    <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                    <td><b>Yay Kategori:</b></td>
                                    <td>${cevap.kategori}</td>

                                </tr>
                                <tr>

                                    <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                    <td><b> Ebat:</b></td>
                                    <td>${cevap.ebat}</td>

                                </tr>
                                <tr>

                                    <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                    <td><b> Çekiş Ağırlığı:</b></td>
                                    <td>${cevap.cekis_agirligi}</td>

                                </tr>
                                <tr>

                                    <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                    <td> <b>Yay Sertliği:</b></td>
                                    <td>${cevap.yay_sertligi}</td>

                                </tr>

                                <tr>

                                    <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                    <td><b> Handle:</b></td>
                                    <td>${cevap.handle}</td>

                                </tr>
                                <tr>

                                    <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                    <td><b> Limp:</b></td>
                                    <td>${cevap.limp}</td>

                                </tr>
                                <tr>

                                    <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                    <td><b> Kiriş Yüksekliği:</b></td>
                                    <td>${cevap.kiris_yuksekligi}</td>

                                </tr>
                                <tr>

                                    <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                    <td><b> Berger:</b></td>
                                    <td>${cevap.berger}</td>

                                </tr>
                                <tr>

                                    <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                    <td><b> Kliker:</b></td>
                                    <td>${cevap.kliker}</td>

                                </tr>

                                <tr>

                                    <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                    <td><b> Stabilizör:</b></td>
                                    <td>${cevap.stabilizer}</td>

                                </tr>
                                <tr>

                                    <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                    <td><b> Tiller:</b></td>
                                    <td>${cevap.tiller}</td>

                                </tr>


                                <tr>

                                    <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                    <td><b> Nişangah:</b></td>
                                    <td>${cevap.nisangah}</td>

                                </tr>

                                <tr>

                                    <td style="text-align:center"><i class="material-icons"> track_changes </i></td>
                                    <td><b> Atış Mesafesi:</b></td>
                                    <td>${cevap.atis_mesafesi}</td>

                                </tr>

                                <tr>

                                    <td style="text-align:center"><i class="material-icons"> comment </i>
                                    </td>
                                    <td><b>Notlar:</b></td>
                                    <td>${cevap.yay_notlar}</td>

                                </tr>



                            </tbody>
                        </table>
            `;

            var ok_bilgi_tablo = `
                    <table class="striped  amber lighten-4" >    
                        <tbody>

                            <tr>

                                <td style="text-align:center"><i class="material-icons"> trending_flat </i></td>
                                <td><b> Ok Sayısı:</b></td>
                                <td>${cevap.ok_sayisi}</td>

                            </tr>
                            <tr>

                                <td style="text-align:center"><i class="material-icons"> trending_flat </i></td>
                                <td><b> Ok Numarası:</b></td>
                                <td>${cevap.ok_numarasi}</td>

                            </tr>
                            <tr>

                                <td style="text-align:center"><i class="material-icons"> trending_flat </i></td>
                                <td><b> Uzunluk:</b></td>
                                <td>${cevap.uzunluk}</td>

                            </tr>
                            <tr>

                                <td style="text-align:center"><i class="material-icons"> trending_flat </i></td>
                                <td><b> Malzeme:</b></td>
                                <td>${cevap.malzeme}</td>

                            </tr>
                            <tr>

                                <td style="text-align:center"><i class="material-icons"> trending_flat </i></td>
                                <td><b> Sapma:</b></td>
                                <td>${cevap.sapma}</td>

                            </tr>
                            <tr>

                                <td style="text-align:center"><i class="material-icons"> trending_flat </i></td>
                                <td><b> Çap:</b></td>
                                <td>${cevap.cap}</td>

                            </tr>
                            <tr>

                                <td style="text-align:center"><i class="material-icons"> trending_flat </i></td>
                                <td><b> Ağırlık:</b></td>
                                <td>${cevap.agirlik}</td>

                            </tr>
                            <tr>

                                <td style="text-align:center"><i class="material-icons"> trending_flat </i></td>
                                <td><b> Uç Ağırlığı:</b></td>
                                <td>${cevap.uc_agirligi}</td>

                            </tr>
                            <tr>

                                <td style="text-align:center"><i class="material-icons"> trending_flat </i></td>
                                <td><b> Tüy:</b></td>
                                <td>${cevap.tuy}</td>

                            </tr>
                            <tr>

                                <td style="text-align:center"><i class="material-icons"> trending_flat </i></td>
                                <td><b> Arkalık:</b></td>
                                <td>${cevap.arkalik}</td>

                            </tr>
                            <tr>

                                <td style="text-align:center"><i class="material-icons"> straighten </i></td>
                                <td><b> Kol Boyu:</b></td>
                                <td>${cevap.kol_boyu}</td>

                            </tr>

                            <tr>

                                <td style="text-align:center"><i class="material-icons"> comment </i>
                                </td>
                                <td><b> Notlar:</b></td>
                                <td>${cevap.ok_notlar}</td>

                            </tr>

                        </tbody>
                    </table>
                
            `;

            $("#kisisel_bilgi_tablo").append(kisisel_bilgi_tablo);
            $("#yay_bilgi_tablo").append(yay_bilgi_tablo);
            $("#ok_bilgi_tablo").append(ok_bilgi_tablo);

            console.log(cevap);
        },
        error: function(error) {

            console.log(error);
        }

    });


}

var sporcu_yarismalari_listele = function() {
    var sporcu_no = $("#sporcu_no_hidden").val();
    var sporcu_yarismalari_veri = {
        "sporcu_no": sporcu_no
    };

    var json_string_yarisma_bilgileri = JSON.stringify(sporcu_yarismalari_veri);

    $.ajax({
        url: 'services/yarisma_listele_servis.php',
        type: 'POST',
        data: json_string_yarisma_bilgileri,
        contentType: 'application/json',
        success: function(response) {
            if (!response.data) {
                $("#hata_mesaji_yarisma").empty();
                $("#hata_mesaji_yarisma").append(
                    "<div class='card-panel red lighten-4'><center>Yarışma Bulunamadı.</center></div>"
                );
            } else {
                var cevap = response.data;
                for (var i = 0; i < cevap.length; i++) {
                    var yarisma_bilgi = `
                            <tr>
                                <td>${ cevap[i].yarisma_adi}</td>
                                <td>${ cevap[i].tarih}</td>
                                <td>${ cevap[i].siralama}</td>
                                <td>${ cevap[i].madalya}</td>
                            </tr>
                    `;

                    $("#yarisma_bilgi_tablo").append(yarisma_bilgi);
                }
            }
            console.log(cevap);
        },
        error: function(error) {

            console.log(error);
        }

    });
}

var sporcu_antrenmanlari_listele = function() {
    var sporcu_no = $("#sporcu_no_hidden").val();
    var sporcu_antrenmanlari_veri = {
        "sporcu_no": sporcu_no
    };

    var json_string_antrenman_bilgileri = JSON.stringify(sporcu_antrenmanlari_veri);

    $.ajax({
        url: 'services/sporcu_antrenman_getir_servis.php',
        type: 'POST',
        data: json_string_antrenman_bilgileri,
        contentType: 'application/json',
        success: function(response) {

             if (!response.sonuc) {
                $("#hata_mesaji_antrenman").empty();
                $("#hata_mesaji_antrenman").append(
                    "<div class='card-panel red lighten-4'><center>Bir hata oluştu. </center></div>"
                );

            }  else if (!response.data || response.data.length == 0) {
                $("#hata_mesaji_antrenman").empty();
                $("#hata_mesaji_antrenman").append(
                    "<div class='card-panel red lighten-4'><center>Antrenman Bulunamadı.</center></div>"
                );

            } else {
                var cevap = response.data;
                for (var i = 0; i < cevap.length; i++) {
                    var antrenman_bilgi = ` 
                        <li>                  
                            <div class="collapsible-header center teal lighten-5" onclick="antrenman_detay_listele(${(cevap[i].id)})">                                     
                            
                                <div class="col s6"><b>${ cevap[i].tarih}</b></div>
                                <div class="col s6"><b>${ cevap[i].toplam_puan}</b></div>
                            </div> 
                            <div class="collapsible-body center  ">
                                <div class="row">
                                    <div class="col s5">
                                        <table class="centered">
                                            <!-- PUAN DETAY-->
                                            <thead>
                                                <tr>
                                                    <th data-field="seri">Seri</th>
                                                    <th data-field="1">1. Ok</th>
                                                    <th data-field="2">2. Ok</th>
                                                    <th data-field="3">3. Ok</th>
                                                    <th data-field="seri_toplam">S.T.</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody id="detay_tablo_sol${cevap[i].id}"></tbody>
                                    
                                        </table>
                                        <div id="tur_toplam_sol${cevap[i].id}"></div>
                                    </div>  
                                    <div class="col s2"></div> 
                                    <div class="col s5">
                                        <table class="centered">
                                            <!-- PUAN DETAY-->
                                            <thead>
                                                <tr>
                                                    <th data-field="seri">Seri</th>
                                                    <th data-field="1">1. Ok</th>
                                                    <th data-field="2">2. Ok</th>
                                                    <th data-field="3">3. Ok</th>
                                                    <th data-field="seri_toplam">S.T.</th>

                                                </tr>
                                            </thead>
                                            
                                            <tbody id="detay_tablo_sag${cevap[i].id}"></tbody>                                      
                                        </table>
                                        <div id="tur_toplam_sag${cevap[i].id}"></div>
                                    </div>
                                </div>    
                            </div>

                        </li>
                    `;

                    $("#antrenman_tablo").append(antrenman_bilgi);

                }

            }
            console.log(cevap);

        },
        error: function(error) {

            console.log(error);
        }

    });


}

var antrenman_detay_listele = function(antrenman_no) {
    var sporcu_no = $("#sporcu_no_hidden").val();
    //  var antrenman_no = "1";

    var antrenman_puanlari_veri = {
        "sporcu_no": sporcu_no,
        "antrenman_no": antrenman_no
    };

    var json_string_puan_bilgileri = JSON.stringify(antrenman_puanlari_veri);

    $.ajax({
        url: 'services/antrenman_detayi_getir_servis.php',
        type: 'POST',
        data: json_string_puan_bilgileri,
        contentType: 'application/json',
        success: function(response) {
            var cevap = response.data;
            $("#detay_tablo_sol"+antrenman_no).empty();
            $("#detay_tablo_sag"+antrenman_no).empty();
            for (var i = 0; i < (cevap.length) / 2; i++) {
                var puanlar = `
                    <tr>
                        <td data-field="seri"><b>${ cevap[i].seri_no}</b></td>
                        <td data-field="1">${ cevap[i].ok_1}</td>
                        <td data-field="2">${ cevap[i].ok_2}</td>
                        <td data-field="3">${ cevap[i].ok_3}</td>
                        <td class="amber lighten-5" data-field="seri_toplam">${ cevap[i].seri_toplam}</td>
                       
                    </tr>
                `;

                $("#detay_tablo_sol"+antrenman_no).append(puanlar);
            };
            $("#tur_toplam_sol"+antrenman_no).empty();
            $("#tur_toplam_sol"+antrenman_no).append("<div class='card-panel teal lighten-4'><center>Toplam Puan: <b>160</b> </center></div>");

            for (var i = (cevap.length) / 2; i < cevap.length; i++) {
                var puanlar = `
                    <tr>
                        <td data-field="seri"><b>${ cevap[i].seri_no}</b></td>
                        <td data-field="1">${ cevap[i].ok_1}</td>
                        <td data-field="2">${ cevap[i].ok_2}</td>
                        <td data-field="3">${ cevap[i].ok_3}</td>
                        <td class="amber lighten-5" data-field="seri_toplam">${ cevap[i].seri_toplam}</td>
                    </tr>
                `;

                $("#detay_tablo_sag"+antrenman_no).append(puanlar);
            };
            $("#tur_toplam_sag"+antrenman_no).empty();
            $("#tur_toplam_sag"+antrenman_no).append("<div class='card-panel teal lighten-4'><center>Toplam Puan: <b>133</b> </center></div>");

            console.log(cevap);
        },
        error: function(error) {

            console.log(error);
        }

    });


}

var sporcu_sil = function() {
    var sporcu_no = $("#sporcu_no_hidden").val();

    var veri = {
        "sporcu_no": sporcu_no,
    };

    var json_string = JSON.stringify(veri);

    $.ajax({
        url: 'services/sporcu_sil_servis.php',
        type: 'POST',
        data: json_string,
        contentType: 'application/json',
        success: function(cevap) {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Sporcu Silindi.',
                showConfirmButton: false,
                timer: 1500,
            }).then((result) => {
                window.location.href = "index.php";
            });

            console.log(cevap);
        },
        error: function(error) {

            Swal.fire({
                icon: 'error',
                title: 'Hata.',
                text: 'Silme işlemi yapılamadı !',
            })
            console.log(error);
        }

    });


}

$("antrenman_tablo").click(function() {
    antrenman_detay_listele();
});
</script>