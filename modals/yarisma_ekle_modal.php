<?php  $sporcu_no =  $_GET["sporcu"]; ?>
<div id="yarisma_ekle_modal" class="modal modal-fixed-footer">
    <div class="modal-content">

        <br>

        <h5 style="text-align:center"> Yarışma Bilgileri</h5>

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
                    <td> <input id="yarisma_adi" type="text" class="validate"> </td>

                </tr>

                <tr>

                    <td style="text-align:center"><i class="material-icons">event</i></td>
                    <td> Tarih :</td>
                    <td> <input id="tarih" type="text" class="validate"> </td>

                </tr>
                <tr>

                    <td style="text-align:center"><i class="material-icons">storage</i></td>
                    <td> Sıralama :</td>
                    <td> <input id="siralama" type="text" class="validate"> </td>

                </tr>

                <tr>

                    <td style="text-align:center"><i class="material-icons">stars</i></td>
                    <td> Madalya :</td>
                    <td> <input id="madalya" type="text" class="validate"> </td>

                </tr>

            </tbody>

        </table>
        <br>

    </div>
    <div class="modal-footer">

        <center>
            <button type="button" class=" modal-close waves-light btn green" id="yarisma_ekle_buton"
                onclick="yarisma_ekle()">TAMAMLA</a>
        </center>

    </div>

</div>



<script>
    var yarisma_ekle = function() {
        var sporcu_no = '<?php echo $sporcu_no ;?>';
        var yarisma_adi = $("#yarisma_adi").val();
        var tarih = $("#tarih").val();
        var siralama = $("#siralama").val();
        var madalya = $("#madalya").val();

        var veri = {
            "sporcu_no": sporcu_no,
            "yarisma_adi": yarisma_adi,
            "tarih": tarih,
            "siralama": siralama,
            "madalya": madalya
        };

        var json_string = JSON.stringify(veri);

        $.ajax({
            url: 'services/yarisma_ekle_servis.php',
            type: 'POST',
            data: json_string,
            contentType: 'application/json',
            success: function(cevap) {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Yarışma eklendi.',
                    showConfirmButton: false,
                    timer: 1500,
                }).then((result) => {
                     window.location.href = "sporcu_sayfasi.php?sporcu=" + sporcu_no + "#yarisma";
                     //location.reload();
                });


                console.log(cevap);
            },
            error: function(error) {

                Swal.fire({
                    icon: 'error',
                    title: 'Hata.',
                    text: 'Ekleme işlemi yapılamadı !',
                })
                console.log(error);
            }

        });


    }
</script>