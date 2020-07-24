<style>
	#box {
		background-color: #1DB411;
		position: fixed;
		top: 0;
		left: 0;
		right: 0;
		height: 40px;
	}

	#box2 {
		background-color: #E91B10;
		position: fixed;
		top: 0;
		left: 0;
		right: 0;
		height: 40px;
	}

	h2 {
		font-size: 19px;
		top: -10px;
		position: fixed;
		left: 10px;
		color: white;
	}

	@keyframes hide {
		from {
			opacity: 1
		}

		to {
			opacity: 0
		}
	}

	#box {
		animation: hide 2s 2s forwards;
		padding: 15px;
		margin-bottom: 20px;
		border: 1px solid transparent;
		border-radius: 4px;
	}

	#box2 {
		animation: hide 2s 2s forwards;
		padding: 15px;
		margin-bottom: 20px;
		border: 1px solid transparent;
		border-radius: 4px;
	}
</style>

<?php

function verifica_dados($con)
{
	if (isset($_POST['env']) && $_POST['env'] == "form") {
		$email = addslashes($_POST['email']);
		$sql = $con->prepare("SELECT * FROM profissionais WHERE email = ?");
		$sql->bind_param("s", $email);
		$sql->execute();
		$get = $sql->get_result();
		$total = $get->num_rows;

		if ($total > 0) {
			$dados = $get->fetch_assoc();
			add_dados_recover($con, $email);
		} else {
		}
	}
}

function add_dados_recover($con, $email)
{
	$rash = md5(rand());
	$sql = $con->prepare("INSERT INTO recover_solicitation (email, rash) VALUES (?, ?)");
	$sql->bind_param("ss", $email, $rash);
	$sql->execute();

	if ($sql->affected_rows > 0) {
		enviar_email($con, $email, $rash);
	}
}


use PHPMailer\PHPMailer\PHPMailer;

function enviar_email($con, $email, $rash)
{

	include("./PHPMailer/src/PHPMailer.php");
	include("./PHPMailer/src/SMTP.php");
	include("./PHPMailer/src/Exception.php");

	$mail = new PHPMailer();
	//$mail->SMTPDebug  = 1;
	$mail->isSMTP(true);
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPKeepAlive = true;
	$mail->Mailer = "smtp";
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = "ssl";
	$mail->CharSet = 'UTF-8';
	$mail->Username = '@gmail.com';
	$mail->Password = '';
	$mail->Port = 465; //587; 
	$mail->From = '@gmail.com';
	$mail->FromName = 'Contato';
	$mail->AddAddress($email);
	$mail->isHTML(true);
	$mail->Subject = "RECUPERAR SENHA";
	$mail->Body    = nl2br("<h2>Você solicitou uma nova senha?</h2>
			<hr>
			<h3>Se sim, aqui está o link para você recuperar a sua senha:</h3>
			<p>Para recuperar sua senha, acesse este link: <a href='" . sitedir . "/alterar-senha.php?pagina=alterar&rash={$rash}'>" . sitedir . "/alterar-senha.php?pagina=alterar&rash={$rash}</a></p>
			<hr>
			<h5>Não foi você quem solicitou? Se não ignore este email, porém alguém tentou alterar seus dados.</h5>
			<hr>
			Atenciosamente, Suporte.");
	$mail->AltBody = 'TESTE'; //Corpo da mensagem caso seja HTML;

	// Envia o email
	if ($mail->Send()) {
		echo '<div id="box"><h2>Mensagem enviada com sucesso</h2></div>';
	} else {
		echo '<div id="box2"><h2>Não encontramos o e-mail digitado</h2></div>';
	}
}


function verifica_rash($con, $rash)
{
	$sql = $con->prepare("SELECT * FROM recover_solicitation WHERE rash = ? AND status = 0");
	$sql->bind_param("s", $rash);
	$sql->execute();
	$get = $sql->get_result();
	$total = $get->num_rows;

	if ($total > 0) {
		if (isset($_POST['env']) && $_POST['env'] == "upd") {
			$nsenha = addslashes(md5($_POST['senha']));
			$nsenha = addslashes(md5($_POST['senha']));
			$dados = $get->fetch_assoc();
			atualiza_senha($con, $dados['email'], $nsenha);
			deleta_rashs($con, $dados['email']);
			echo "<br><div class='alert alert-success'>Senha alterada com sucesso.</div>";
			//echo '<script> alert("Senha alterada com sucesso");window.location = "index";</script>';
		}
	} else {
		echo "<br><div class='alert alert-danger'>Rash inválida.</div>";
	}
}

function atualiza_senha($con, $email, $senha)
{
	$sql = $con->prepare("UPDATE usuarios SET senha = ?, senhac = ? WHERE email = ?");
	$sql->bind_param("sss", $senha, $senha, $email);
	$sql->execute();

	if ($sql->affected_rows > 0) {
		return true;
	} else {
		return false;
	}
}

function deleta_rashs($con, $email)
{
	$sql = $con->prepare("DELETE FROM recover_solicitation WHERE email = ?");
	$sql->bind_param("s", $email);
	$sql->execute();

	if ($sql->affected_rows > 0) {
		return true;
	} else {
		echo $con->error;
	}
}

function redireciona($dir)
{
	echo "<meta http-equiv='refresh' content='3; url={$dir}'>";
}
