<?php
include 'conexao.php';
function buscarUsuario($nome)
{
    connect();
    $resultados = query("SELECT * FROM dono WHERE nome='$nome'");
    close();
    return $resultados;
}
