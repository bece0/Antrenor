<div id="sporcu_arama_modal" class="modal bottom-sheet">
    <div class="modal-content">
        <div class="container">
            <div class="row ">
                <div class="col s12">

                    <h5 style="text-align:center"> Sporcu Ara</h5>


                    <div class="input-field col s12">
                        <i class="material-icons prefix">search</i>
                        <input type="text" id="text_ara" onchange="arama_yap() ">
                        <label for="text_ara">Sporcu Adı</label>

                    </div>
                    <div class="input-field col s6">

                        <select class="browser-default" id="yay_turu_ara" onchange="arama_yap()">
                            <option value="yay_default" disable selected>Yay türü seçin</option>
                            <option value="klasik">Klasik</option>
                            <option value="makarali">Makaralı</option>

                        </select>
                    </div>
                    <div class="input-field col s6">

                        <select class="browser-default" id="yas_grubu_ara" onchange="arama_yap()">
                            <option value="yas_default" disable selected>Yaş Grubu seçin</option>
                            <option value="buyukler">Büyükler</option>
                            <option value="gencler">Gençler</option>
                            <option value="kadetler">Kadetler</option>
                            <option value="yildizlar">Yıldızlar</option>
                            <option value="minikler">Minikler</option>
                        </select>
                    </div>



                </div>
            </div>

        </div>

    </div>

    <div class="modal-footer">
        <center>
            <button class=" waves-light btn green " type="reset" id="temizle_buton">
                Temizle
            </button>
            <button class=" waves-light btn red modal-close" type="button" id="kapat_buton">
                Kapat
            </button>
        </center>
    </div>

</div>


<script>
$(document).ready(function() {



    $("#temizle_buton").click(function() {
        //location.reload(true);
        //$("#sporcu_arama_modal").open();

        $("#text_ara").val("");
       
        $("#yay_turu_ara").val("yay_default");      

        $("#yas_grubu_ara").val("yas_default"); 
      
        arama_yap();

    });


});
</script>