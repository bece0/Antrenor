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

    $yarisma_bilgileri = array();
    $yarisma_bilgileri = SporcuYarismalariGetir($sporcu_no); //var_dump($yarisma_bilgileri);

?>

<div class="container">
    <br>

    <div class="row">
        <div class="col s12">
            <ul class="tabs">
                <li class="tab col s3"><a class="active" href="#bilgiler">Bilgiler</a></li>
                <li class="tab col s3 "><a href="#yarisma">Yarışma Dereceleri</a></li>
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
                    <table>
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

                    <table>
                        <thead>
                            <h5 style="text-align:center"> Teknik Bilgiler </h5>
                            <tr>
                                <th data-field="1"></th>
                                <th data-field="2"></th>
                                <th data-field="3"></th>

                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td style="text-align:center"><i class="material-icons"> dns </i></td>
                                <td> Kategori:</td>
                                <td><?php echo $sporcu_bilgileri["kategori"] ?></td>
                                <!-- <td>Edit</td> -->
                            </tr>
                            <tr>

                                <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                <td> Yay Bilgisi:</td>
                                <td><?php echo $sporcu_bilgileri["yay"] ?></td>
                                <!-- <td>Edit</td> -->
                            </tr>
                            <tr>

                                <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                <td> Yay Sertliği:</td>
                                <td><?php echo $sporcu_bilgileri["yay_sertligi"] ?></td>
                                <!-- <td>Edit</td> -->
                            </tr>
                            <tr>

                                <td style="text-align:center"><i class="material-icons"> swap_horiz </i></td>
                                <td> Ok Bilgisi:</td>
                                <td><?php echo $sporcu_bilgileri["ok"] ?></td>
                                <!-- <td>Edit</td> -->
                            </tr>
                            <tr>

                                <td style="text-align:center"><i class="material-icons"> straighten </i></td>
                                <td> Kol Boyu:</td>
                                <td><?php echo $sporcu_bilgileri["kol_boyu"] ?></td>
                                <!-- <td>Edit</td> -->
                            </tr>

                            <tr>

                                <td style="text-align:center"><i class="material-icons"> track_changes </i> </td>
                                <td>Atış Mesafesi:</td>
                                <td><?php echo $sporcu_bilgileri["atis_mesafesi"] ?></td>
                                <!-- <td>Edit</td> -->
                            </tr>

                        </tbody>
                    </table>
                    <br>
                    <center>
                        <div class="col-sm-12 col-md-2 ">
                            <a class=" waves-light btn green" id="bilgi_duzenle_buton"
                                href="sporcu_duzenle.php?sporcu=<?php echo $sporcu_no ?>">Düzenle</a>
                        </div>
                    </center>
                    <br>
                    <!-- 
                    <ul class=" collection">
                            <li class="collection-header">
                                <h4>Kişisel Bilgiler</h4>
                            </li>

                            <li class="collection-item"><i class="mdi mdi-account icon-sm "></i>
                                <span class="collection-item-name">Ad Soyad :</span>
                                <span class="collection-item-detail">Begüm ÇELEBİ</span>
                                <a href="" class="collection-item-edit">Edit</a></li>
                            <li class="collection-item"><i class="mdi mdi-cake icon-sm "></i>
                                <span class="collection-item-name">Doğum Tarihi :</span>
                                <span class="collection-item-detail">14.07.1996</span>
                                <a href="" class="collection-item-edit">Edit</a></li>
                            <li class="collection-item"><i class="mdi mdi-account icon-sm "></i>
                                <span class="collection-item-name">Cinsiyet:</span><span
                                    class="collection-item-detail">Kadın</span>
                                <a href="" class="collection-item-edit">Edit</a></li>
                            <li class="collection-item"><i class="mdi mdi-phone icon-sm "></i>
                                <span class="collection-item-name">Tel No :</span><span
                                    class="collection-item-detail">+9779861106179</span>
                                <a href="" class="collection-item-edit">Edit</a></li></span>

                            <li class="collection-header">
                                <h4>Teknik Bilgiler</h4>
                            </li>

                            <li class="collection-items"><i class="mdi mdi-looks "></i>
                                <span class="collection-item-name"> Yay Bilgisi:</span>
                                <span class="collection-item-detail">Hoyt bilmem ne :d</span>
                                <a href="" class="collection-item-edit">Edit</a></li>
                            <li class="collection-items"><i class="mdi mdi-chevron-double-right "></i>
                                <span class="collection-item-name"> Ok Bilgisi:</span>
                                <span class="collection-item-detail"> x10 - 800 </span>
                                <a href="" class="collection-item-edit">Edit</a></li>
                            <li class="collection-items"><i class="mdi mdi-ruler "></i>
                                <span class="collection-item-name">Kol Boyu:</span>
                                <span class="collection-item-detail"> 35 cm</span>
                                <a href="" class="-collectionut-item-edit">Edit</a></li>
                            <li class="collection-items"><i class="mdi mdi-weight-kilogram "></i>
                                <span class="collection-item-name">Yay Sertliği</span>
                                <span class="collection-item-detail">28"</span>
                                <a href="" class="collection-item-edit">Edit</a></li>
                            <li class="collection-items"><i class="mdi mdi-bullseye"></i>
                                <span class="collection-item-name">AtışMesafesi:</span>
                                <span class="collection-item-detail">70 m</span>
                                <a href="" class="collection-item-edit">Edit</a></li>

                            </ul> -->

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
                          $yarisma_sayisi=count($yarisma_bilgileri);  

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
                        <?php } ?>

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
                <h5 style="text-align:center">Puan Durumu</h5>
                <table class="table table-striped  table-hover highlight ">
                    <thead>
                        <tr>
                            <th scope="col"> Antrenman No </th>
                            <th scope="col"> Tarih </th>
                            <th scope="col"> Toplam Puan </th>

                        </tr>
                    </thead>
                    <tbody>


                        <tr>
                            <td>1</td>
                            <td>19.03.2021</td>
                            <td>250</td>

                        </tr>
                        <tr>
                            <td>2</td>
                            <td>20.03.2021</td>
                            <td>260</td>

                        </tr>



                    </tbody>
                </table>
                <br>
                <center>
                    <div class="col-sm-12 col-md-2 ">
                        <a class=" waves-light btn green" id="bilgi_duzenle_buton"
                            href="yarisma_sonucu.php?sporcu=<?php echo $sporcu_no ?>">Düzenle</a>
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

<script>
$(function() {



})
</script>