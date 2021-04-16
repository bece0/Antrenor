<div id="yarisma_ekle_modal" class="modal modal-fixed-footer">
        <div class="modal-content">

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




        </div>
        <div class="modal-footer">

            <center>
                <input type="hidden" id="sporcu_no" name="sporcu_no" value="<?php echo $sporcu_no ?>" />
                <button type="submit" class=" modal-close waves-light btn green" id="yarisma_ekle_buton"
                    form="yarisma_ekle">TAMAMLA</a>
            </center>
           
        </div>
        </form>
    </div>






</body>