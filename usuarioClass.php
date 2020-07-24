<?php

class Usuario
{
    public function login($usuario, $senha)
    {
        global $pdo;


        $sql = "SELECT * FROM clientes WHERE usuario = :usuario AND senha = :senha";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":usuario", $usuario);
        $sql->bindValue(":senha", $senha);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $dado = $sql->fetch();
            $_SESSION['id'] = $dado['id'];
            $_SESSION['usuario'] = $dado['usuario'];
            $_SESSION['nivel'] = $dado['nivel'];

            return true;
        } else {
            $sql_prof = "SELECT * FROM profissionais WHERE usuario = :usuario AND senha = :senha";
            $sql_prof = $pdo->prepare($sql_prof);
            $sql_prof->bindValue(":usuario", $usuario);
            $sql_prof->bindValue(":senha", $senha);
            $sql_prof->execute();

            if ($sql_prof->rowCount() > 0) {
                $dado = $sql_prof->fetch();
                $_SESSION['usuario'] = $dado['usuario'];
                $_SESSION['cpf'] = $dado['cpf'];
                $_SESSION['nivel'] = $dado['nivel'];

                return true;
            } else {
                return false;
            }
        }
    }
}
