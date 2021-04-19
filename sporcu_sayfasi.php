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

<div class="fixed-action-btn">
    <a class="btn-floating btn-large teal">
        <i class="large material-icons">menu</i>
    </a>
    <ul>
        <li><a class="btn-floating deep-purple lighten-2" id="bilgi_duzenle_buton"
                href="sporcu_duzenle.php?sporcu=<?php echo $sporcu_no ?>"><i
                    class="material-icons">mode_edit</i></a>Düzenle</li>
        <li><a class="btn-floating red darken-1" id="sporcu_sil_buton" onclick="sporcu_sil()"><i
                    class="material-icons">delete</i></a>Sporcu Sil</li>
        <!-- href="action/sporcu_sil_action.php?sporcu=<?php echo $sporcu_no ?>"> -->

    </ul>
</div>


<input type="hidden" id="sporcu_no" value="<?php echo $sporcu_no ?>" />
<div class="container">
        <br> <br>
       
        <div class="row"> 
            <!-- tabs -->
            <div id="tabs" class="col s12">
                <ul class="tabs">
                    <li class="tab col s3"><a class="active" href="#bilgiler">Bilgiler</a></li>
                    <li class="tab col s3  "><a href="#yarisma">Yarışma Dereceleri</a></li>
                    <li class="tab col s3"><a href="#puan">Puan Durumu</a></li>
                    <li class="tab col s3 disabled"><a href="#antrenman">Antrenman Programı</a></li>

                </ul>
            </div>
      
            <!-- bilgiler -->
            <div id="bilgiler" class="col s12">
                <br><br>
                <h5 style="text-align:center"> Kişisel Bilgiler</h5>

                <div class="row">
                    <div class="col s12"  id="kisisel_bilgi_tablo">  <!-- kisisel -->   </div>
                </div>

                <br>

                <h5 style="text-align:center"> Teknik Bilgiler </h5>

                <div class="row">
                    <div class="col s6" id="yay_bilgi_tablo">  <!-- yay -->  </div>
                    <div class="col s6" id="ok_bilgi_tablo">  <!-- ok -->    </div>
                </div>
                <br>


            </div> 

            <!-- yarisma -->
            <div id="yarisma" class="col s12"> 
                <br><br>
                <h5 style="text-align:center"> Yarışma Dereceleri </h5>

                <table class="table table-striped table-hover highlight">
                    <thead>
                        <tr>

                            <th scope="col"> Yarışma Adı </th>
                            <th scope="col"> Tarih </th>
                            <th scope="col"> Sıralama </th>
                            <th scope="col"> Madalya</th>

                        </tr>
                    </thead>
                    <tbody id="yarisma_bilgi_tablo"> <!-- Yarışmalar -->   </tbody>
                </table>
                     
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

                <!--   <table class=" table table-striped  table-hover highlight ">
                            <thead>
                                <tr>
                                    <th scope="col"> Antrenman No </th>
                                    <th scope="col"> Tarih </th>
                                    <th scope="col"> Toplam Puan </th>

                                </tr>
                            </thead>
                            <tbody>


                                <tr >
                                    <td>1</td>
                                    <td>19.03.2021</td>
                                    <td>250</td>

                                </tr>
                                <tr >
                                    <td>2</td>
                                    <td>20.03.2021</td>
                                    <td>260</td>

                                </tr>

                            </tbody>
                        </table>    -->

                <!-- <table class=" table centered  ">

                            <tr>
                                <th scope="col "> Antrenman No </th>
                                <th scope="col "> Tarih </th>
                                <th scope="col "> Toplam Puan </th>

                            </tr>

                        </table> -->



                <ul class="collapsible popout" data-collapsible="accordion">

                    <?php 
                                
                                $antrenman_sayisi=count((is_countable($antrenman_bilgileri)?$antrenman_bilgileri:[])); 

                                if($antrenman_sayisi!=0){
                                for($i=0 ; $i<$antrenman_sayisi ; $i++){ 

                                    $antrenman = $antrenman_bilgileri[$i]; //var_dump($antrenman);
                                    $antrenman_no=  $antrenman['antrenman_no'];
                                    $tarih= $antrenman['tarih'];
                                    $toplam_puan= $antrenman['toplam_puan'];

                                    $seri_bilgileri= array();
                                    $seri_bilgileri = AntrenmanDetayiGetir($sporcu_no , $antrenman_no);
                                    $seri_sayisi=count((is_countable($seri_bilgileri)?$seri_bilgileri:[]));  
                                
                
                                        ?>
                    <li>
                        <div class="collapsible-header center">

                            <div class="col s4"><?php echo $antrenman_no ?></div>
                            <div class="col s4"><?php echo $tarih ?></div>
                            <div class="col s4"><?php echo $toplam_puan ?></div>

                        </div>

                        <div class="collapsible-body center" style="background-color:#e0f2f1  ">
                            <table>
                                <!-- PUAN DETAY-->
                                <thead>
                                    <tr>
                                        <th data-field="seri">Seri</th>
                                        <th data-field="1">1. Ok</th>
                                        <th data-field="2">2. Ok</th>
                                        <th data-field="3">3. Ok</th>
                                        <!-- <th data-field="3">S.T</th> -->

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 

                                                            if($seri_sayisi!=0){
                                                                for($j=0 ; $j<$seri_sayisi ; $j++){ 

                                                                    $seri = $seri_bilgileri[$j]; 
                                                                    $seri_no=  $seri['seri_no'];
                                                                    $ok_1= $seri['ok_1'];
                                                                    $ok_2= $seri['ok_2'];
                                                                    $ok_3= $seri['ok_3'];
                                                                    $seri_toplam= $seri['seri_toplam'];

                                                        ?>
                                    <tr>
                                        <td data-field="1"><?php echo $seri_no ?></td>
                                        <td data-field="2"><?php echo $ok_1 ?></td>
                                        <td data-field="3"><?php echo $ok_2 ?></td>
                                        <td data-field="3"><?php echo $ok_3 ?></td>
                                        <!-- <td data-field="4"><?php echo $seri_toplam ?></td> -->

                                    </tr>

                                    <?php } } ?>


                                </tbody>


                            </table>

                        </div>
                    </li>

                    <?php } }?>

                </ul>



                <br>

                <div class="fixed-action-btn">
                    <a class="btn-floating btn-large teal">
                        <i class="large material-icons">menu</i>
                    </a>
                    <ul>
                        <li><a class="btn-floating orange modal-trigger" id="puan_duzenle_buton" href="#">
                                <i class="material-icons">edit</i></a>Puan Düzenle</li>
                    </ul>
                </div>
                <!-- <center>
                            <div class="col-sm-12 col-md-2 ">
                                <a class=" waves-light btn green" id="puan_duzenle_buton" href="#">Düzenle</a>
                            </div>
                        </center> -->
                <br>

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
        

    });

    var sporcu_bilgileri_listele = function() {
       // var sporcu_no = $("#sporcu_no").val();
        var sporcu_no = '<?php echo $sporcu_no ;?>';
        var sporcu_bilgileri_veri = {
            "sporcu_no": sporcu_no
        };

        var json_string_sporcu_bilgileri = JSON.stringify(sporcu_bilgileri_veri);

        $.ajax({
            url: 'services/sporcu_bilgi_getir_servis.php',
            type: 'POST',
            data: json_string_sporcu_bilgileri,
            contentType: 'application/json',
            success: function(cevap) {

                var kisisel_bilgi_tablo = `         
                
                        <table class="striped">                     
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
                                    <td> Ad Soyad :</td>
                                    <td>${cevap.ad + " " + cevap.soyad }</td>

                                </tr>
                                <tr>

                                    <td style="text-align:center"><i class="material-icons">assignment_ind</i></td>
                                    <td> TC No :</td>
                                    <td>${cevap.tc_no}</td>
                            
                                </tr>
                                <tr>

                                    <td style="text-align:center"><i class="material-icons">wc</i></td>
                                    <td> Cinsiyet :</td>
                                    <td>${cevap.cinsiyet }</td>
                        
                                </tr>
                                <tr>

                                    <td style="text-align:center"><i class="material-icons">cake</i></td>
                                    <td> Doğum Tarihi :</td>
                                    <td>${cevap.dogun_tarihi }</td>
                            
                                </tr>

                                <tr>

                                    <td style="text-align:center"><i class="material-icons">phone</i></td>
                                    <td> Tel No :</td>
                                    <td>${cevap.tel_no  }</td>
                                
                                </tr>

                            </tbody>
                        </table> 
                `;

                var yay_bilgi_tablo = `      
                    <table class="striped" > 
                            
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
                                    <td> Yay Kategori:</td>
                                    <td>${cevap.kategori}</td>

                                </tr>
                                <tr>

                                    <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                    <td> Ebat:</td>
                                    <td>${cevap.ebat}</td>

                                </tr>
                                <tr>

                                    <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                    <td> Çekiş Ağırlığı:</td>
                                    <td>${cevap.cekis_agirligi}</td>

                                </tr>
                                <tr>

                                    <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                    <td> Yay Sertliği:</td>
                                    <td>${cevap.yay_sertligi}</td>

                                </tr>

                                <tr>

                                    <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                    <td> Handle:</td>
                                    <td>${cevap.handle}</td>

                                </tr>
                                <tr>

                                    <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                    <td> Limp:</td>
                                    <td>${cevap.limp}</td>

                                </tr>
                                <tr>

                                    <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                    <td> Kiriş Yüksekliği:</td>
                                    <td>${cevap.kiris_yuksekligi}</td>

                                </tr>
                                <tr>

                                    <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                    <td> Berger:</td>
                                    <td>${cevap.berger}</td>

                                </tr>
                                <tr>

                                    <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                    <td> Kliker:</td>
                                    <td>${cevap.kliker}</td>

                                </tr>

                                <tr>

                                    <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                    <td> Stabilizör:</td>
                                    <td>${cevap.stabilizer}</td>

                                </tr>
                                <tr>

                                    <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                    <td> Tiller:</td>
                                    <td>${cevap.tiller}</td>

                                </tr>


                                <tr>

                                    <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                    <td> Nişangah:</td>
                                    <td>${cevap.nisangah}</td>

                                </tr>

                                <tr>

                                    <td style="text-align:center"><i class="material-icons"> track_changes </i></td>
                                    <td> Atış Mesafesi:</td>
                                    <td>${cevap.atis_mesafesi}</td>

                                </tr>

                                <tr>

                                    <td style="text-align:center"><i class="material-icons"> comment </i>
                                    </td>
                                    <td>Notlar:</td>
                                    <td>${cevap.yay_notlar}</td>

                                </tr>



                            </tbody>
                        </table>
                `;

                var ok_bilgi_tablo = `
                    <table class="striped " >    
                        
                        <thead>

                            <tr>
                                <th data-field="1"></th>
                                <th data-field="2"></th>
                                <th data-field="3"></th>

                            </tr>
                        </thead>

                        <tbody>

                            <tr>

                                <td style="text-align:center"><i class="material-icons"> trending_flat </i></td>
                                <td> Ok Sayısı:</td>
                                <td>${cevap.ok_sayisi}</td>

                            </tr>
                            <tr>

                                <td style="text-align:center"><i class="material-icons"> trending_flat </i></td>
                                <td> Ok Numarası:</td>
                                <td>${cevap.ok_numarasi}</td>

                            </tr>
                            <tr>

                                <td style="text-align:center"><i class="material-icons"> trending_flat </i></td>
                                <td> Uzunluk:</td>
                                <td>${cevap.uzunluk}</td>

                            </tr>
                            <tr>

                                <td style="text-align:center"><i class="material-icons"> trending_flat </i></td>
                                <td> Malzeme:</td>
                                <td>${cevap.malzeme}</td>

                            </tr>
                            <tr>

                                <td style="text-align:center"><i class="material-icons"> trending_flat </i></td>
                                <td> Sapma:</td>
                                <td>${cevap.sapma}</td>

                            </tr>
                            <tr>

                                <td style="text-align:center"><i class="material-icons"> trending_flat </i></td>
                                <td> Çap:</td>
                                <td>${cevap.cap}</td>

                            </tr>
                            <tr>

                                <td style="text-align:center"><i class="material-icons"> trending_flat </i></td>
                                <td> Ağırlık:</td>
                                <td>${cevap.agirlik}</td>

                            </tr>
                            <tr>

                                <td style="text-align:center"><i class="material-icons"> trending_flat </i></td>
                                <td> Uç Ağırlığı:</td>
                                <td>${cevap.uc_agirligi}</td>

                            </tr>
                            <tr>

                                <td style="text-align:center"><i class="material-icons"> trending_flat </i></td>
                                <td> Tüy:</td>
                                <td>${cevap.tuy}</td>

                            </tr>
                            <tr>

                                <td style="text-align:center"><i class="material-icons"> trending_flat </i></td>
                                <td> Arkalık:</td>
                                <td>${cevap.arkalik}</td>

                            </tr>
                            <tr>

                                <td style="text-align:center"><i class="material-icons"> straighten </i></td>
                                <td> Kol Boyu:</td>
                                <td>${cevap.kol_boyu}</td>

                            </tr>

                            <tr>

                                <td style="text-align:center"><i class="material-icons"> comment </i>
                                </td>
                                <td> Notlar:</td>
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
        var sporcu_no = '<?php echo $sporcu_no ;?>';
        var sporcu_yarismalari_veri = {
            "sporcu_no": sporcu_no
        };

        var json_string_yarisma_bilgileri = JSON.stringify(sporcu_yarismalari_veri);

        $.ajax({
            url: 'services/yarisma_listele_servis.php',
            type: 'POST',
            data: json_string_yarisma_bilgileri,
            contentType: 'application/json',
            success: function(cevap) {

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
                console.log(cevap);
            },
            error: function(error) {

                console.log(error);
            }

        });     
    }

    var sporcu_sil = function() {
            var sporcu_no = $("#sporcu_no").val();

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


</script>