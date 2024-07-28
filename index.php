<?php
$servername = "db";
$username = "root";
$password = "1234";
$dbname = "BancoTrabalho";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro: " . $conn->connect_error);
}
echo "Conectado.";

$conn->close();
?>
