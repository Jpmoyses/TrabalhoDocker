<?php
session_start();
if (!isset($_SESSION['nome'])) {
    header("Location: fazerLogin.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Visualizar</title>
</head>

<body>
    <div class="container">
        <header class="d-flex justify-content-center py-3 mb-4 border-bottom">
            <ul class="nav nav-pills justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="visualizarVeiculo.php" aria-disabled="true">Visualizar</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><?php echo $_SESSION['nome'] ?></a>
                    <ul class="dropdown-menu">
                        <form method="post" action="controleUsuario.php">
                            <li><button class="dropdown-item" type="submit" name="opcao" value="Sair">Logout</button></li>
                        </form>
                    </ul>
                </li>
            </ul>
        </header>
    </div>

    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Modelo</th>
                    <th scope="col">CEP</th>
                    <th scope="col">Alterar</th>
                </tr>
            </thead>
            <?php
            include 'crud.php';
            $codigoR = $_SESSION["codigo"];
            $resultados = mostrarVeiculo($codigoR);
            foreach ($resultados as $linha) {
                echo
                "<tr>",
                "<td>$linha[modelo]</td>",
                "<td>$linha[cep]</td>",
                "<td>",
                "<a class='btn btn-success' href='editarVeiculo.php?codigo=$linha[idM]'>Editar</a></td>",
                "</tr>";
            }
            ?>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>