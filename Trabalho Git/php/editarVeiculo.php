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
    <title>Editar</title>
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
            <ul class="nav nav-pills justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" href="visualizarVeiculo.php" aria-disabled="true">Visualizar</a>
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

    </div>

    <div class="container text-cente">
        <div class="row justify-content-md-center">
            <div class="col-md-auto">
                <?php
                include 'crud.php';
                $codigo = $_GET["codigo"];
                $resultados = mostrarVeiculoAlterar($codigo);
                foreach ($resultados as $linha);
                ?>

                <form method="post" action="controle.php">
                    <fieldset>
                        <legend>
                            <h2>Editar Veiculo</h2>
                        </legend>
                        <p>
                            <label for="modelo">Modelo: </label>
                            <input type="text" name="modelo" id="modelo" required size=40 value="<?= $linha['modelo'] ?>"><br>
                        </p>
                        <p>
                            <label for="cep">CEP: </label>
                            <input type="text" name="cep" id="cep" size=40 required maxlength="14" value="<?= $linha['cep'] ?>"> <br>
                        </p>
                        <input type="hidden" name="codigo" value="<?= $linha['idM'] ?>">
                        <button type="submit" class="btn btn-primary" name="opcao" value="Editar">Editar</button>
                        <a class="btn btn-dark" href="visualizarVeiculo.php">Cancelar</a>
                    </fieldset>
                </form>
            </div>
        </div>
        <script src="jquery-3.7.1.min.js" type="text/javascript"></script>
        <script src="jquery.maskedinputs.js" type="text/javascript"></script>
        <script>
            jQuery(function($) {
                $("#cep").mask("99999-999");
            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>