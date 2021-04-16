<!-- Modal Structure -->
<div id="sporcu_kayit_modal" class="modal modal-fixed-footer">
    <div class="modal-content">


        <div class="container">
            <center>
                <h4>Kişisel Bilgiler</h4>
            </center>
            <div class="row">


                <div id="bilgiler" class="col s12">

                    <br>

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

                                    <td style="text-align:center"><i class="material-icons">assignment_ind</i></td>
                                    <td> TC No :</td>
                                    <td> <input name="tcno" type="text" class="validate"> </td>

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







                </div> <!-- bilgiler -->



            </div>
        </div>
    </div>
    <div class="modal-footer">
        <center>
            <button type="submit" class="waves-light btn green " modal-close" id="kayit_buton"
                form="sporcu_kayit">TAMAMLA</a>
        </center>
    </div>

    </form>
</div>