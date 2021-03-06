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
        <title>Área do vendedor | Painel do Preço</title>
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
            <h1>Área do vendedor</h1>
            <span>Entre para começar a gerenciar seus produtos.</span>
        </main>
        
        <main id="form-area">
            <form action="#" method="post" autocomplete="off">
                <div class="input-group">
                    <label for="cnpj">CNPJ</label>
                    <input placeholder="Insira seu CNPJ" type="text" name="cnpj" id="cnpj" required>
                </div>
                <div class="input-group">
                    <label for="password">Senha</label>
                    <input placeholder="Insira sua senha" type="password" name="senha" id="senha" required>
                </div>
                <div class="input-button">
                    <button type="submit">Entrar</button>
                </div>
                <p>Ainda não tem uma conta? <a href="registro.php">Clique aqui para começar a vender.</a></p>
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