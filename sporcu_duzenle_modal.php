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


        <div id="bilgiler" class="col s12">
            <br>

            <div class="card row mx-2 mb-3">

                <div class="card-body">
                    <br>
                    <form class="form" action="action/sporcu_duzenle_action.php" method="post">
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
                                    <td> Ad :</td>
                                    <td> <input value="<?php echo $sporcu_bilgileri["ad"]?>" name="ad" type="text"
                                            class="validate"> </td>

                                </tr>
                                <tr>
                                    <td style="text-align:center"><i class="material-icons">account_circle</i></td>
                                    <td> Soyad :</td>
                                    <td> <input value="<?php echo $sporcu_bilgileri["soyad"] ?>" name="soyad"
                                            type="text" class="validate"> </td>

                                </tr>
                                <tr>
                                    <td style="text-align:center"><i class="material-icons">account_circle</i></td>
                                    <td> TC :</td>
                                    <td> <input value="<?php echo $sporcu_bilgileri["tc_no"] ?>" name="tc_no"
                                            type="text" class="validate"> </td>

                                </tr>
                                <tr>

                                    <td style="text-align:center"><i class="material-icons">wc</i></td>
                                    <td> Cinsiyet :</td>
                                    <td> <input value="<?php echo $sporcu_bilgileri["cinsiyet"] ?>" name="cinsiyet"
                                            type="text" class="validate"> </td>

                                </tr>
                                <tr>

                                    <td style="text-align:center"><i class="material-icons">cake</i></td>
                                    <td> Doğum Tarihi :</td>

                                    <td> <input value="<?php echo $sporcu_bilgileri["dogum_tarihi"] ?>"
                                            name="dogum_tarihi" type="text" class="validate"> </td>

                                </tr>

                                <tr>

                                    <td style="text-align:center"><i class="material-icons">phone</i></td>
                                    <td> Tel No :</td>
                                    <td> <input value="<?php echo $sporcu_bilgileri["tel_no"] ?>" name="tel_no"
                                            type="text" class="validate"> </td>

                                </tr>

                                <tr>

                                    <td style="text-align:center"><i class="material-icons">dns</i></td>
                                    <td> Yaş Grubu :</td>
                                    <td> <input value="<?php echo $sporcu_bilgileri["yas_grubu"] ?>" name="yas_grubu"
                                            type="text" class="validate"> </td>

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
                                            <td> <input value="<?php echo $sporcu_bilgileri["kategori"] ?>"
                                                    name="kategori" type="text" class="validate"> </td>

                                        </tr>
                                        <tr>

                                            <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                            <td> Ebat:</td>
                                            <td> <input value="<?php echo $yay_bilgileri["ebat"] ?>" name="ebat"
                                                    type="text" class="validate"> </td>

                                        </tr>
                                        <tr>

                                            <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                            <td> Çekiş Ağırlığı:</td>
                                            <td> <input value="<?php echo $yay_bilgileri["cekis_agirligi"] ?>"
                                                    name="cekis_agirligi" type="text" class="validate"> </td>

                                        </tr>
                                        <tr>

                                            <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                            <td> Yay Sertliği:</td>
                                            <td> <input value="<?php echo $yay_bilgileri["yay_sertligi"] ?>"
                                                    name="yay_sertligi" type="text" class="validate"> </td>
                                        </tr>

                                        <tr>

                                            <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                            <td> Handle:</td>
                                            <td> <input value="<?php echo $yay_bilgileri["handle"] ?>" name="handle"
                                                    type="text" class="validate"> </td>
                                        </tr>
                                        <tr>

                                            <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                            <td> Limp:</td>
                                            <td> <input value="<?php echo $yay_bilgileri["limp"] ?>" name="limp"
                                                    type="text" class="validate"> </td>
                                        </tr>
                                        <tr>

                                            <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                            <td> Kiriş Yüksekliği:</td>
                                            <td> <input value="<?php echo $yay_bilgileri["kiris_yuksekligi"] ?>"
                                                    name="kiris_yuksekligi" type="text" class="validate"> </td>
                                        </tr>
                                        <tr>

                                            <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                            <td> Berger:</td>
                                            <td> <input value="<?php echo $yay_bilgileri["berger"] ?>" name="berger"
                                                    type="text" class="validate"> </td>
                                        </tr>
                                        <tr>

                                            <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                            <td> Kliker:</td>
                                            <td> <input value="<?php echo $yay_bilgileri["kliker"] ?>" name="kliker"
                                                    type="text" class="validate"> </td>
                                        </tr>

                                        <tr>

                                            <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                            <td> Stabilizör:</td>
                                            <td> <input value="<?php echo $yay_bilgileri["stabilizer"] ?>"
                                                    name="stabilizer" type="text" class="validate"> </td>
                                        </tr>
                                        <tr>

                                            <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                            <td> Tiller:</td>
                                            <td> <input value="<?php echo $yay_bilgileri["tiller"] ?>" name="tiller"
                                                    type="text" class="validate"> </td>
                                        </tr>


                                        <tr>

                                            <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                            <td> Nişangah:</td>
                                            <td> <input value="<?php echo $yay_bilgileri["nisangah"] ?>" name="nisangah"
                                                    type="text" class="validate"> </td>
                                        </tr>

                                        <tr>

                                            <td style="text-align:center"><i class="material-icons"> track_changes </i>
                                            </td>
                                            <td> Atış Mesafesi:</td>
                                            <td> <input value="<?php echo $yay_bilgileri["atis_mesafesi"] ?>"
                                                    name="atis_mesafesi" type="text" class="validate"> </td>
                                        </tr>

                                        <tr>

                                            <td style="text-align:center"><i class="material-icons"> comment </i></td>
                                            <td>Notlar:</td>
                                            <td> <input value="<?php echo $yay_bilgileri["yay_notlar"] ?>" name="yay_notlar"
                                                    type="text" class="validate"> </td>
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

                                            <td style="text-align:center"><i class="material-icons"> trending_flat </i>
                                            </td>
                                            <td> Ok Sayısı:</td>

                                            <td> <input value="<?php echo $ok_bilgileri["ok_sayisi"] ?>" name="ok_sayisi"
                                                    type="text" class="validate"> </td>
                                        </tr>
                                        <tr>

                                            <td style="text-align:center"><i class="material-icons"> trending_flat </i>
                                            </td>
                                            <td> Ok Numarası:</td>

                                            <td> <input value="<?php echo $ok_bilgileri["ok_numarasi"] ?>"
                                                    name="ok_numarasi" type="text" class="validate"> </td>

                                        </tr>
                                        <tr>

                                            <td style="text-align:center"><i class="material-icons"> trending_flat </i>
                                            </td>
                                            <td> Uzunluk:</td>

                                            <td> <input value="<?php echo $ok_bilgileri["uzunluk"] ?>" name="uzunluk"
                                                    type="text" class="validate"> </td>

                                        </tr>
                                        <tr>

                                            <td style="text-align:center"><i class="material-icons"> trending_flat </i>
                                            </td>
                                            <td> Malzeme:</td>

                                            <td> <input value="<?php echo $ok_bilgileri["malzeme"] ?>" name="malzeme"
                                                    type="text" class="validate"> </td>

                                        </tr>
                                        <tr>

                                            <td style="text-align:center"><i class="material-icons"> trending_flat </i>
                                            </td>
                                            <td> Sapma:</td>

                                            <td> <input value="<?php echo $ok_bilgileri["sapma"] ?>" name="sapma"
                                                    type="text" class="validate"> </td>

                                        </tr>
                                        <tr>

                                            <td style="text-align:center"><i class="material-icons"> trending_flat </i>
                                            </td>
                                            <td> Çap:</td>

                                            <td> <input value="<?php echo $ok_bilgileri["cap"] ?>" name="cap"
                                                    type="text" class="validate"> </td>

                                        </tr>
                                        <tr>

                                            <td style="text-align:center"><i class="material-icons"> trending_flat </i>
                                            </td>
                                            <td> Ağırlık:</td>

                                            <td> <input value="<?php echo $ok_bilgileri["agirlik"] ?>" name="agirlik"
                                                    type="text" class="validate"> </td>

                                        </tr>
                                        <tr>

                                            <td style="text-align:center"><i class="material-icons"> trending_flat </i>
                                            </td>
                                            <td> Uç Ağırlığı:</td>

                                            <td> <input value="<?php echo $ok_bilgileri["uc_agirligi"] ?>"
                                                    name="uc_agirligi" type="text" class="validate"> </td>

                                        </tr>
                                        <tr>

                                            <td style="text-align:center"><i class="material-icons"> trending_flat </i>
                                            </td>
                                            <td> Tüy:</td>

                                            <td> <input value="<?php echo $ok_bilgileri["tuy"] ?>" name="tuy"
                                                    type="text" class="validate"> </td>

                                        </tr>
                                        <tr>

                                            <td style="text-align:center"><i class="material-icons"> trending_flat </i>
                                            </td>
                                            <td> Arkalık:</td>

                                            <td> <input value="<?php echo $ok_bilgileri["arkalik"] ?>" name="arkalik"
                                                    type="text" class="validate"> </td>

                                        </tr>
                                        <tr>

                                            <td style="text-align:center"><i class="material-icons"> straighten </i>
                                            </td>
                                            <td> Kol Boyu:</td>

                                            <td> <input value="<?php echo $ok_bilgileri["kol_boyu"] ?>" name="kol_boyu"
                                                    type="text" class="validate"> </td>

                                        </tr>

                                        <tr>

                                            <td style="text-align:center"><i class="material-icons"> comment </i>
                                            </td>
                                            <td>Notlar:</td>

                                            <td> <input value="<?php echo $ok_bilgileri["ok_notlar"] ?>" name="ok_notlar"
                                                    type="text" class="validate"> </td>

                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <br>
                        <center>

                            <input type="hidden" id="sporcu_no" name="sporcu_no" value="<?php echo $sporcu_no ?>" />
                            <button type="submit" class="waves-light btn green" id="bilgi_duzenle_buton">TAMAMLA</a>

                        </center>
                        <br>
                    </form>



                </div>
            </div>

        </div> <!-- bilgiler -->


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