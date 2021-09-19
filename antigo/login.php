<?php
    include('./utils/conexao.php');

    if(isset($_POST['email'])) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM usuario WHERE email = '$email'";

        if ($result = $mysqli->query($sql)) {
            $usuarios = $result->num_rows;  
            if($usuarios == 0) {
                $error_message = 'Esse usuário não existe. Por favor, registre-se.';
            } else {
                $usuario = $result->fetch_assoc();
                if($usuario['senha'] == md5(md5($senha))) {
                    session_start();
                    $_SESSION['usuario'] = $usuario;
                    if($_SESSION['usuario']['nivel'] == 1) {
                        header('Location: ./admin.php');
                    } else {
                        header('Location: ./painel.php');
                    }
                } else {
                    $error_message = 'A senha está incorreta';
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./styles/login.css">
        <title>EntregaFácil - Login</title>
    </head>
    <body>
        <div id="wrapper">
            <div class="container">
                <form class="form-container" method="post" action="#">
                <div class="form-title">
                        <a href="/" style="text-decoration: none; color: #000;">
                            Entrega<span class="medium">Fácil</span>: Entrar
                        </a>
                    </div>
                    <?php
                        if(isset($_GET['sucess'])) {
                            echo '<div class="success-message">Usuário registrado com sucesso! Por favor, realize login abaixo.</div>';
                        }
                        if(isset($_GET['unauthorized'])) {
                            echo '<div class="error-message">Você não tem permissão para acessar isso. Faça login corretamente. </div>';
                        }
                        if(isset($error_message)) {
                            echo '<div class="error-message">' . $error_message . '</div>';
                        }
                    ?>
                    <input class="form-input" required minlength="5" type="email" name="email" placeholder="Email">
                    <input class="form-input" required minlength="3" type="password" name="senha" placeholder="Senha">
                    <div class="form-line">
                        <a href="signin.php">Não tem uma conta? Registre-se!</a>
                    </div>
                    <button class="form-button">Entrar</button>
                </form>
            </div>
        </div>
    </body>
</html>