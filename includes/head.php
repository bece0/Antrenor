        <meta charset="UTF-8">

        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <!-- Compiled and minified JavaScript -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

         <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> 

        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"> </script>    -->
      
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <meta name="viewport" content="width = device-width, initial-scale = 1">
        
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

         <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.js"></script> -->
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css"> -->
        <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script> -->
       
        <!-- <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script> -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script> -->
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css"> -->

        <?php 
   
         if (!isset($_SESSION)) {
               session_start();
            }
           

         ?>

        <script>
            $(document).ready(function() {
               $('.tabs').tabs();
               $('.fixed-action-btn').floatingActionButton();
               $('select').formSelect();
               $('.modal').modal();
               $('.collapsible').collapsible();

            });
        </script>