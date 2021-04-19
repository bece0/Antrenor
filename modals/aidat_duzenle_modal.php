<div id="aidat_duzenle_modal" class="modal bottom-sheet">

    <div class="modal-content">
        <div class="container">
            <br>
            <div class="row">
                <div class="col s12">
                    <h5 style="text-align:center"> Aidat Tablosu</h5><br>

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
                        <tbody id="sporcu_aidat_bilgi">

                        </tbody>
                    </table>
                   
                    <br> <br>
                    <center>
                        <button type="button" class="waves-light btn green" id="aidat_duzenle_buton"
                            onclick="aidat_duzenle()">TAMAMLA</a>
                    </center>

                </div> <!-- bilgiler -->

            </div>
        </div>

    </div>

    <div class="modal-footer"></div>

</div>


<script>
     var sporcu_aidat_getir = function() {
        var sporcu_no = $('.sporcu_no').attr('data-sporcuno'); 
        var sene = $("#gosterilen_yil").val();

        var veri = {
            "sporcu_no": sporcu_no,
            "sene": sene,
 
        };

        var json_string = JSON.stringify(veri);

        $.ajax({
                url: 'services/aidat_getir_servis.php',
                type: 'POST',
                data: json_string,
                contentType: 'application/json',
                success: function(cevap) {
                    $("#sporcu_aidat_bilgi").empty();
                    var sporcu_aidat_bilgisi = `         
               
                            <tr>                                                                                                                      
                                <td>${cevap.ad + " " +  cevap.soyad  }</td>
                                <td><label><input type="checkbox" name="aylar[]" value="ocak"
                                    ${(cevap.ocak=="1") ? "checked='checked'" : " "}<span></span></label></td>
                                <td><label><input type="checkbox" name="aylar[]" value="subat"
                                    ${( cevap.subat=="1") ? "checked='checked'" : " "} <span></span></label></td>
                                <td><label><input type="checkbox" name="aylar[]" value="mart"
                                    ${( cevap.mart=="1") ? "checked='checked'" : " "} <span></span></label></td>
                                <td><label><input type="checkbox" name="aylar[]" value="nisan"
                                    ${( cevap.nisan=="1") ? "checked='checked'" : " " } <span></span></label></td>
                                <td><label><input type="checkbox" name="aylar[]" value="mayis"
                                    ${( cevap.mayis=="1") ? "checked='checked'" : " " } <span></span></label></td>
                                <td><label><input type="checkbox" name="aylar[]" value="haziran"
                                    ${( cevap.haziran=="1") ? "checked='checked'" : " "} <span></span></label></td>
                                <td><label><input type="checkbox" name="aylar[]" value="temmuz"
                                    ${( cevap.temmuz=="1") ? "checked='checked'" : " " } <span></span></label></td>
                                <td><label><input type="checkbox" name="aylar[]" value="agustos"
                                    ${( cevap.agustos=="1") ? "checked='checked'" : " "} <span></span></label></td>
                                <td><label><input type="checkbox" name="aylar[]" value="eylul"
                                    ${( cevap.eylul=="1") ? "checked='checked'" : " " } <span></span></label></td>
                                <td><label><input type="checkbox" name="aylar[]" value="ekim"
                                    ${( cevap.ekim=="1") ? "checked='checked'" : " " } <span></span></label></td>
                                <td><label><input type="checkbox" name="aylar[]" value="kasim"
                                    ${( cevap.kasim=="1") ? "checked='checked'" : " " } <span></span></label></td>
                                <td><label><input type="checkbox" name="aylar[]" value="aralik"
                                    ${( cevap.aralik=="1") ? "checked='checked'" : " " } <span></span></label></td>

                        </tr>
                                
                    `;

                    $("#sporcu_aidat_bilgi").append(sporcu_aidat_bilgisi);
                
                console.log(cevap);
            },
            error: function(error) {

                console.log(error);
            }

        });
    }  

    var aidat_duzenle = function() {
        var sporcu_no = $("#sporcu_no").val();

        var veri = {
            "sporcu_no": sporcu_no,
            "sene": sene,
            "aylar": aylar
        };

        var json_string = JSON.stringify(veri);

        $.ajax({
                url: 'aidat_duzenle_servis.php',
                type: 'POST',
                data: json_string,
                contentType: 'application/json',
                success: function(cevap) {

                console.log(cevap);
            },
            error: function(error) {

                console.log(error);
            }

        });
    }
</script>