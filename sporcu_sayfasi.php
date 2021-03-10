<?php 
    include 'head.php';
    include 'nav.php';

?>

<body>
    <link rel="stylesheet" href="assets/sporcu.css">
    <!-- partial -->
    <div class="main-panel">
        <div class="container">


            <div class="row">
                <div class="col-md-4 grid-margin stretch-card ">
                    <div class="card">
                        <div class="profile-card">

                            <div class="profile-header">

                                <div class="user-image">
                                    <img src="files/images/logo.jpg"
                                        style="margin-bottom:10px; margin-left: 25px;border-radius:1000px;width:40%">
                                </div>
                            </div>

                            <div class="profile-content">
                                <div class="profile-name">Begüm ÇELEBİ</div>
                                <hr>
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <a class="nav-link active" id="v-pills-bBilgiler-tab" data-toggle="pill"
                                        href="#v-pills-bilgiler" role="tab" aria-controls="v-pills-bilgiler"
                                        aria-selected="true">
                                        <b>Bilgiler</b>
                                    </a>

                                    <a class="nav-link" id="v-pills-puan-tab" data-toggle="pill" href="#v-pills-puan"
                                        role="tab" aria-controls="v-pills-puan" aria-selected="false">
                                        <b>Puan Durumu</b>
                                    </a>

                                    <a class="nav-link" id="v-pills-Yarisma-tab" data-toggle="pill"
                                        href="#v-pills-yarisma" role="tab" aria-controls="v-pills-yarisma"
                                        aria-selected="false">
                                        <b>Yarışma Dereceleri</b>
                                    </a>
                                    <a class="nav-link" id="v-pills-antrenman-tab" data-toggle="pill"
                                        href="#v-pills-antrenman" role="tab" aria-controls="v-pills-antrenman"
                                        aria-selected="false">
                                        <b>Antrenman Programı</b>
                                    </a>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-md-8 grid-margin stretch-card">


                    <div class="tab-content" id="v-pills-tabContent">

                        <div class="tab-pane fade show active" id="v-pills-bilgiler" role="tabpanel"
                            aria-labelledby="v-pills-bilgiler-tab">

                            <div class="card row mx-2 mb-3">
                                <div class="card-body">

                                    <p class="card-title font-weight-bold">Bilgiler</p>
                                    <hr>
                                    <p class="card-description">Kişisel Bilgiler</p>
                                    <ul class="about">
                                        <li class="about-items"><i class="mdi mdi-account icon-sm "></i><span
                                                class="about-item-name">Ad Soyad:</span><span
                                                class="about-item-detail">Begüm ÇELEBİ</span><a href=""
                                                class="about-item-edit">Edit</a></li>
                                        <li class="about-items"><i class="mdi mdi-cake icon-sm "></i><span
                                                class="about-item-name">Doğum Tarihi:</span><span
                                                class="about-item-detail">14.07.1996</span><a href=""
                                                class="about-item-edit">Edit</a></li>
                                        <li class="about-items"><i class="mdi mdi-account icon-sm "></i><span
                                                class="about-item-name">Cinsiyet:</span><span
                                                class="about-item-detail">Kadın</span> <a href=""
                                                class="about-item-edit">Edit</a></li>
                                        <li class="about-items"><i class="mdi mdi-phone icon-sm "></i><span
                                                class="about-item-name">Tel No:</span><span
                                                class="about-item-detail">+9779861106179</span><a href=""
                                                class="about-item-edit">Edit</a></li>

                                        </span>

                                    </ul>
                                    <hr>
                                    <p class="card-description">Teknik Bilgiler</p>
                                    <ul class="about">

                                        <li class="about-items"><i class="mdi mdi-looks "></i><span
                                                class="about-item-name"> Yay Bilgisi</span><span
                                                class="about-item-detail">Hoyt bilmem ne :d</span> <a href=""
                                                class="about-item-edit">Edit</a></li>
                                        <li class="about-items"><i class="mdi mdi-chevron-double-right "></i><span
                                                class="about-item-name"> Ok Bilgisi:</span><span
                                                class="about-item-detail"> x10 - 800 </span> <a href=""
                                                class="about-item-edit">Edit</a></li>
                                        <li class="about-items"><i class="mdi mdi-ruler "></i><span
                                                class="about-item-name">Kol Boyu</span><span class="about-item-detail">
                                                35 cm</span> <a href="" class="about-item-edit">Edit</a></li>
                                        <li class="about-items"><i class="mdi mdi-weight-kilogram "></i><span
                                                class="about-item-name">Yay Sertliği</span><span
                                                class="about-item-detail">28"</span><a href=""
                                                class="about-item-edit">Edit</a></li>
                                        <li class="about-items"><i class="mdi mdi-bullseye"></i><span
                                                class="about-item-name">Atış Mesafesi</span><span
                                                class="about-item-detail">70 m</span> <a href=""
                                                class="about-item-edit">Edit</a></li>

                                    </ul>

                                </div>
                            </div>


                        </div>

                        <div class="tab-pane fade" id="v-pills-asistan" role="tabpanel"
                            aria-labelledby="v-pills-asistan-tab">


                            <div class="card row mx-2 mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Puan Durumu
                                    </h5>
                                    <div class="alert alert-warning" role="alert"> Puan Durumu </div>
                                </div>
                            </div>



                        </div>

                        <div class="tab-pane fade" id="v-pills-puan" role="tabpanel" aria-labelledby="v-pills-puan-tab">


                            <div class="card row mx-2 mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Puan Durumu

                                    </h5>
                                    <div class="alert alert-warning" role="alert"> Puan Durumu </div>
                                </div>
                            </div>




                        </div>

                        <div class="tab-pane fade" id="v-pills-yarisma" role="tabpanel"
                            aria-labelledby="v-pills-yarisma-tab">


                            <div class="card row mx-2 mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Yarışma Dereceleri
                                    </h5>
                                    <div class="alert alert-warning" role="alert"> Yarışma Dereceleri </div>
                                </div>
                            </div>


                        </div>

                        <div class="tab-pane fade" id="v-pills-antrenman" role="tabpanel"
                            aria-labelledby="v-pills-antrenman-tab">


                            <div class="card row mx-2 mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Antrenman Programı
                                    </h5>
                                    <div class="alert alert-warning" role="alert"> Antrenman Programı </div>
                                </div>
                            </div>


                        </div>


                    </div>

                </div>




            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->


            <!-- partial -->
        </div>
        <!-- main-panel ends -->
</body>

</html>