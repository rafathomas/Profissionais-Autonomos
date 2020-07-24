<?php

setcookie("ck_authorized", "true", 0, "/");



if (!isset($_SESSION["usuario"])) :
    header("location: index.php");
else :
    $usuario = $_SESSION["usuario"];
endif;
?>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"></a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" style="font-size: 20px; color: black;" aria-haspopup="true" aria-expanded="false">Bem vindo, <?php echo $_SESSION['usuario']; ?><span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="principal.php">Perfil</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="sair.php"><span class="glyphicon glyphicon-log-out"></span>Sair</a></li>
                </ul>
            </li>
        </ul>
    </div>
    </div>
</nav>