 <div id="sporcu_arama_modal" class="modal bottom-sheet ">
    <div class="modal-content">
        <center>
            <h4>Sporcu Ara</h4>
        </center>

        <div class="container">
            <div class="row ">
                <div class="col s12">

                    <div class="input-field col s12">
                        <i class="material-icons prefix">search</i>
                        <input type="text" id="text_ara" class="autocomplete" onkeydown="arama_yap()">
                        <label for="text_ara">Sporcu Adı</label>

                    </div>

                    <div class="input-field col s6">

                        <select id="yay_turu_ara" onchange="arama_yap()">
                            <option value="" selected>Yay türü seçin</option>
                            <option value="klasik">Klasik</option>
                            <option value="makarali">Makaralı</option>

                        </select>
                    </div>
                    <div class="input-field col s6">

                        <select id="yas_grubu_ara" onchange="arama_yap()">
                            <option value="" selected>Yaş Grubu seçin</option>
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
            <button class=" waves-light btn red modal-close" type="button" id="kapat_buton">
                Kapat
            </button>
        </center>
    </div>

</div> 


<script>

 
</script>
