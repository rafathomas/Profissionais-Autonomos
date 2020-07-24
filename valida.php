<?php

require('conexao/conexao.php');
require 'usuarioClass.php';

if (isset($_POST['usuario']) && !empty($_POST['usuario']) && isset($_POST['senha']) && !empty($_POST['senha'])) {


	$u = new Usuario();
	$usuario = addslashes($_POST['usuario']);
	$senha = addslashes($_POST['senha']);

	if ($u->login($usuario, $senha) == true) {
		if (isset($_SESSION['usuario'])) {
			if ($_SESSION['nivel'] == 2) {

				header("Location: principal.php");
			} else {

				header("Location: painel2.php");
			}
		} else {
			header("Location: index.php");
		}
	}
}
?>