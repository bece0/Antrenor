<?php 
    include 'includes/head.php';
    include 'includes/nav.php';
  //  include 'database/database.php';

    if(!$kullanici_giris_yapti_mi){
       header('Location: login.php'); 
      
   }

    $sporcu_no =  $_GET["sporcu"]; //var_dump($sporcu_no);

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



?>

<div class="container">
    <br>

    <div class="row">

        <!-- bilgiler -->
        <div id="bilgiler" class="col s12">
            <br>
            <input type="hidden" id="sporcu_no" id="sporcu_no" value="<?php echo $sporcu_no ?>" />
            <div class="card row mx-2 mb-3">

                <br>

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
                <center>

                    <button type="button" class="waves-light btn green" id="bilgi_duzenle_buton"
                        onclick="sporcu_duzenle()">TAMAMLA</a>

                </center>
                <br>




            </div>

        </div>


    </div>

</div>

<?php   //  include 'footer.php';?>

<script>

    $(document).ready(function() {

        var sporcu_no = $("#sporcu_no").val();

        var veri = {
            "sporcu_no": sporcu_no,
        };

        var json_string = JSON.stringify(veri);

        $.ajax({
            url: 'services/sporcu_bilgi_getir_servis.php',
            type: 'POST',
            data: json_string,
            contentType: 'application/json',
            success: function(response) {
                    var cevap = response.data;
                    var kisisel_bilgi_tablo = `         
                            <table class="striped amber lighten-5">
                                                <thead>
                                                    <tr>
                                                        <th data-field="1"></th>
                                                        <th data-field="2"></th>
                                                        <th data-field="3"></th>

                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td style="text-align:center"><i class="material-icons">account_circle</i></td>
                                                        <td><b> Ad :</b></td>
                                                        <td> <input value="${cevap.ad}" id="ad" type="text"
                                                                class="validate"> </td>

                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:center"><i class="material-icons">account_circle</i></td>
                                                        <td><b> Soyad :</b></td>
                                                        <td> <input value="${cevap.soyad}" id="soyad" type="text"
                                                                class="validate"> </td>

                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:center"><i class="material-icons">account_circle</i></td>
                                                        <td><b> TC :</b></td>
                                                        <td> <input value="${cevap.tc_no}" id="tc_no" type="text"
                                                                class="validate"> </td>

                                                    </tr>
                                                    <tr>

                                                        <td style="text-align:center"><i class="material-icons">wc</i></td>
                                                        <td><b> Cinsiyet :</b></td>
                                                        <td> <input value="${cevap.cinsiyet}" id="cinsiyet"
                                                                type="text" class="validate"> </td>

                                                    </tr>
                                                    <tr>

                                                        <td style="text-align:center"><i class="material-icons">cake</i></td>
                                                        <td><b> Doğum Tarihi :</b></td>

                                                        <td> <input value="${cevap.dogum_tarihi}" id="dogum_tarihi"
                                                                type="text" class="validate"> </td>

                                                    </tr>

                                                    <tr>

                                                        <td style="text-align:center"><i class="material-icons">phone</i></td>
                                                        <td><b> Tel No :</b></td>
                                                        <td> <input value="${cevap.tel_no}" id="tel_no" type="text"
                                                                class="validate"> </td>

                                                    </tr>

                                                    <tr>

                                                        <td style="text-align:center"><i class="material-icons">dns</i></td>
                                                        <td><b> Yaş Grubu :</b></td>
                                                        <td> <input value="${cevap.yas_grubu}" id="yas_grubu"
                                                                type="text" class="validate"> </td>

                                                    </tr>

                                                </tbody>
                            </table>
                    
                    `;

                    var yay_bilgi_tablo = `      

                        <table class="striped  amber lighten-5">
                                                <thead>

                                                    <tr>
                                                        <th data-field="1"></th>
                                                        <th data-field="2"></th>
                                                        <th data-field="3"></th>

                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                                        <td><b> Yay Kategori:</b></td>
                                                        <td> <input value="${cevap.kategori} " id="kategori"
                                                                type="text" class="validate"> </td>

                                                    </tr>
                                                    <tr>

                                                        <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                                        <td><b> Ebat:</b></td>
                                                        <td> <input value=" ${cevap.ebat} " id="ebat" type="text"
                                                                class="validate"> </td>

                                                    </tr>
                                                    <tr>

                                                        <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                                        <td><b> Çekiş Ağırlığı:</b></td>
                                                        <td> <input value=" ${cevap.cekis_agirligi}" id="cekis_agirligi"
                                                        type="text" class="validate"> </td>

                                                    </tr>
                                                    <tr>

                                                        <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                                        <td><b> Yay Sertliği:</b></td>
                                                        <td> <input value=" ${cevap.yay_sertligi} " id="yay_sertligi" 
                                                        type="text" class="validate"> </td>
                                                    </tr>

                                                    <tr>

                                                        <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                                        <td><b> Handle:</b></td>
                                                        <td> <input value=" ${cevap.handle} " id="handle"
                                                                type="text" class="validate"> </td>
                                                    </tr>
                                                    <tr>

                                                        <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                                        <td><b> Limp:</td>
                                                        <td> <input value=" ${cevap.limp} " id="limp" type="text"
                                                                class="validate"> </td>
                                                    </tr>
                                                    <tr>

                                                        <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                                        <td><b> Kiriş Yüksekliği:</b></td>
                                                        <td> <input value=" ${cevap.kiris_yuksekligi} "
                                                                id="kiris_yuksekligi" type="text" class="validate"> </td>
                                                    </tr>
                                                    <tr>

                                                        <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                                        <td><b> Berger:</b></td>
                                                        <td> <input value=" ${cevap.berger} " id="berger"
                                                                type="text" class="validate"> </td>
                                                    </tr>
                                                    <tr>

                                                        <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                                        <td><b> Kliker:</b></td>
                                                        <td> <input value=" ${cevap.kliker} " id="kliker"
                                                                type="text" class="validate"> </td>
                                                    </tr>

                                                    <tr>

                                                        <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                                        <td><b> Stabilizör:</b></td>
                                                        <td> <input value=" ${cevap.stabilizer} " id="stabilizer"
                                                                type="text" class="validate"> </td>
                                                    </tr>
                                                    <tr>

                                                        <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                                        <td><b> Tiller:</b></td>
                                                        <td> <input value=" ${cevap.tiller} " id="tiller"
                                                                type="text" class="validate"> </td>
                                                    </tr>


                                                    <tr>

                                                        <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                                        <td><b> Nişangah:</b></td>
                                                        <td> <input value=" ${cevap.nisangah} " id="nisangah"
                                                                type="text" class="validate"> </td>
                                                    </tr>

                                                    <tr>

                                                        <td style="text-align:center"><i class="material-icons"> track_changes </i></td>
                                                        <td><b> Atış Mesafesi:</b></td>
                                                        <td> <input value=" ${cevap.atis_mesafesi} "
                                                                id="atis_mesafesi" type="text" class="validate"> </td>
                                                    </tr>

                                                    <tr>

                                                        <td style="text-align:center"><i class="material-icons"> comment </i></td>
                                                        <td><b>Notlar:</b></td>
                                                        <td> <input value=" ${cevap.yay_notlar} " id="yay_notlar"
                                                                type="text" class="validate"> </td>
                                                    </tr>



                                                </tbody>
                                            </table>
                    `;

                    var ok_bilgi_tablo = `
                        <table class="striped  amber lighten-5">
                                                <thead>

                                                    <tr>
                                                        <th data-field="1"></th>
                                                        <th data-field="2"></th>
                                                        <th data-field="3"></th>

                                                    </tr>
                                                </thead>

                                                <tbody>

                                                    <tr>

                                                        <td style="text-align:center"><i class="material-icons"> trending_flat </i>
                                                        </td>
                                                        <td><b> Ok Sayısı:</b></td>

                                                        <td> <input value=" ${cevap.ok_sayisi}  " id="ok_sayisi"
                                                                type="text" class="validate"> </td>
                                                    </tr>
                                                    <tr>

                                                        <td style="text-align:center"><i class="material-icons"> trending_flat </i>
                                                        </td>
                                                        <td><b> Ok Numarası:</b></td>

                                                        <td> <input value=" ${cevap.ok_numarasi}  " id="ok_numarasi"
                                                                type="text" class="validate"> </td>

                                                    </tr>
                                                    <tr>

                                                        <td style="text-align:center"><i class="material-icons"> trending_flat </i>
                                                        </td>
                                                        <td><b> Uzunluk:</b></td>

                                                        <td> <input value=" ${cevap.uzunluk}  " id="uzunluk"
                                                                type="text" class="validate"> </td>

                                                    </tr>
                                                    <tr>

                                                        <td style="text-align:center"><i class="material-icons"> trending_flat </i>
                                                        </td>
                                                        <td><b> Malzeme:</b></td>

                                                        <td> <input value=" ${cevap.malzeme}  " id="malzeme"
                                                                type="text" class="validate"> </td>

                                                    </tr>
                                                    <tr>

                                                        <td style="text-align:center"><i class="material-icons"> trending_flat </i>
                                                        </td>
                                                        <td><b> Sapma:</b></td>

                                                        <td> <input value=" ${cevap.sapma}  " id="sapma" type="text"
                                                                class="validate"> </td>

                                                    </tr>
                                                    <tr>

                                                        <td style="text-align:center"><i class="material-icons"> trending_flat </i>
                                                        </td>
                                                        <td><b> Çap:</b></td>

                                                        <td> <input value=" ${cevap.cap}  " id="cap" type="text"
                                                                class="validate"> </td>

                                                    </tr>
                                                    <tr>

                                                        <td style="text-align:center"><i class="material-icons"> trending_flat </i>
                                                        </td>
                                                        <td><b> Ağırlık:</b></td>

                                                        <td> <input value=" ${cevap.agirlik}  " id="agirlik"
                                                                type="text" class="validate"> </td>

                                                    </tr>
                                                    <tr>

                                                        <td style="text-align:center"><i class="material-icons"> trending_flat </i>
                                                        </td>
                                                        <td><b> Uç Ağırlığı:</b></td>

                                                        <td> <input value=" ${cevap.uc_agirligi}  " id="uc_agirligi"
                                                                type="text" class="validate"> </td>

                                                    </tr>
                                                    <tr>

                                                        <td style="text-align:center"><i class="material-icons"> trending_flat </i>
                                                        </td>
                                                        <td><b> Tüy:</b></td>

                                                        <td> <input value=" ${cevap.tuy}  " id="tuy" type="text"
                                                                class="validate"> </td>

                                                    </tr>
                                                    <tr>

                                                        <td style="text-align:center"><i class="material-icons"> trending_flat </i>
                                                        </td>
                                                        <td><b> Arkalık:</b></td>

                                                        <td> <input value=" ${cevap.arkalik}  " id="arkalik"
                                                                type="text" class="validate"> </td>

                                                    </tr>
                                                    <tr>

                                                        <td style="text-align:center"><i class="material-icons"> straighten </i>
                                                        </td>
                                                        <td> <b>Kol Boyu:</b></td>

                                                        <td> <input value=" ${cevap.kol_boyu}  " id="kol_boyu"
                                                                type="text" class="validate"> </td>

                                                    </tr>

                                                    <tr>

                                                        <td style="text-align:center"><i class="material-icons"> comment </i>
                                                        </td>
                                                        <td><b>Notlar:</b></td>

                                                        <td> <input value=" ${cevap.ok_notlar}  " id="ok_notlar"
                                                                type="text" class="validate"> </td>

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
    
    });

    var sporcu_duzenle = function() {
        var sporcu_no = $("#sporcu_no").val();
        var ad = $("#ad").val();
        var soyad = $("#soyad").val();
        var tc_no = $("#tc_no").val();
        var cinsiyet = $("#cinsiyet").val();
        var dogum_tarihi = $("#dogum_tarihi").val();
        var tel_no = $("#tel_no").val();
        var kategori = $("#kategori").val();
        var yas_grubu = $("#yas_grubu").val();

        var ebat = $("#ebat").val();
        var cekis_agirligi = $("#cekis_agirligi").val();
        var yay_sertligi = $("#yay_sertligi").val();
        var handle = $("#handle").val();
        var limp = $("#limp").val();
        var kiris_yuksekligi = $("#kiris_yuksekligi").val();
        var berger = $("#berger").val();
        var kliker = $("#kliker").val();
        var stabilizer = $("#stabilizer").val();
        var tiller = $("#tiller").val();
        var nisangah = $("#nisangah").val();
        var atis_mesafesi = $("#atis_mesafesi").val();
        var yay_notlar = $("#yay_notlar").val();

        var ok_sayisi = $("#ok_sayisi").val();
        var ok_numarasi = $("#ok_numarasi").val();
        var uzunluk = $("#uzunluk").val();
        var malzeme = $("#malzeme").val();
        var sapma = $("#sapma").val();
        var cap = $("#cap").val();
        var agirlik = $("#agirlik").val();
        var uc_agirligi = $("#uc_agirligi").val();
        var tuy = $("#tuy").val();
        var arkalik = $("#arkalik").val();
        var kol_boyu = $("#kol_boyu").val();
        var ok_notlar = $("#ok_notlar").val();


        var veri = {
            "sporcu_no": sporcu_no,
            "ad": ad,
            "soyad": soyad,
            "tc_no": tc_no,
            "cinsiyet": cinsiyet,
            "yas_grubu": yas_grubu,
            "dogum_tarihi": dogum_tarihi,
            "tel_no": tel_no,
            "kategori": kategori,
            "yas_grubu": yas_grubu,
            "ebat": ebat,
            "cekis_agirligi": cekis_agirligi,
            "yay_sertligi": yay_sertligi,
            "handle": handle,
            "limp": limp,
            "kiris_yuksekligi": kiris_yuksekligi,
            "berger": berger,
            "kliker": kliker,
            "stabilizer": stabilizer,
            "tiller": tiller,
            "nisangah": nisangah,
            "atis_mesafesi": atis_mesafesi,
            "yay_notlar": yay_notlar,
            "ok_sayisi": ok_sayisi,
            "ok_numarasi": ok_numarasi,
            "uzunluk": uzunluk,
            "malzeme": malzeme,
            "sapma": sapma,
            "cap": cap,
            "agirlik": agirlik,
            "uc_agirligi": uc_agirligi,
            "tuy": tuy,
            "arkalik": arkalik,
            "kol_boyu": kol_boyu,
            "ok_notlar": ok_notlar

        };

        var json_string = JSON.stringify(veri);

        $.ajax({
            url: 'services/sporcu_duzenle_servis.php',
            type: 'POST',
            data: json_string,
            contentType: 'application/json',
            success: function(cevap) {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Sporcu Bilgileri Güncellendi.',
                    showConfirmButton: false,
                    timer: 1500,
                }).then((result) => {
                    window.location.href = "sporcu_sayfasi.php?sporcu=" + sporcu_no + "";
                });

                console.log(cevap);

            },
            error: function(error) {
                Swal.fire({
                    icon: 'error',
                    title: 'Hata.',
                    text: 'Güncelleme işlemi yapılamadı !',
                })
                console.log(error);
            },



        });


    }

</script>