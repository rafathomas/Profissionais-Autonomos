<!DOCTYPE html>
<html lang="pt-br">

<?php
include('principal.php');
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <title>Meus dados</title>
</head>

<style>
  body {
    padding: 50px;
    background: #EEEEEE;
   
  }

  .wrapper {
    width: 60%;
  }

  .panel-heading {
    padding: 0;
    border: 0;
  }

  .panel-title>a,
  .panel-title>a:active {
    display: block;
    padding: 15px;
    color: rgba(0, 0, 0, .8);
    font-size: 16px;
    text-decoration: none;
    cursor: default;
  }

  .panel-heading a:before {
    font-family: "Glyphicons Halflings";

    color: rgb(52, 131, 250);
    float: right;
    transition: all 0.5s;
  }

  .panel-heading.active a:before {
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    transform: rotate(90deg);
  }

  .nome {
    float: right;
    margin: -2px;
    margin-right: 320px;
    text-transform: uppercase;
  }

  .btn-info {
    float: right;
    margin-top: -3px;
    background-color: #4d90fe;
    border-color: #4d90fe;
  }

  .btn-primary {
    width: 50px;
  }

  .group {
    position: relative;
    margin-bottom: 45px;
  }

  input {
    font-size: 18px;
    padding: 10px 10px 10px 5px;
    display: block;
    width: 300px;
    border: none;
    border-bottom: 1px solid #757575;
  }

  input:focus {
    outline: none;
  }

  label {
    color: #999;
    font-size: 18px;
    font-weight: normal;
    position: absolute;
    pointer-events: none;
    left: 5px;
    top: 10px;
    transition: 0.2s ease all;
    -moz-transition: 0.2s ease all;
    -webkit-transition: 0.2s ease all;
  }

  input:focus~label,
  input:valid~label {
    top: -20px;
    font-size: 14px;
    color: #5264ae;
  }

  input:focus~.bar:before,
  input:focus~.bar:after {
    width: 50%;
  }


  input:focus~.highlight {
    -webkit-animation: inputHighlighter 0.3s ease;
    -moz-animation: inputHighlighter 0.3s ease;
    animation: inputHighlighter 0.3s ease;
  }

  h3 {
    font-size: 13px;
    margin-top: -30px;
  }

  @media (max-width: 992px) {
    .wrapper {
      width: 90%;
    }
  }

  @media (max-width: 992px) {
    .nome {
      margin: -2px;
      float: right;
      margin-right: 120px;
    }
  }
</style>

<div class="wrapper center-block">

  <?php if (isset($_GET['msg'])) { ?>
    <div class="alert alert-<?php echo $_GET['tipo'] ?>" role="alert">
      <?php echo $_GET['msg'] ?>
    </div>
  <?php } ?>

  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <h2>Dados da conta</h2>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
          <a class="collapsed" role="button" href="">
            Usuário <div class="nome"><?php echo $_SESSION['usuario']; ?></div>
          </a>
        </h4>
      </div>

      <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">

      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingTwo">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            E-mail
          </a>
        </h4>
      </div>
      <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">

      </div>
    </div>
    <br>
    <br>
    <br>
    <h2>Dados pessoais</h2>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingThree">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Nome completo
          </a>
        </h4>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingThree">
        <h4 class="panel-title">
        <a class="collapsed" role="button" data-parent="#accordion"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" aria-expanded="false" aria-controls="collapseThree">ADICIONAR</button>

            <?php if ($_SESSION['cpf'] == null) { ?>
              <?php } else { ?>
                <?php } ?>
                Documento <div class="nome"><?php echo $_SESSION['cpf']; ?></div>
                
              </a>
        </h4>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingThree">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Telefone
          </a>
        </h4>
      </div>
    </div>
    <br>
    <br>
    <br>
    <h2>Formas de pagamento aceitas</h2>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingThree">
        <h4 class="panel-title">
          <a class="collapsed" role="button" href="pagamentos.php"><button type="button" class="btn btn-info btn-lg">ADICIONAR</button>
            Pagamentos aceitos
          </a>
        </h4>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" width="100%">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Adicionar CPF</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="group">
          <form action="update.php" method="POST">
            <input type="text" name="cpf" required id="cpf">
            <input type="hidden" name="usuario" required id="cpf" value="<?php echo $_SESSION['usuario']; ?>">
            <label>CPF</label>
            <div class="nome">
            </div>
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-primary"></button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    $(document).ready(function() {
      $("#cpf").mask("999.999.999-99");
    });
  </script>

  </body>

</html>