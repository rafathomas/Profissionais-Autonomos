<?php include_once("lib/includes.php");?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>Alterar Senha</title>
  </head>
  <body>
    
    <div class="row">
      <div class="col-sm-5 offset-md-3">
        <?php
            $url = (isset($_GET['pagina'])) ? $_GET['pagina'] : 'index.';
            $dir = "pags/";
            $ext = ".php";
            if(file_exists($dir.$url.$ext)){
              include($dir.$url.$ext);
            }else{
              echo "<div class='alert alert-danger'>Página não encontrada</div>";
            }

        ?>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  </body>
</html>