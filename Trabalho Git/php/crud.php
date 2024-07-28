<?php
include 'conexao.php';
function mostrarVeiculo($codigoR)
{
    connect();
    $resultados = query("SELECT * FROM moto WHERE idD=$codigoR");
    close();
    return $resultados;
}

function mostrarVeiculoAlterar($codigo)
{
    connect();
    $resultados = query("SELECT * FROM moto WHERE idM=$codigo");
    close();
    return $resultados;
}

function alterarVeiculo($codigo, $modelo, $cep)
{
    connect();
    query("UPDATE moto SET modelo='$modelo', cep='$cep' WHERE idM=$codigo");
    close();
}
