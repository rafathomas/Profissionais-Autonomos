<?php
session_start();
setcookie("ck_authorized", "true", 0, "/");



if (!isset($_SESSION["usuario"])) :
  header("location: index.php");
else :
  $usuario = $_SESSION["usuario"];
endif;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/principal.css">
  	<link rel="stylesheet" href="css/principal.css">
	<link rel="stylesheet" href=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://kit.fontawesome.com/ac2e97408d.js" crossorigin="anonymous"></script>
	<script src=https://code.jquery.com/jquery-2.2.4.min.js></script>

  <title>Meus dados</title>
</head>

<body>

  <div class="area"></div>
  <nav class="main-menu">
    <ul>
      <li>
        <a href="perfil.php">
          <i class="fa fa-home fa-2x"></i>
          <span class="nav-text">
            Resumo
          </span>
        </a>

      </li>
      <li class="has-subnav">
        <a href="#">
          <i class="fa fa-calendar fa-2x"></i>
          <span class="nav-text">
            Agenda
          </span>
        </a>

      </li>
     
      <li class="has-subnav">
        <a href="#">
          <i class="fa fa-comments fa-2x"></i>
          <span class="nav-text">
            Chat
          </span>
        </a>

      </li>

    </ul>

    <ul class="logout">
      <li>
        <a href="sair.php">
          <i class="fa fa-power-off fa-2x"></i>
          <span class="nav-text">
            Sair
          </span>
        </a>
      </li>
    </ul>
  </nav>

</body>

</html>