<?php
include_once 'conexao/conexao.php';
$sql = "SELECT u.usuario FROM usuarios u LEFT JOIN clientes c ON u.usuario = c.usuario WHERE u.usuario = '".$_GET['nomeUsuario']."' OR c.usuario = '".$_GET['nomeUsuario']."'";
$consulta = $pdo->query($sql);
$qtd = $consulta->fetchAll();

$retorno = array();
if (count($qtd) > 0){
	$retorno = array(
		'error' => true,
		'msg' => 'Usuário já cadastrado!',
		'type' => 'error'
	);
}else{
	$retorno = array(
		'error' => false,
		'msg' => '',
		'type' => ''
	);
}

echo json_encode($retorno)

?>