<!DOCTYPE html>
<html>

<head>
  <title></title>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Krona+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/modal.css">

</head>

<body>

  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <h1>PRA QUE MARIDO?</h1>

  <div class="content">
    <ul class="exo-menu">
      <li><a class="active" href="#" title="Inicio"><i class="fa fa-home"></i> Inicio</a></li>
      <li class="active"><a href="profissoes.php" title="Profissões"><i class="fa fa-briefcase"></i> Profissões</a>
      </li>
      <li><a href="buscar.php" title="Cidades"><i class="fa fa-globe"></i> Cidades</a></li>
      <li><a href="contato.php" title="Fale Conosco"><i class="fa fa-envelope"></i> Fale Conosco</a>
        <div class="contact">
        </div>
      </li>
      <a href="#" class="toggle-menu visible-xs-block">|||</a>
    </ul>
  </div>
  


  <?php
  include('login.php')
  ?>
  <script type="text/javascript">
    $(function() {
      $(".toggle-menu").click(function() {
        $(".exo-menu").toggleClass("display");
      });
    });
  </script>
</body>

</html>