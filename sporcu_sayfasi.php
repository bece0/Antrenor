<?php 
    include 'head.php';
    include 'nav.php';

?>

<div class="container">


    <meta name="viewport" content="width = device-width, initial-scale = 1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">
    </script>

    <br>

    <div class="row">
        <div class="col s12">
            <ul class="tabs">
                <li class="tab col s3"><a class="active" href="#bilgiler">Bilgiler</a></li>
                <li class="tab col s3"><a href="#puan">Puan Durumu</a></li>
                <li class="tab col s3 "><a href="#yarisma">Yarışma Dereceleri</a></li>
                <li class="tab col s3 disabled"><a href="#antrenman">Antrenman Programı</a></li>
            </ul>
        </div>

        <div id="bilgiler" class="col s12">
            <br>

            <div class="card row mx-2 mb-3">

                <div class="card-body">
                    <br>
                    <h4>Kişisel Bilgiler</h4>
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
                                <td>Ad Soyad :</td>
                                <td>Begüm Çelebi</td>
                                <td>Edit</td>
                            </tr>
                            <tr>
                                <td>Doğum Tarihi :</td>
                                <td>14.07.1996</td>
                                <td>Edit</td>
                            </tr>
                            <tr>
                                <td>Cinsiyet :</td>
                                <td>Kadın</td>
                                <td>Edit</td>
                            </tr>
                            <tr>
                                <td>Tel No :</td>
                                <td>+9779861106179</td>
                                <td>Edit</td>
                            </tr>

                        </tbody>
                    </table>


                    <br>
                    <h4>Teknik Bilgiler</h4>
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
                                <td>Kategori:</td>
                                <td>Klasik Yay</td>
                                <td>Edit</td>
                            </tr>
                            <tr>
                                <td>Yay Bilgisi:</td>
                                <td>Hoyt bilmem ne :d</td>
                                <td>Edit</td>
                            </tr>
                            <tr>
                                <td>Ok Bilgisi:</td>
                                <td>x10 - 800</td>
                                <td>Edit</td>
                            </tr>
                            <tr>
                                <td>Kol Boyu:</td>
                                <td>35 cm</td>
                                <td>Edit</td>
                            </tr>
                            <tr>
                                <td>Yay Sertliği:</td>
                                <td>28"</td>
                                <td>Edit</td>
                            </tr>
                            <tr>
                                <td>AtışMesafesi:</td>
                                <td>70 m</td>
                                <td>Edit</td>
                            </tr>

                        </tbody>
                    </table>

                    <!-- 
                    <ul class="collection">
                        <li class="collection-header">
                            <h4>Kişisel Bilgiler</h4>
                        </li>

                        <li class="collection-item"><i class="mdi mdi-account icon-sm "></i>
                            <span class="collection-item-name">Ad Soyad :</span>
                            <span class="collection-item-detail">Begüm ÇELEBİ</span>
                            <a href="" class="collection-item-edit">Edit</a></li>
                        <li class="collection-item"><i class="mdi mdi-cake icon-sm "></i>
                            <span class="collection-item-name">Doğum Tarihi :</span>
                            <span class="collection-item-detail">14.07.1996</span>
                            <a href="" class="collection-item-edit">Edit</a></li>
                        <li class="collection-item"><i class="mdi mdi-account icon-sm "></i>
                            <span class="collection-item-name">Cinsiyet:</span><span
                                class="collection-item-detail">Kadın</span>
                            <a href="" class="collection-item-edit">Edit</a></li>
                        <li class="collection-item"><i class="mdi mdi-phone icon-sm "></i>
                            <span class="collection-item-name">Tel No :</span><span
                                class="collection-item-detail">+9779861106179</span>
                            <a href="" class="collection-item-edit">Edit</a></li></span>

                        <li class="collection-header">
                            <h4>Teknik Bilgiler</h4>
                        </li>

                        <li class="collection-items"><i class="mdi mdi-looks "></i>
                            <span class="collection-item-name"> Yay Bilgisi:</span>
                            <span class="collection-item-detail">Hoyt bilmem ne :d</span>
                            <a href="" class="collection-item-edit">Edit</a></li>
                        <li class="collection-items"><i class="mdi mdi-chevron-double-right "></i>
                            <span class="collection-item-name"> Ok Bilgisi:</span>
                            <span class="collection-item-detail"> x10 - 800 </span>
                            <a href="" class="collection-item-edit">Edit</a></li>
                        <li class="collection-items"><i class="mdi mdi-ruler "></i>
                            <span class="collection-item-name">Kol Boyu:</span>
                            <span class="collection-item-detail"> 35 cm</span>
                            <a href="" class="-collectionut-item-edit">Edit</a></li>
                        <li class="collection-items"><i class="mdi mdi-weight-kilogram "></i>
                            <span class="collection-item-name">Yay Sertliği</span>
                            <span class="collection-item-detail">28"</span>
                            <a href="" class="collection-item-edit">Edit</a></li>
                        <li class="collection-items"><i class="mdi mdi-bullseye"></i>
                            <span class="collection-item-name">AtışMesafesi:</span>
                            <span class="collection-item-detail">70 m</span>
                            <a href="" class="collection-item-edit">Edit</a></li>

                    </ul> -->

                </div>
            </div>







        </div>
        <div id="puan" class="col s12">
            <br>
            <div class="card row mx-2 mb-3">
            <br>
                <h4>Puan Durumu</h4>
            </div>
        </div>
        <div id="yarisma" class="col s12">
            <br>
            <div class="card row mx-2 mb-3">
            <br>
                <h4>Yarışma Dereceleri </h4>
            </div>
            <div id="antrenman" class="col s12">
                <br>
                <div class="card row mx-2 mb-3">
                <br>
                    <h4> Antrenman Programı </h4>
                </div>
            </div>
        </div>
    </div>

</div>