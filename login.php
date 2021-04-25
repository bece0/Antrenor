<?php 
     $kullanici_giris_yapti_mi = isset($_SESSION["kullanici_id"]);
    if($kullanici_giris_yapti_mi){
        header('Location: index.php'); 
   }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="assets/login.css">
</head>

<body>

    <div class="sidenav">
        <div class="login-main-text">

            <img src="files/images/logoo.png" style="margin-bottom:30px;border-radius:1000px;width:50%">
            <h2>Antrenör Yönetim Sistemi</h2>
        </div>
    </div>
    <div class="main">
        <div class="col-md-7 col-sm-12">
            <div class="login-form">
                <form action="action/login_action.php" method="post">
                    <div class="form-group">
                        <label>E-mail Adresi</label>
                        <input type="text" class="form-control" name="email" placeholder="E-mail" required>
                    </div>
                    <div class="form-group">
                        <label>Parola</label>
                        <input type="password" class="form-control" name="pwd" placeholder="Parola" required>
                    </div>
                    <button type="submit" class="btn btn-success" id="giris_buton">Giriş</button>

                </form>
            </div>
        </div>
    </div>

</body>

</html>