<div id="puan_filtrele_modal" class="modal bottom-sheet">
    <div class="modal-content">
        <div class="container">
            <div class="row ">
                <div class="col s12">

                    <h5 style="text-align:center"> Puan Ara</h5>

                    <div class="input-field col s6">
                        <select class="browser-default" id="yay_turu_ara" onchange="puan_arama_yap()" >
                            <option value="yay_default" disabled selected>Yay türü seçin</option>
                            <option value="Klasik">Klasik yay</option>
                            <option value="Makarali">Makaralı Yay</option>

                        </select>

                    </div>
                    <div class="input-field col s6">
                        <select class="browser-default" id="atis_mesafe_ara" onchange="puan_arama_yap()">
                            <option value="mesafe_default" disabled selected>Atış Mesafesi seçin</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                            <option value="50">50</option>
                            <option value="60">60</option>
                            <option value="70">70</option>
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
   
        $("#yay_turu_ara").val("yay_default");
        $("#atis_mesafe_ara").val("mesafe_default");
        
        puan_listesi_default();

    });


});
</script>