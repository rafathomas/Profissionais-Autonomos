<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/modal.css">
</head>

<body>
    <a href="#login-modal" data-toggle="modal">

        <div class="r">
            <?php
            session_start();
            if (!isset($_SESSION['usuario'])) { ?>
                <div class="button">Acessar</div>
            <?php
            } else { ?>

            <?php include('posLogin.php');
            } ?>
        </div>

    </a>
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="loginmodal-container">

                <h1>Faça login na sua conta</h1>
                <form method="POST" action="valida.php">
                    <input id="username" name="usuario" type="text" placeholder="Usuário" required autofocus>
                    <input id="password" name="senha" type="password" placeholder="Senha" required>
                    
                    <a href="recuperar.php"> <p>Esqueceu a senha? </p>  
                   
                    <input type="submit" name="btnLogin" class="login loginmodal-button" value="Login">
                </form>
                <a href="opcao.php"><input type="button" class="login loginmodal-button1" value="Criar Conta"></a>
               
            </div>
        </div>
    </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

 
</body>

</html>