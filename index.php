<?php 
    include 'head.php';
    include 'nav.php';

?>

<link rel="stylesheet" href="assets/index.css">
<section class="jumbotron text-center">
    <div class="container">
        <h2 class="jumbotron-heading">SPORCU LİSTESİ</h2>
     </div>
</section>

<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <!-- <div class="table-responsive"> -->
                <table class="table table-striped  table-hover">
                    <thead>
                        <tr>

                            <th scope="col"> Sporcu </th>  
                            <th scope="col"> Ad - Soyad</th>
                            <th scope="col">Kategori</th>             
                            <th scope="col">Yaş grubu</th>
                            <!-- <th> </th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
						
                            <td><a href="sporcu_sayfasi.php"><img src="images/logo.jpg" style="margin-bottom:5px;border-radius:1000px;width:20%"></a> </td> 
                            <td>Begüm ÇELEBİ</td>
                            <td>Klasik Yay</td>
                            <td>Yıldızlar</td>
                            <!-- <td class="text-right"><button class="btn btn-sm btn-info"><i class="fa fa-pencil"></i> </button> </td> -->
                        </tr>
                        <tr>
						    
                             <td><a href="sporcu_sayfasi.php"><img src="images/logo.jpg" style="margin-bottom:5px;border-radius:1000px;width:20%"></a> </td>  
                            <td>Begüm ÇELEBİ</td>
                            <td>Makaralı Yay</td>

                            <td>Büyük</td>
                            <!-- <td class="text-right"><button class="btn btn-sm btn-info"><i class="fa fa-pencil"></i> </button> </td> -->
                        </tr>
                        <tr>
						   
                            <td><a href="sporcu_sayfasi.php"><img src="images/logo.jpg" style="margin-bottom:5px;border-radius:1000px;width:20%"></a> </td>  
                            <td>Begüm ÇELEBİ</td>
                            <td>Klasik Yay</td>
   
                            <td>Genç</td>
                            <!-- <td class="text-right"><button class="btn btn-sm btn-info"><i class="fa fa-pencil"></i> </button> </td> -->
                        </tr>

                       
                    </tbody>
                </table>
            <!-- </div> -->
        </div>
        <div class="col mb-2">
            <div class="row">
              
                <div class="col-sm-12 col-md-2 ">
                    <button class="btn btn-lg btn-block btn-info text-uppercase">Sporcu Kayıt</button>
                </div>
            </div>
        </div>
    </div>
</div>

    
</body>

</html>