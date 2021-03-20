<?php 
    include 'head.php';
    include 'nav.php';
   // include 'database/database.php';

    if(!$kullanici_giris_yapti_mi){
       header('Location: login.php'); 
      
   }

  
?>

<div class="container">
    <br>

    <div class="row">


        <div id="bilgiler" class="col s12">
            <br>

            <div class="card row mx-2 mb-3">

                <div class="card-body">
                    <br>

                    <h5 style="text-align:center"> Kişisel Bilgiler</h5>
                    <form action="action/sporcu_kayit_action.php" method="post" id="sporcu_kayit">
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
                                    <td> <input name="ad" type="text" class="validate"> </td>

                                </tr>
                                <tr>
                                    <td style="text-align:center"><i class="material-icons">account_circle</i></td>
                                    <td> Soyad :</td>
                                    <td> <input name="soyad" type="text" class="validate"> </td>

                                </tr>
                                <tr>

                                    <td style="text-align:center"><i class="material-icons">wc</i></td>
                                    <td> Cinsiyet :</td>
                                    <td> <input name="cinsiyet" type="text" class="validate"> </td>

                                </tr>
                                <tr>

                                    <td style="text-align:center"><i class="material-icons">cake</i></td>
                                    <td> Doğum Tarihi :</td>
                                    <td> <input name="dogum_tarihi" type="text" class="validate"> </td>

                                </tr>

                                <tr>

                                    <td style="text-align:center"><i class="material-icons">phone</i></td>
                                    <td> Tel No :</td>
                                    <td> <input name="tel_no" type="text" class="validate"> </td>

                                </tr>


                            </tbody>

                        </table>
                        <br>
                        <center>
                            <button type="submit" class="waves-light btn green" id="kayit_buton"
                                form="sporcu_kayit">TAMAMLA</a>
                        </center>
                    </form>



                </div>
            </div>

        </div> <!-- bilgiler -->



    </div>
</div>

</div>

<script>
$(function() {

    $('#kayit_buton').on("click", function() {

        swal({
            title: "Sporcu Kayıt edildi!",
            icon: "success",
        });

    })


})
</script>