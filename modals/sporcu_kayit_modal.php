<!-- Modal Structure -->
<div id="sporcu_kayit_modal" class="modal modal-fixed-footer">
    <div class="modal-content">


        
            <center>
                <h4>Kişisel Bilgiler</h4>
            </center>
            <div class="row">


                <div id="bilgiler" class="col s12">

                    <br>
                    <div class="col s6">
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
                                    <td> <input id="ad" type="text" class="validate" reguired> </td>

                                </tr>

                                <tr>

                                    <td style="text-align:center"><i class="material-icons">assignment_ind</i></td>
                                    <td> TC No :</td>
                                    <td> <input id="tc_no" type="text" class="validate" reguired> </td>

                                </tr>
                                <tr>

                                    <td style="text-align:center"><i class="material-icons">wc</i></td>
                                    <td> Cinsiyet :</td>
                                    <td> <input id="cinsiyet" type="text" class="validate" reguired> </td>

                                </tr>                   

            


                            </tbody>

                        </table>
                    </div>
                    <div class="col s6">
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
                                    <td> Soyad :</td>
                                    <td> <input id="soyad" type="text" class="validate" reguired> </td>

                                </tr>
                                <tr>

                                    <td style="text-align:center"><i class="material-icons">cake</i></td>
                                    <td> Doğum Tarihi :</td>
                                    <td> <input id="dogum_tarihi" type="text" class="validate" reguired> </td>

                                </tr>

                                <tr>

                                    <td style="text-align:center"><i class="material-icons">phone</i></td>
                                    <td> Tel No :</td>
                                    <td> <input id="tel_no" type="text" class="validate" reguired> </td>

                                </tr>


                            </tbody>

                        </table>
                    </div>
                    <br>

                </div> <!-- bilgiler -->

            </div>     

    </div>
    <div class="modal-footer">
        <center>
            <button type="button" class="waves-light btn green  modal-close" id="kayit_buton"
                onclick="sporcu_kaydet()">TAMAMLA</a>
        </center>
    </div>

  
</div>


<script>
    var sporcu_kaydet = function() {
        var ad = $("#ad").val();
        var soyad = $("#soyad").val();
        var tc_no = $("#tc_no").val();
        var cinsiyet = $("#cinsiyet").val();
        var dogum_tarihi = $("#dogum_tarihi").val();
        var tel_no = $("#tel_no").val();

        var veri = {
            "ad": ad,
            "soyad": soyad,
            "tc_no": tc_no,
            "cinsiyet": cinsiyet,
            "dogum_tarihi": dogum_tarihi,
            "tel_no": tel_no,

        };

        var json_string = JSON.stringify(veri);

        $.ajax({
            url: 'sporcu_kayit_servis.php',
            type: 'POST',
            data: json_string,
            contentType: 'application/json',
            success: function(cevap) {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Sporcu Kayıt edildi.',
                    showConfirmButton: false,
                    timer: 1500
                })
                location.reload(true);
                console.log(cevap);
            },
            error: function(error) {

                Swal.fire({
                    icon: 'error',
                    title: 'Hata.',
                    text: 'Kayıt işlemi yapılamadı !',
                })
                console.log(error);
            }

        });


    }
</script>