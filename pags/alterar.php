<form method="POST">
	<br>
	<br>
	<br>
	<br>
	<h4>INSIRA A SUA NOVA SENHA</h4>
	<hr>
	<label>Digite sua nova senha</label>
	<input type="password" name="senha" class="form-control" required><br>

	<input type="submit" value="Efetuar Alterações" class="btn btn-outline-success btn-lg btn-block">
	<input type="hidden" name="env" value="upd">
</form>
<?php verifica_rash($con, $_GET['rash']);?>