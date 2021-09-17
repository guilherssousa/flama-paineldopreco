<?php
    include('./utils/conexao.php');

    if(isset($_POST['nome'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $cpf = $_POST['cpf'];

        // checa se já existe algum usuário com o mesmo email ou cpf
        $sql = "SELECT * FROM usuario WHERE email = '$email' OR cpf = '$cpf' OR telefone = '$telefone'";

        if ($result = $mysqli->query($sql)) {
            $usuarios = $result->num_rows;
            if($usuarios > 0) {
                $error_message = 'Já existe um usuário com esse CPF, número de telefone ou email. Tente entrar com suas credenciais.';
            } else {
                $senhaCriptografada = md5(md5($senha));
                $sql = "INSERT INTO usuario (nome, email, senha, telefone, cpf) VALUES ('$nome', '$email', '$senhaCriptografada', '$telefone', '$cpf')";

                if ($result = $mysqli->query($sql)) {
                    if($result) {
                        header('Location: /login.php?sucess=1');
                    };
                    // Free result set
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
        <title>EntregaFácil - Registrar</title>
        <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
        <script src="./dist/jquery.mask.js"></script>
    </head>
    <body>
        <div id="wrapper">
            <div class="container">
                <form class="form-container" method="post" action="#" autocomplete="off">
                    <div class="form-title">
                        <a href="/" style="text-decoration: none; color: #000;">
                            Entrega<span class="medium">Fácil</span>: Cadastro
                        </a>
                    </div>
                    <?php
                        if(isset($error_message)) {
                            echo '<div class="error-message">' . $error_message . '</div>';
                        }
                    ?>

                    <div>
                        <label for="nome">Nome completo</label>
                        <input 
                            class="form-input"
                            required
                            minlength="3"
                            type="text"
                            name="nome"
                            placeholder="Fulano da Silva"
                        >
                    </div>
                    <div class="input-column">
                        <div>
                            <label for="telefone">Número de telefone</label>
                            <input 
                                class="form-input"
                                required 
                                minlength="11"
                                maxlength="11"
                                type="tel" 
                                name="telefone"
                                id="telefone"
                                placeholder="(01) 23456-7891"
                            >
                        </div>
                        <div>
                            <label for="cpf">CPF</label>
                            <input 
                                class="form-input"
                                required 
                                minlength="11"
                                maxlength="11"
                                type="text"
                                name="cpf"
                                placeholder="123-456-789.10"
                                id="cpf"
                            >
                        </div>
                    </div>
                    <div>
                        <label for="email">Endereço de Email</label>
                        <input 
                            class="form-input"
                            required 
                            minlength="5" 
                            type="email" 
                            name="email" 
                            placeholder="Email"
                        >
                    </div>
                    <div>
                        <label for="senha">Senha (mínimo de 6 caracteres)</label>
                        <input 
                            class="form-input"
                            required 
                            minlength="6" 
                            type="password" 
                            name="senha" 
                            placeholder="Senha"
                            autocomplete="new-password"
                        >
                    </div>
                    <div class="form-line">
                        <a href="login.php">Já tem uma conta? Entre agora!</a>
                    </div>
                    <button class="form-button">Cadastrar</button>
                </form>
            </div>
        </div>
    </body>
    <script src="./scripts/signin.js"></script>
</html>