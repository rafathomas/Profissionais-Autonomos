<?php
sleep(2);
include_once 'conexao/conexao.php';

if (isset($_POST['cadastrar']) && $_POST['cadastrar'] == 'sim') :
    $novos_campos = array();
    $campos_post = $_POST['campos'];
    $respostas = array();
    foreach ($campos_post as $indice => $valor) {
        $novos_campos[$valor['name']] = $valor['value'];
    }


    if (!strstr($novos_campos['email'], '@')) {
        $respostas['erro'] = 'sim';
        $respostas['getErro'] = 'Email invalido, preencha com um e-mail valido';
    } elseif ($novos_campos['senha'] != $novos_campos['csenha']) {
        $respostas['erro'] = 'sim';
        $respostas['getErro'] = 'As senhas informadas não correspondem';
    } elseif (!(strlen($novos_campos['telefone']) >= 14) && (strlen($novos_campos['telefone']) <= 14)) {
        $respostas['erro'] = 'sim';
        $respostas['getErro'] = 'O telefone informado não é valido!';
    } elseif (!(strlen($novos_campos['celular']) >= 14) && (strlen($novos_campos['celular']) <= 15)) {
        $respostas['erro'] = 'sim';
        $respostas['getErro'] = 'O celular informado não é valido!';
    } else {
        $inserir_banco = $pdo->prepare("INSERT INTO `clientes` SET nome = ?, sexo = ?, email = ?, telefone = ?, celular = ?, usuario = ?, senha = ?, csenha= ?, nivel = ?");
        $array_sql = array(
            $novos_campos['nome'],
            $novos_campos['sexo'],
            $novos_campos['email'],
            $novos_campos['telefone'],
            $novos_campos['celular'],
            $novos_campos['usuario'],
            $novos_campos['senha'],
            $novos_campos['csenha'],
            $novos_campos['nivel'],
        );
        
        if ($inserir_banco->execute($array_sql)) {
            $respostas['erro'] = 'nao';
            $respostas['msg'] = 'Cliente inserido com sucesso!';
        } else {
            $respostas['erro'] = 'sim';
            $respostas['getErro'] = 'Nao foi possível inserir o cliente no banco de dados';
        }
    }

    echo json_encode($respostas);
endif;
