<?php
include_once 'conexao/conexao.php';
$consulta = $pdo->query("SELECT * FROM `profissoes`"); 
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

  <style type="text/css">

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Open Sans Condensed', sans-serif;
      font-weight: 700;
    }

    html, body {
      background: #fff;
    }

    header {
      width: 95%;
      display: -webkit-box;
      display: flex;
      -webkit-box-pack: end;
      justify-content: flex-end;
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      flex-flow: row wrap;
    }
    header ul {
      padding: 1.2em 0 0.5em;
    }
    header span {
      padding: 0 0 0 0.5em;
    }


    .row {
      width: 100%;
      -webkit-box-pack: start;
      justify-content: flex-start;
      display: -webkit-box;
      display: flex;
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      flex-flow: row wrap;
    }

    .product, .product--blue, .product--orange, .product--red, .product--green, .product--yellow, .product--pink {
      box-shadow: 1px 5px 15px #CCC;
      width: 15em;
      height: auto;
      border-radius: 3px;
      padding: 2em;
      margin: 1em;
      overflow: hidden;
      position: relative;
      -webkit-box-flex: 1;
      flex: auto;
    }
    .product--blue {
      background: linear-gradient(-45deg, #92DCE5 50%, #0A7753 50%);
    }
    .product--orange {
      background: linear-gradient(-45deg, #EF6F6C 50%, #0A7753 50%);
    }
    .product--red {
      background: linear-gradient(-45deg, #E84855 50%, #0A7753 50%);
    }
    .product--green {
      background: linear-gradient(-45deg, #70C1B3 50%, #0A7753 50%);
    }
    .product--yellow {
      background: linear-gradient(-45deg, #E8DB7D 50%, #0A7753 50%);
    }
    .product--pink {
      background: linear-gradient(-45deg, #FF386D 50%, #0A7753 50%);
    }
    .product img, .product--blue img, .product--orange img, .product--red img, .product--green img, .product--yellow img, .product--pink img {
      max-width: 100%;
      height: auto !important;
      text-align: center;
    }
    .product_inner {
      display: -webkit-box;
      display: flex;
      -webkit-box-align: center;
      align-items: center;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      flex-flow: column wrap;
    }
    .product_inner p {
      color: rgba(255, 255, 255, 0.9);
    }
    .product_inner button {
      border: 1px solid black;
      color: #FFF;
      border-radius: 3px;
      padding: 1em 3em;
      margin: 1em 0 0 0;
      background: none;
      cursor: pointer;
      -webkit-transition: background ease-in .25s;
      transition: background ease-in .25s;
    }
    .product_inner button:hover {
      background: white;
      color: #2B2D42;
    }
    
    .product_inner button:hover:before {
      color: #2B2D42;
    }
    .product_overlay {
      background: rgba(255, 255, 255, 0.9);
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      -webkit-transform: translateY(-500px);
      transform: translateY(-500px);
      opacity: 0;
      display: -webkit-box;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      flex-flow: column wrap;
      -webkit-box-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      align-items: center;
    }


  </style>

  <header>
    <ul>

      <span class='counter'></span>
    </i>
  </ul>
</header>
<div class='row'>
  
  <?php while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {?>

    <div class='product--blue'>
      <div class='product_inner'>
        <img src='<?php echo $linha['imagem'] ?>' width='150'>
        <p><?php echo $linha['nome_profissao'] ?></p>
        <a target="_blank" href="lista_profissoes.php?prof=<?php echo $linha['id_profissao'] ?>"> <button>Buscar</button></a>
      </div>
      <div class='product_overlay'>
      </div>
    </div>
	<?php } ?>

  
</div>
</body>
</html>