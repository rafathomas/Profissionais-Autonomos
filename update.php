<?php
include('conexao/conexao.php');

$up = $_POST['cpf'];
$usuario = $_POST['usuario'];


$stmt = $pdo->prepare("UPDATE `usuarios` SET `cpf` = '$up' WHERE `usuarios`.`usuario` = '$usuario'");

if ($stmt->execute()) {
    header('Location: perfil.php?msg=Atualizado com Sucesso&tipo=success');
} else {
    header('Location: perfil.php?msg=Erro ao atualizar&tipo=danger');
}

