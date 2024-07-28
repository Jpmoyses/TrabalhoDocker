<?php
include 'crudUsuario.php';

$opcao = $_POST["opcao"];
switch ($opcao) {
    case 'Login':
        $nome = $_POST["nome"];
        $senha = md5($_POST["senha"]);
        $resultado = buscarUsuario($nome);
        foreach ($resultado as $banco);
        if ($nome === $banco["nome"]) {
            if ($senha === $banco["senha"]) {
                session_start();
                $_SESSION["nome"] = $nome;
                $_SESSION["codigo"] = $banco["idD"];
                $_SESSION['expira'] = time() + 300;
                header("Location: visualizarVeiculo.php");
            } else {
                echo "<script>alert('Senha Incorreta!'); </script>";
                echo "<script>window.location = 'fazerLogin.php'; </script>";
            }
        } else {
            echo "<script>alert('Nome Incorreto!'); </script>";
            echo "<script>window.location = 'fazerLogin.php'; </script>";
        }
        break;

    case 'Sair':
        session_start();
        session_destroy();
        echo "<script>alert('Destruiu a sessão!');</script>";
        echo "<script>window.location = 'fazerLogin.php';</script>";
        break;
}
