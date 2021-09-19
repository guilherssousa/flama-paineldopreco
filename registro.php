<?php
    include('./utils/conexao.php');

    if(isset($_POST['loja'])) {
        $loja = $_POST['loja'];
        $cnpj = $_POST['cnpj'];
        $razaoSocial = $_POST['razaoSocial'];
        $telefone = $_POST['telefone'];
        $cep = $_POST['cep'];
        $endereco = $_POST['endereco'];
        $estado = $_POST['estado'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $confirmaSenha = $_POST['confirmaSenha'];
        $termos = $_POST['termos'];

        // Verifica se termos de uso foram aceitos
        if($termos != 'true') {
            echo '<script>alert("Você precisa aceitar os termos de uso para se cadastrar!");</script>';
            echo '<script>window.location.href = "./registro.php";</script>';
        }

        // Verifica se o campo de senha e confirmaSenha são iguais
        if($senha != $confirmaSenha){
            echo "<script>alert('Senhas não conferem!');</script>";
            echo "<script>window.location.href = './registro.php';</script>";
        }

        // Verifica se o campo de telefone é válido
        if(!preg_match("/^[0-9]{2}[0-9]{4,5}[0-9]{4}$/", $telefone)){
            echo "<script>alert('Telefone inválido!');</script>";
            echo "<script>window.location.href = './registro.php';</script>";
        }

        $sql = "INSERT INTO loja (loja, cnpj, razaoSocial, telefone, cep, endereco, estado, email, senha, confirmaSenha) VALUES ('$loja', '$cnpj', '$razaoSocial', '$telefone', '$cep', '$endereco', '$estado', '$email', '$senha', '$confirmaSenha')";
    }
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preload" href="/fonts/Dystopian Regular.ttf" as="font" crossOrigin="" />
        <link rel="preload" href="/fonts/Dystopian Bold.ttf" as="font" crossOrigin="" />
        <link rel="shortcut icon" href="./assets/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="./styles/global.css">
        <link rel="stylesheet" href="./styles/forms.css">
        <title>Cadastro de vendedor | Painel do Preço</title>
    </head>
    <body>
        <nav id="navbar">
            <div class="brand-container">
                <a href="./" class="brand-logo">
                    <img src="./assets/logo.svg" alt="Painel do Preço">
                    <span class="logo-typo">
                        <span>painel do preço</span>
                    </span>
                </a>
            </div>
            <div class="navigation-container">
                <a href="lojas-verificadas.php" class="link">
                    <img src="./assets/shield.svg" alt="Lojas confiáveis">
                    <span>Lojas verificadas</span>
                </a>
                <a href="perguntas-frequentes.php" class="link">
                    <img src="./assets/q-a.svg" alt="Perguntas frequentes">
                    <span>Perguntas frequentes</span>
                </a>
                <a href="login.php" class="link">
                    <img src="./assets/store.svg" alt="Anuncie aqui">
                    <span>Anuncie aqui</span>
                </a>
            </div>
        </nav>

        <main id="form-top">
            <h1>Cadastro de vendedor</h1>
            <span>Você está a um passo de começar a anunciar seus produtos no painel do preço.</span>
        </main>
        
        <main id="form-area">
            <form action="#" method="post"  autocomplete="off">
                <div class="input-group">
                    <label for="loja">Nome da loja (fantasia)</label>
                    <input placeholder="Insira o nome fantasia" type="text" id="loja" name="loja" required>
                </div>
                <div class="input-group">
                    <label for="cnpj">CPNJ</label>
                    <input placeholder="Insira seu CPNJ" type="text" id="cnpj" name="cnpj" required>
                </div>
                <div class="input-group">
                    <label for="razaoSocial">Razão social</label>
                    <input placeholder="Insira a razão social" type="text" id="razaoSocial" name="razaoSocial" required>
                </div>
                <div class="input-group">
                    <label for="telefone">Número de telefone</label>
                    <input placeholder="Insira o número de telefone" type="tel" id="telefone" name="telefone" required>
                    <span class="secondary-label">O telefone deve ter 9 dígitos! Ex.: 12 3456 7890</span>
                </div>
                <div class="input-group">
                    <label for="telefone">CEP</label>
                    <input placeholder="Insira o CEP" type="text" id="cep" name="cep" required>
                </div>
                <div class="input-group">
                    <label for="telefone">Endereço</label>
                    <input placeholder="Insira o endereço físico" type="text" id="endereco" name="endereco" required>
                </div>
                <div class="input-group">
                    <label for="estado">Estado</label>
                    <select id="estado" name="estado">
                        <option value="Acre">Acre</option>
                        <option value="Alagoas">Alagoas</option>
                        <option value="Amapá">Amapá</option>
                        <option value="Amazonas">Amazonas</option>
                        <option value="Bahia">Bahia</option>
                        <option value="Ceará">Ceará</option>
                        <option value="Distrito Federal">Distrito Federal</option>
                        <option value="Espírito Santo">Espírito Santo</option>
                        <option value="Goiás">Goiás</option>
                        <option value="Maranhão">Maranhão</option>
                        <option value="Mato Grosso">Mato Grosso</option>
                        <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                        <option value="Minas Gerais">Minas Gerais</option>
                        <option value="Pará">Pará</option>
                        <option value="Paraíba">Paraíba</option>
                        <option value="Paraná">Paraná</option>
                        <option value="Pernambuco">Pernambuco</option>
                        <option value="Piauí">Piauí</option>
                        <option value="Rio de Janeiro">Rio de Janeiro</option>
                        <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                        <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                        <option value="Rondônia">Rondônia</option>
                        <option value="Roraima">Roraima</option>
                        <option value="Santa Catarina">Santa Catarina</option>
                        <option value="São Paulo">São Paulo</option>
                        <option value="Sergipe">Sergipe</option>
                        <option value="Tocantins">Tocantins</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="email">Endereço de email</label>
                    <input placeholder="Insira o endereço de email" type="email" id="email" name="email" required>
                </div>
                <div class="input-group">
                    <label for="senha">Senha</label>
                    <input placeholder="Insira sua senha" type="password" id="senha" name="senha" required>
                    <span class="secondary-label">! Mínimo de 6 dígitos.</span>
                </div>
                <div class="input-group">
                    <label for="senha">Confirmar sua senha</label>
                    <input placeholder="Confirme sua senha" type="password" id="confirmaSenha" name="confirmaSenha" required>
                </div>
                <input type="checkbox" value="true" name="termos"></input>
                Estou ciente dos <span class="underline">termos de uso.</span>
                <div class="input-button">
                    <button type="submit">Registrar</button>
                </div>
                <p>Já tem conta? <a href="login.php">Clique aqui para entrar</a></p>
            </form>
        </main>

        <footer id="footer">
            <div style="display: flex;">
                <div id="footer-main" class="brand-container">
                        <a href="./" class="brand-logo">
                            <span class="logo-typo">
                                <span>painel do preço</span>
                            </span>
                        </a>
                    </div>
                    <div class="navigation-container">
                        <a href="lojas-verificadas.php" class="link">
                            <span>Lojas verificadas</span>
                        </a>
                        <a href="#" class="link">
                            <span>Perguntas frequentes</span>
                        </a>
                        <a href="#" class="link">
                            <span>Anuncie aqui</span>
                        </a>
                    </div>
                </div>
                <div id="footer-social">
                    <p>R. Apólo, 661 - Pavuna, Rio de Janeiro - RJ, 21520-340</p>
                    <div class="social-media">
                        <a href="#" class="link">
                            <img src="./assets/Facebook.svg" alt="Facebook">
                        </a>
                        <a href="#" class="link">
                            <img src="./assets/Twitter.svg" alt="Twitter">
                        </a>
                        <a href="#" class="link">
                            <img src="./assets/Instagram.svg" alt="Instagram">
                        </a>
                        <a href="#" class="link">
                            <img src="./assets/Linkedin.svg" alt="Linkedin">
                        </a>
                        <a href="#" class="link">
                            <img src="./assets/Github.svg" alt="Github">
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>