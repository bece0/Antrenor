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
                    <h5 style= "text-align:center"> Kişisel Bilgiler</h5>
                    <table>
                        <thead>
                            <tr>
                                <th data-field="1"></th>
                                <th data-field="2"></th>
                                <th data-field="3"></th>
               
                            </tr>
                        </thead>

                        <tbody>
                            <tr >
                                <td style= "text-align:center"><i class="material-icons">account_circle</i></td>
                                <td > Ad Soyad :</td>
                                <td> <input value="<?php echo $sporcu_bilgileri["ad"]." ".$sporcu_bilgileri["soyad"] ?>" id="adsoyad" type="text" class="validate"> </td>

                            </tr>
                            <tr>
                              
                                <td style= "text-align:center"><i class="material-icons">wc</i></td>
                                <td> Cinsiyet :</td>
                                <td> <input value="<?php echo $sporcu_bilgileri["cinsiyet"] ?>" id="cinsiyet" type="text" class="validate"> </td>

                            </tr>
                            <tr>
                              
                                <td style= "text-align:center"><i class="material-icons">cake</i></td>
                                <td> Doğum Tarihi :</td>
                              
                                <td> <input value="<?php echo $sporcu_bilgileri["dogum_tarihi"] ?>" id="dogum_tarihi" type="text" class="validate"> </td>

                            </tr>

                            <tr>
                              
                                <td style= "text-align:center"><i class="material-icons">phone</i></td>
                                <td> Tel No :</td>
                                <td> <input value="<?php echo $sporcu_bilgileri["tel_no"] ?>" id="tel_no" type="text" class="validate"> </td>
                       
                            </tr>

                        </tbody>
                    </table>

                    <br>

                    <h5 style= "text-align:center"> Teknik Bilgiler </h5>
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
                                <td style= "text-align:center"><i class="material-icons" > dns </i></td>
                                <td> Kategori:</td>
                                <td> <input value="<?php echo $sporcu_bilgileri["kategori"] ?>" id="kategori" type="text" class="validate"> </td>
                       
                            </tr>
                            <tr>
                             
                                <td style= "text-align:center"><i class="material-icons"> looks </i></td>
                                <td> Yay Bilgisi:</td>
                                <td> <input value="<?php echo $sporcu_bilgileri["yay"] ?>" id="yay" type="text" class="validate"> </td>
                            </tr>
                            <tr>
                               
                                <td style= "text-align:center"><i class="material-icons"> looks </i></td>
                                <td> Yay Sertliği:</td>
                                <td> <input value="<?php echo $sporcu_bilgileri["yay_sertligi"] ?>" id="yay_sertligi" type="text" class="validate"> </td>
                            </tr>
                            <tr>
                            
                                <td style= "text-align:center"><i class="material-icons"> swap_horiz </i></td>
                                <td> Ok Bilgisi:</td>
                                <td> <input value="<?php echo $sporcu_bilgileri["ok"] ?>" id="ok" type="text" class="validate"> </td>
                            </tr>
                            <tr>
                          
                                <td style= "text-align:center"><i class="material-icons"> straighten </i></td>
                                <td> Kol Boyu:</td>
                                <td> <input value="<?php echo $sporcu_bilgileri["kol_boyu"] ?>" id="kategori" type="text" class="validate"> </td>
                            </tr>

                            <tr>
                          
                                <td style= "text-align:center"><i class="material-icons"> track_changes </i> </td>
                                <td>Atış Mesafesi:</td>
                                <td> <input value="<?php echo $sporcu_bilgileri["atis_mesafesi"] ?>" id="atis_mesafesi" type="text" class="validate"> </td>
                            </tr>

                        </tbody>
                    </table>
                    <br>
                    <center>
                        <div class="col-sm-12 col-md-2 ">
                            <a class=" waves-light btn green" id="bilgi_duzenle_buton">TAMAMLA</a>
                        </div>
                    </center>
                    <br>

                </div>
            </div>

        </div>  <!-- bilgiler -->


      
        </div>
    </div>

</div>

<script>
$(function() {

    $('#bilgi_duzenle_buton').on("click", function() {

        alert("DÜZENLENDİ!");

    })


})
</script>