<style>
body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }

  main {
    flex: 1 0 auto;
  }

</style>


<footer class="page-footer teal darken-3 ">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Antrenör Yönetim Sistemi</h5>
                <!-- <p class="grey-text text-lighten-4"> </p> -->
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Kısayollar</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="index.php">Sporcu Listesi</a></li>
                    <li><a class="grey-text text-lighten-3" href="sporcu_kayit.php">Sporcu Kayıt</a></li>
                    <li><a class="grey-text text-lighten-3" href="aidat.php?sene=<?php echo date("Y")?>">Malzeme Ücret Tablosu</a></li>
                    <li><a class="grey-text text-lighten-3" href="puan.php">Puan Tablosu</a></li>


                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2021 Begüm Çelebi
            <!-- <a class="grey-text text-lighten-4 right" href="#!">More Links</a> -->
        </div>
    </div>
</footer>