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


        <div id="yarisma" class="col s12">
            <br>

            <div class="card row mx-2 mb-3">

                <div class="card-body">
                    <br>

                    <h5 style="text-align:center"> Yarışma Bilgileri</h5>
                    <form action="action/yarisma_ekle_action.php" method="post" id="yarisma_ekle">
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
                                    <td style="text-align:center"><i class="material-icons">local_activity</i></td>
                                    <td> Yarışma Adı :</td>
                                    <td> <input name="yarisma_adi" type="text" class="validate"> </td>

                                </tr>
                  
                                <tr>

                                    <td style="text-align:center"><i class="material-icons">event</i></td>
                                    <td> Tarih :</td>
                                    <td> <input name="tarih" type="text" class="validate"> </td>

                                </tr>
                                <tr>

                                    <td style="text-align:center"><i class="material-icons">storage</i></td>
                                    <td> Sıralama :</td>
                                    <td> <input name="siralama" type="text" class="validate"> </td>

                                </tr>

                                <tr>

                                    <td style="text-align:center"><i class="material-icons">stars</i></td>
                                    <td> Madalya :</td>
                                    <td> <input name="madalya" type="text" class="validate"> </td>

                                </tr>


                            </tbody>

                        </table>
                        <br>
                        <center>
                        <input type="hidden" id="sporcu_no" name="sporcu_no" value="<?php echo $sporcu_no ?>" />
                            <button type="submit" class="waves-light btn green" id="yarisma_ekle_buton" form="yarisma_ekle">TAMAMLA</a>
                        </center>
                    </form>



                </div>
            </div>

        </div> 



    </div>
</div>




<script>
$(function() {

    $('#yarisma_ekle_buton').on("click", function() {

        swal({
            title: "Yarışma eklendi!",
            icon: "success",
        });

    })


})
</script>