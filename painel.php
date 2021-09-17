<?php
    session_start();

    if(!isset($_SESSION['usuario'])) {
        session_destroy();
        header("Location: login.php?unauthorized=1");
    };
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EntregaFácil - Painel</title>

        <link rel="stylesheet" href="./styles/painel.css">
    </head>
    <body>
        <div id="wrapper">
            <aside class="sidebar">
                <a class="brand-container" href="index.php">
                    <img class="brand-logo" src="./assets/logo.svg" alt="EntregaFácil">
                    <p class="brand-name">Entrega<span class="bold-span">Fácil</span></p>
                </a>
                <ul>
                    <a href="painel.php">
                        <li>
                            <img src="./assets/home.png" alt="Início">
                            Início
                        </li>
                    </a>
                    <a href="entregas.php">
                        <li>
                            <img src="./assets/box.png" alt="Entregas">
                            Entregas
                        </li>
                    </a>
                    <a href="#">
                        <li>
                            Sair
                        </li>
                    </a>
                </ul>
            </aside>
        </div>
        <script src="./scripts/painel.js"></script>
    </body>
</html>