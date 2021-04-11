<?php 
    include 'head.php';
    include 'nav.php';

?>

<div class="container">

    <section class="jumbotron text-center">
        <div class="container">
            <center>
                <h4 class="jumbotron-heading">HAFTALIK PUAN TABLOSU</h4>
            </center>
        </div>
    </section>
    <br>

    <div class="col s12">
        <div class="row">
            <div class="input-field col s6">
                <select>
                    <option value="" disabled selected>Yay türü seçin</option>
                    <option value="1">Klasik yay</option>
                    <option value="2">Makaralı Yay</option>
              
                </select>
              
            </div>
            <div class="input-field col s6">
                <select>
                    <option value="" disabled selected>Atış Mesafesi seçin</option>
                    <option value="1">20</option>
                    <option value="2">30</option>
                    <option value="3">60</option>
                    <option value="4">70</option>
                </select>
         
            </div>
        </div>
    </div>



    <table class="table table-bordered highlight  ">
        <thead>
            <tr>
                <th>Sıralama</th>
                <th>Ad Soyad</th>
                <th>Puan</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Begüm Çelebi</td>
                <td>350</td>

            </tr>
            <tr>
                <td>2</td>
                <td>Ayşe Yılmaz</td>
                <td>300</td>

            </tr>
            <tr>
                <td>3</td>
                <td>Ali Kaya</td>
                <td>270</td>

            </tr>
        </tbody>
    </table>
</div>
<br>
<?php     include 'footer.php';?>

<?php  //   include 'footer.php';?>

<script>
$(document).ready(function() {
    $('select').formSelect();
});
</script>