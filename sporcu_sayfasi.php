<?php 
    include 'head.php';
    include 'nav.php';
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
        <div class="col s12">
            <ul class="tabs">
                <li class="tab col s3"><a class="active" href="#bilgiler">Bilgiler</a></li>
                <li class="tab col s3  "><a href="#yarisma">Yarışma Dereceleri</a></li>
                <li class="tab col s3"><a href="#puan">Puan Durumu</a></li>
                <li class="tab col s3 disabled"><a href="#antrenman">Antrenman Programı</a></li>

            </ul>
        </div>

        <div id="bilgiler" class="col s12">
            <br>

            <div class="card row mx-2 mb-3">

                <div class="card-body">
                    <br>
                    <h5 style="text-align:center"> Kişisel Bilgiler</h5>
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
                                <td><?php echo $sporcu_bilgileri["ad"]." ".$sporcu_bilgileri["soyad"] ?></td>
                                <!-- <td>Edit</td> -->
                            </tr>
                            <tr>

                                <td style="text-align:center"><i class="material-icons">assignment_ind</i></td>
                                <td> TC No :</td>
                                <td><?php echo $sporcu_bilgileri["tc_no"] ?></td>
                                <!-- <td>Edit</td> -->
                            </tr>
                            <tr>

                                <td style="text-align:center"><i class="material-icons">wc</i></td>
                                <td> Cinsiyet :</td>
                                <td><?php echo $sporcu_bilgileri["cinsiyet"] ?></td>
                                <!-- <td>Edit</td> -->
                            </tr>
                            <tr>

                                <td style="text-align:center"><i class="material-icons">cake</i></td>
                                <td> Doğum Tarihi :</td>
                                <td><?php echo $sporcu_bilgileri["dogum_tarihi"] ?></td>
                                <!-- <td>Edit</td> -->
                            </tr>

                            <tr>

                                <td style="text-align:center"><i class="material-icons">phone</i></td>
                                <td> Tel No :</td>
                                <td><?php echo $sporcu_bilgileri["tel_no"] ?></td>
                                <!-- <td>Edit</td> -->
                            </tr>

                        </tbody>
                    </table>


                    <br>
                    <h5 style="text-align:center"> Teknik Bilgiler </h5>

                    <div class="row">
                        <div class="col s6">

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
                                        <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                        <td> Yay Kategori:</td>
                                        <td><?php echo $sporcu_bilgileri["kategori"] ?></td>

                                    </tr>
                                    <tr>

                                        <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                        <td> Ebat:</td>
                                        <td><?php echo $yay_bilgileri["ebat"] ?></td>

                                    </tr>
                                    <tr>

                                        <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                        <td> Çekiş Ağırlığı:</td>
                                        <td><?php echo $yay_bilgileri["cekis_agirligi"] ?></td>

                                    </tr>
                                    <tr>

                                        <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                        <td> Yay Sertliği:</td>
                                        <td><?php echo $yay_bilgileri["yay_sertligi"] ?></td>

                                    </tr>

                                    <tr>

                                        <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                        <td> Handle:</td>
                                        <td><?php echo $yay_bilgileri["handle"] ?></td>

                                    </tr>
                                    <tr>

                                        <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                        <td> Limp:</td>
                                        <td><?php echo $yay_bilgileri["limp"] ?></td>

                                    </tr>
                                    <tr>

                                        <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                        <td> Kiriş Yüksekliği:</td>
                                        <td><?php echo $yay_bilgileri["kiris_yuksekligi"] ?></td>

                                    </tr>
                                    <tr>

                                        <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                        <td> Berger:</td>
                                        <td><?php echo $yay_bilgileri["berger"] ?></td>

                                    </tr>
                                    <tr>

                                        <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                        <td> Kliker:</td>
                                        <td><?php echo $yay_bilgileri["kliker"] ?></td>

                                    </tr>

                                    <tr>

                                        <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                        <td> Stabilizör:</td>
                                        <td><?php echo $yay_bilgileri["stabilizer"] ?></td>

                                    </tr>
                                    <tr>

                                        <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                        <td> Tiller:</td>
                                        <td><?php echo $yay_bilgileri["tiller"] ?></td>

                                    </tr>


                                    <tr>

                                        <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                        <td> Nişangah:</td>
                                        <td><?php echo $yay_bilgileri["nisangah"] ?></td>

                                    </tr>

                                    <tr>

                                        <td style="text-align:center"><i class="material-icons"> track_changes </i></td>
                                        <td> Atış Mesafesi:</td>
                                        <td><?php echo $yay_bilgileri["atis_mesafesi"] ?></td>

                                    </tr>

                                    <tr>

                                        <td style="text-align:center"><i class="material-icons"> comment </i>
                                        </td>
                                        <td>Notlar:</td>
                                        <td><?php echo $yay_bilgileri["yay_notlar"] ?></td>

                                    </tr>



                                </tbody>
                            </table>
                        </div>
                        <div class="col s6">

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

                                        <td style="text-align:center"><i class="material-icons"> trending_flat </i></td>
                                        <td> Ok Sayısı:</td>
                                        <td><?php echo $ok_bilgileri["ok_sayisi"] ?></td>

                                    </tr>
                                    <tr>

                                        <td style="text-align:center"><i class="material-icons"> trending_flat </i></td>
                                        <td> Ok Numarası:</td>
                                        <td><?php echo $ok_bilgileri["ok_numarasi"] ?></td>

                                    </tr>
                                    <tr>

                                        <td style="text-align:center"><i class="material-icons"> trending_flat </i></td>
                                        <td> Uzunluk:</td>
                                        <td><?php echo $ok_bilgileri["uzunluk"] ?></td>

                                    </tr>
                                    <tr>

                                        <td style="text-align:center"><i class="material-icons"> trending_flat </i></td>
                                        <td> Malzeme:</td>
                                        <td><?php echo $ok_bilgileri["malzeme"] ?></td>

                                    </tr>
                                    <tr>

                                        <td style="text-align:center"><i class="material-icons"> trending_flat </i></td>
                                        <td> Sapma:</td>
                                        <td><?php echo $ok_bilgileri["sapma"] ?></td>

                                    </tr>
                                    <tr>

                                        <td style="text-align:center"><i class="material-icons"> trending_flat </i></td>
                                        <td> Çap:</td>
                                        <td><?php echo $ok_bilgileri["cap"] ?></td>

                                    </tr>
                                    <tr>

                                        <td style="text-align:center"><i class="material-icons"> trending_flat </i></td>
                                        <td> Ağırlık:</td>
                                        <td><?php echo $ok_bilgileri["agirlik"] ?></td>

                                    </tr>
                                    <tr>

                                        <td style="text-align:center"><i class="material-icons"> trending_flat </i></td>
                                        <td> Uç Ağırlığı:</td>
                                        <td><?php echo $ok_bilgileri["uc_agirligi"] ?></td>

                                    </tr>
                                    <tr>

                                        <td style="text-align:center"><i class="material-icons"> trending_flat </i></td>
                                        <td> Tüy:</td>
                                        <td><?php echo $ok_bilgileri["tuy"] ?></td>

                                    </tr>
                                    <tr>

                                        <td style="text-align:center"><i class="material-icons"> trending_flat </i></td>
                                        <td> Arkalık:</td>
                                        <td><?php echo $ok_bilgileri["arkalik"] ?></td>

                                    </tr>
                                    <tr>

                                        <td style="text-align:center"><i class="material-icons"> straighten </i></td>
                                        <td> Kol Boyu:</td>
                                        <td><?php echo $ok_bilgileri["kol_boyu"] ?></td>

                                    </tr>

                                    <tr>

                                        <td style="text-align:center"><i class="material-icons"> comment </i>
                                        </td>
                                        <td> Notlar:</td>
                                        <td><?php echo $ok_bilgileri["ok_notlar"] ?></td>

                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <br>
                    <center>

                        <a class=" waves-light btn green " id="bilgi_duzenle_buton"
                            href="sporcu_duzenle_modal.php?sporcu=<?php echo $sporcu_no ?>">Düzenle</a>

                        <a class=" waves-light btn red " id="sporcu_sil_buton"
                            href="action/sporcu_sil_action.php?sporcu=<?php echo $sporcu_no ?>">Sporcu Sil</a>

                    </center>
                    <br>


                </div>
            </div>

        </div> <!-- bilgiler -->

        <div id="yarisma" class="col s12">
            <br>
            <div class="card row mx-2 mb-3">
                <br>
                <h5 style="text-align:center"> Yarışma Dereceleri </h5>
                <table class="table table-striped  table-hover highlight ">
                    <thead>
                        <tr>

                            <th scope="col"> Yarışma Adı </th>
                            <th scope="col"> Tarih </th>
                            <th scope="col"> Sıralama </th>
                            <th scope="col">Madalya</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                        
                        //  $yarisma_sayisi=count($yarisma_bilgileri); 
                          $yarisma_sayisi=count((is_countable($yarisma_bilgileri)?$yarisma_bilgileri:[])); 

                          if($yarisma_sayisi!=0){
                            for($i=0 ; $i<$yarisma_sayisi ; $i++){ 

                                $yarisma = $yarisma_bilgileri[$i]; //var_dump($yarisma);
                                $yarisma_adi=  $yarisma['yarisma_adi'];
                                $tarih= $yarisma['tarih'];
                                $siralama= $yarisma['siralama'];
                                $madalya= $yarisma['madalya']; 

                    
                                            
                                    ?>
                        <tr>
                            <td><?php echo $yarisma_adi  ?></td>
                            <td><?php echo $tarih  ?></td>
                            <td><?php echo $siralama  ?></td>
                            <td><?php echo $madalya  ?></td>


                        </tr>
                        <?php } }else{ ?>
                        <tr>
                            <td><i class="material-icons">remove</i></td>
                            <td><i class="material-icons">remove</i></td>
                            <td><i class="material-icons">remove</i></td>
                            <td><i class="material-icons">remove</i></td>
                        </tr>
                        <?php  } ?>
                    </tbody>
                </table>
                <br>
                <center>
                    <div class="col-sm-12 col-md-2 ">
                        <a class=" waves-light btn green" id="yarisma_ekle_buton"
                            href="yarisma_ekle.php?sporcu=<?php echo $sporcu_no ?>">Ekle</a>
                    </div>
                </center>
                <br>

            </div>

        </div> <!-- yarisma -->

        <div id="puan" class="col s12">
            <br>
            <div class="card row mx-2 mb-3">
                <br>
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
                <center>
                    <div class="col-sm-12 col-md-2 ">
                        <a class=" waves-light btn green" id="puan_duzenle_buton" href="#">Düzenle</a>
                    </div>
                </center>
                <br>

                <br>
            </div>
        </div> <!-- puan -->

        <div id="antrenman" class="col s12">
            <br>
            <div class="card row mx-2 mb-3">
                <br>
                <h5 style="text-align:center"> Antrenman Programı </h5>
                <br>
            </div>
        </div> <!-- antrenman -->
    </div>

</div>

<?php     include 'footer.php';?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems, {
        accordion: false
    });
});
</script>