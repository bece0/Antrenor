<?php 
    include 'includes/head.php';
    include 'includes/nav.php';
    
    include 'modals/aidat_duzenle_modal.php';

    if(!$kullanici_giris_yapti_mi){
        header('Location: login.php'); 
   }

    $antrenor_id=  $_SESSION["kullanici_id"];
   
    $gosterilen_yil =  $_GET["sene"]; //var_dump( $simdiki_yil);
    $gecen_yil = (int)$gosterilen_yil-1;  //var_dump( $gecen_yil);

?>

<div class="container">
    <br>

    <div class="row">
        <div class="col s12">

            <section class="jumbotron text-center">

                <!-- Başlık -->
                <center>
                    <h4 class="jumbotron-heading">
                        <a class="btn-floating btn-medium  waves-light orange <?php if ($gosterilen_yil <= date("Y")-1){?> disabled <?php }?> "
                            href="aidat.php?sene=<?php echo $gecen_yil ?>"><i
                                class="material-icons">navigate_before</i></a>
                        <?php echo $_GET["sene"] ?> MALZEME ÜCRET TABLOSU
                        <a class="btn-floating btn-medium   waves-light orange <?php if ($gosterilen_yil >= date("Y")){?> disabled <?php }?>"
                            href="aidat.php?sene=<?php echo $yil ?>"><i class="material-icons">navigate_next</i></a>
                    </h4>
                </center>
                <br>

                <input type="hidden" id="antrenor_id" id="antrenor_id" value="<?php echo $antrenor_id ?>" />
                <input type="hidden" id="gosterilen_yil" id="gosterilen_yil" value="<?php echo $gosterilen_yil ?>" />

                <div class="col s12">
                    <!-- Aidat Tablosu -->
                    <table class="table table-bordered highlight">
                        <thead>
                            <tr>               
                                <th>Ad Soyad</th>
                                <th>Oca</th>
                                <th>Şub</th>
                                <th>Mar</th>
                                <th>Nis</th>
                                <th>May</th>
                                <th>Haz</th>
                                <th>Tem</th>
                                <th>Ağu</th>
                                <th>Eyl</th>
                                <th>Eki</th>
                                <th>Kas</th>
                                <th>Ara</th>
                            </tr>
                        </thead>
                        <tbody id="aidat_tablosu"> </tbody>

                    </table>
                </div>

            </section>

            <br><br>
        </div>
    </div>
</div>
<br>

<?php   //  include 'footer.php';?>

<script>

    var aidatlari_getir = function(){
        var antrenor_id = $("#antrenor_id").val();
        var gosterilen_yil = $("#gosterilen_yil").val();

        var veri = {
            "antrenor_id": antrenor_id,
            "gosterilen_yil": gosterilen_yil,
        };

        var json_string = JSON.stringify(veri);

        $.ajax({
            url: 'services/aidat_listele_servis.php',
            type: 'POST',
            data: json_string,
            contentType: 'application/json',
            success: function(response) {
                var cevap = response.data; 
                for (var i = 0; i < cevap.length; i++) {             
                    var aidat_bilgi = `<tr onclick="sporcu_aidat_getir(${(cevap[i].sporcu_no)})" id="aidat_duzenle_satir" data-sporcuno="${(cevap[i].sporcu_no)}" class="modal-trigger" href="#aidat_duzenle_modal" >                                                                  
                                            <input type="hidden" id="sporcu_no" value="${(cevap[i].sporcu_no)}" />                                                                
                                            <td>${cevap[i].ad + " " + cevap[i].soyad  }</td>
                                            <td>${(cevap[i].ocak=="1") ? "<i class='material-icons'>check</i>" : "<i class='material-icons'>remove</i>"}</td>
                                            <td>${(cevap[i].subat=="1") ? "<i class='material-icons'>check</i>" : "<i class='material-icons'>remove</i>"}</td>
                                            <td>${(cevap[i].mart=="1") ? "<i class='material-icons'>check</i>" : "<i class='material-icons'>remove</i>"}</td>
                                            <td>${(cevap[i].nisan=="1") ? "<i class='material-icons'>check</i>" : "<i class='material-icons'>remove</i>"}</td>
                                            <td>${(cevap[i].mayis=="1") ? "<i class='material-icons'>check</i>" : "<i class='material-icons'>remove</i>"}</td>
                                            <td>${(cevap[i].haziran=="1") ? "<i class='material-icons'>check</i>" : "<i class='material-icons'>remove</i>"}</td>
                                            <td>${(cevap[i].temmuz=="1") ? "<i class='material-icons'>check</i>" : "<i class='material-icons'>remove</i>"}</td>
                                            <td>${(cevap[i].agustos=="1") ? "<i class='material-icons'>check</i>" : "<i class='material-icons'>remove</i>"}</td>
                                            <td>${(cevap[i].eylul=="1") ? "<i class='material-icons'>check</i>" : "<i class='material-icons'>remove</i>"}</td>
                                            <td>${(cevap[i].ekim=="1") ? "<i class='material-icons'>check</i>" : "<i class='material-icons'>remove</i>"}</td>
                                            <td>${(cevap[i].kasim=="1") ? "<i class='material-icons'>check</i>" : "<i class='material-icons'>remove</i>"}</td>
                                            <td>${(cevap[i].aralik=="1") ? "<i class='material-icons'>check</i>" : "<i class='material-icons'>remove</i>"}</td>                        
                                        </tr>                  
                    `;

                    $("#aidat_tablosu").append(aidat_bilgi);
                }
                console.log(cevap);
            },
            error: function(error) {
                console.log(error);
            }
        });
    }

    $(document).ready(function() {
        aidatlari_getir();

    });

  
</script>