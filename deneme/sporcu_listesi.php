<?php    
     include 'head.php';
     include 'nav.php';

     if(!$kullanici_giris_yapti_mi){
        header('Location: login.php'); 
   }

 ?>


<html>

<body>
    <br>
    <div class="container">
        <div class="row">

            <div class="col s4">


                <input type="text" id="text" class="autocomplete">
                <label for="text">Sporcu Adı</label>

            </div>



            <div class="col s3">
                <select id="yay">
                    <option  selected value="">yay seçin</option>
                    <option value="klasik">Klasik yay</option>
                    <option value="makarali">Makarali yay</option>

                </select>
            </div>
            <div class="col s3">
                <select id="yas_grubu">
                    <option  selected value="">yaş seçin</option>
                    <option value="buyukler">Büyükler</option>
                    <option value="gencler">Gençler</option>
                    <option value="yildizlar">Yıldızlar</option>
                    <option value="minikler">Minikler</option>

                </select>
            </div>
            <div class="col s2">
                <button class=" waves-light btn green" type="button" id="listele_buton"> Listele </button>
            </div>

        </div>
        <br>


        <table>
            <thead>
                <th>Sporcu Adı</th>
                <th>Kategori</th>
                <th>Yaş Grubu</th>
            </thead>
            <tbody id="sporcu_listesi">
                <!-- Sporcu Listesi -->
            </tbody>
        </table>

    </div>
</body>

<script>
$(function() {
    $("#listele_buton").click(function() {
        var yay = $("#yay option:selected").val();
        var yas_grubu = $("#yas_grubu option:selected").val();
        var text = $("#text").val();
        var veri = {
            "yay": yay,
            "yas_grubu": yas_grubu,
            "text": text,

        };

        var json_string = JSON.stringify(veri);

        $.ajax({
            url: 'listele_servis.php',
            type: 'POST',
            data: json_string,
            contentType: 'application/json',
            success: function(cevap) {
                $("#sporcu_listesi").empty();
                if (!
                    cevap
                ) { //<div class = 'alert alert-warning' role = 'alert' > Sporcu Bulunamadı </div>
                    Swal.fire('Sporcu Bulunamadı');
                } else {
                    for (var i = 0; i < cevap.length; i++) {
                        $("#sporcu_listesi").append(

                            "<tr><td>" + cevap[i].ad + " " + cevap[i].soyad +
                            "</td><td>" +
                            cevap[i].kategori + "</td><td>" + cevap[i].yas_grubu +
                            "</td></tr>"
                        );
                    }
                }

                console.log(cevap);
            },
            error: function(error) {
                console.log(error);
            },



        });


    });

});
</script>

<!-- <script type="text/javascript" src="deneme.js"></script> -->

</html>