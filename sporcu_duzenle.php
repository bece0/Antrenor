<?php 
    include 'head.php';
    include 'nav.php';
    //include 'database/database.php';

    if(!$kullanici_giris_yapti_mi){
       header('Location: login.php'); 
      
   }

    $sporcu_bilgileri = array(); 
    $sporcu_no =  $_GET["sporcu"]; //var_dump($sporcu_no);
    $sporcu_bilgileri= SporcuBilgileriGetir($sporcu_no); //var_dump($sporcu_bilgileri);

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

                            </tbody>
                        </table>

                        <br>

                        <h5 style="text-align:center"> Teknik Bilgiler </h5>
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
                                    <td style="text-align:center"><i class="material-icons"> dns </i></td>
                                    <td> Yaş grubu:</td>
                                    <td> <input value="<?php echo $sporcu_bilgileri["kategori"] ?>" name="yas_grubu"
                                            type="text" class="validate"> </td>

                                </tr>
                                <tr>
                                    <td style="text-align:center"><i class="material-icons"> dns </i></td>
                                    <td> Kategori:</td>
                                    <td> <input value="<?php echo $sporcu_bilgileri["kategori"] ?>" name="kategori"
                                            type="text" class="validate"> </td>

                                </tr>
                                <tr>

                                    <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                    <td> Yay Bilgisi:</td>
                                    <td> <input value="<?php echo $sporcu_bilgileri["yay"] ?>" name="yay" type="text"
                                            class="validate"> </td>
                                </tr>
                                <tr>

                                    <td style="text-align:center"><i class="material-icons"> looks </i></td>
                                    <td> Yay Sertliği:</td>
                                    <td> <input value="<?php echo $sporcu_bilgileri["yay_sertligi"] ?>"
                                            name="yay_sertligi" type="text" class="validate"> </td>
                                </tr>
                                <tr>

                                    <td style="text-align:center"><i class="material-icons"> swap_horiz </i></td>
                                    <td> Ok Bilgisi:</td>
                                    <td> <input value="<?php echo $sporcu_bilgileri["ok"] ?>" name="ok" type="text"
                                            class="validate"> </td>
                                </tr>
                                <tr>

                                    <td style="text-align:center"><i class="material-icons"> straighten </i></td>
                                    <td> Kol Boyu:</td>
                                    <td> <input value="<?php echo $sporcu_bilgileri["kol_boyu"] ?>" name="kol_boyu"
                                            type="text" class="validate"> </td>
                                </tr>

                                <tr>

                                    <td style="text-align:center"><i class="material-icons"> track_changes </i> </td>
                                    <td>Atış Mesafesi:</td>
                                    <td> <input value="<?php echo $sporcu_bilgileri["atis_mesafesi"] ?>"
                                            name="atis_mesafesi" type="text" class="validate"> </td>
                                </tr>

                            </tbody>
                        </table>
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

</div>

<script>
$(function() {

    $('#bilgi_duzenle_buton').on("click", function() {

        swal({
            title: "Bilgiler güncellendi!",
            icon: "success",
        });

    })


})
</script>