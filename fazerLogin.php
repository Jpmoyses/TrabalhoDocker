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

<!DOCTYPE html>
<html lang="pt-br">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Login</title>
</head>

<style>
    fieldset {
        border: 2px solid black !important;
        margin: 10px;
        padding: 30px;
    }

    input {
        margin: 8px;
    }
</style>

<body>
    <div class="container">
        <header class="d-flex justify-content-center py-3 mb-4 border-bottom">
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="visualizarItens.php" class="nav-link disabled">Visualizar</a></li>
            </ul>
        </header>
    </div>

    <div class="container text-cente">
        <div class="row justify-content-md-center">
            <div class="col-md-auto">
                <form method="post" action="controleUsuario.php">
                    <fieldset>
                        <legend>
                            <h2>Login</h2>
                        </legend>
                        <p>
                            <label for="nome">Nome: </label>
                            <input type="text" name="nome" id="nome" size=40 required><br>
                        </p>
                        <p>
                            <label for="senha">Senha: </label>
                            <input type="password" name="senha" id="senha" size=40 required><br>
                        </p>
                        <button type="submit" class="btn btn-primary" name="opcao" value="Login">Login</button>
                    </fieldset>
                </form>
            </div>
        </div>

</body>

</html>