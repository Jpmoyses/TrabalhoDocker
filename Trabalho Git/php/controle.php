<?php
include 'crud.php';

$opcao = $_POST["opcao"];
switch ($opcao) {

    case 'Editar':
        $codigo = $_POST["codigo"];
        $modelo = $_POST["modelo"];
        $cep = $_POST["cep"];
        alterarVeiculo($codigo, $modelo, $cep);
        header("Location: visualizarVeiculo.php");
        break;
}
