<!DOCTYPE html>
<html>

<head>
	<title>Cadastro de Usuários</title>
	<link rel="stylesheet" type="text/css" href="css/cliente.css">
	<meta charset="utf-8">
	<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
	<script src="js/functioncliente.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="js/mask.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="js/alert.js" type="text/javascript" charset="utf-8" async defer></script>

</head>

<body>
	<div class="resp"></div>
	<form id="formulario" method="post" action="" enctype="multipart/form-data" name="formulario">
		<ul id="progress">
			<li class="ativo">Conta</li>
			<li>Perfil</li>
			
		</ul>
		<fieldset>
			<h2>Configurações da conta</h2>
			<h3>Algumas configurações</h3>
			<input type="text" class='campo' name="usuario" id="usuario" placeholder="Usuário">
			<input type="password" class='campo' name="senha" placeholder="Senha" autocomplete="off">		
			<input type="password" class='campo' name="csenha" placeholder="Confirmar Senha" autocomplete="off">
			<input type="hidden" name="nivel" value="1">
			<input type="button" name="next1" class="next acao" id="proxUser" value="Próximo">
		</fieldset>
		<fieldset>
			<h2>Perfil</h2>
			<h3>Perfil Pessoal</h3>
			<input type="text" class='campo' name="nome" placeholder="Nome Completo">
			<input type="email" class='campo' name="email" placeholder="E-mail">
			<input type="text" class='campo telefone' name="telefone" placeholder="Telefone">
			<input type="text" class='campo celular' name="celular" placeholder="Celular">
			<select name="sexo" id="select">
				<option value="M">Feminino</option>
				<option value="F">Masculino</option>
				<option value="O">Outro</option>
			</select>
			<br>
			<br>
			<input type="button" name="prev" class="prev acao" value="Anterior">
			<input type="submit" name="next" class="acao" value="Enviar">
		</fieldset>
	</form>

	<script type="text/javascript">
		$(function() {

			$("#usuario").change(function() {
				var nomeUsuario = $("#usuario").val();

				$.get('valida_usuario.php?nomeUsuario=' + nomeUsuario, function(data) {

					data = JSON.parse(data);
					if (data.error) {
						Swal.fire({
							icon: 'error',
							title: data.msg,
							showConfirmButton: true,
						}).then((result) => {
							if (result.value) {
								$("#usuario").val('');
								$('#proxUser').hide();
							}
						});
					} else {
						$('#proxUser').show();
					}

				});
			});

		});
	</script>
</body>

</html>