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
        <link rel="stylesheet" href="./styles/home.css">
        <title>Início | Painel do Preço</title>
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
        <main id="home-main">
            <div class="info-container">
                <div>
                    Procurando algo pelo 
                    <span class="bold">
                        melhor preço?
                    </span>
                    <span class="underline">
                        Deixa com a gente.
                    </span> ;)
                </div>
                <form action="#">
                    <input
                        type="search"
                        name="query"
                        autocomplete="off"
                        placeholder="Pesquise usando palavras-chave. Ex: smartphones"
                    >
                    <button type="submit">Vamos lá!</button>
                </form>
                <div>
                    Mais de <span class="underline">1.000 produtos</span> listados.
                </div>        
            </div>
            <div class="hero-container">
                <img src="./assets/hero.png" alt="Vigia do preço">
            </div>
        </main>
        <main id="home-best-awards">
            <h2>Melhores produtos por avaliação dos usuários</h2>
        </main>
        <div class="slider">
            <div class="slider-container">
                <div class="item">
                    <div class="product-image" style="background-image: url('./assets/notebook.jpg');">
                    </div>
                    <h3 class="product-name">iPhone 7 32GB Preto Matte</h3>
                    <span class="product-store">Vendido por Apolo Informática</span>

                    <div class="price-and-awards">
                        <span class="product-awards">
                            <img src="./assets/star.svg" alt="Avaliação do produto" />
                            4.8/5.0
                        </span>
                        <span class="product-price">R$ 1.000,00</span>
                    </div>
                </div>
                <div class="item">
                    <div class="product-image" style="background-image: url('./assets/notebook.png');">
                    </div>
                    <h3 class="product-name">iPhone 7 32GB Preto Matte</h3>
                    <span class="product-store">Vendido por Apolo Informática</span>

                    <div class="price-and-awards">
                        <span class="product-awards">
                            <img src="./assets/star.svg" alt="Avaliação do produto" />
                            4.8/5.0
                        </span>
                        <span class="product-price">R$ 1.000,00</span>
                    </div>
                </div>
                <div class="item">
                    <div class="product-image" style="background-image: url('./assets/iphone-12.png');">
                    </div>
                    <h3 class="product-name">iPhone 7 32GB Preto Matte</h3>
                    <span class="product-store">Vendido por Apolo Informática</span>

                    <div class="price-and-awards">
                        <span class="product-awards">
                            <img src="./assets/star.svg" alt="Avaliação do produto" />
                            4.8/5.0
                        </span>
                        <span class="product-price">R$ 1.000,00</span>
                    </div>
                </div>
                <div class="item">
                    <div class="product-image" style="background-image: url('./assets/iphone-12.png');">
                    </div>
                    <h3 class="product-name">iPhone 7 32GB Preto Matte</h3>
                    <span class="product-store">Vendido por Apolo Informática</span>

                    <div class="price-and-awards">
                        <span class="product-awards">
                            <img src="./assets/star.svg" alt="Avaliação do produto" />
                            4.8/5.0
                        </span>
                        <span class="product-price">R$ 1.000,00</span>
                    </div>
                </div>
            </div>
        </div>
        <main id="home-categories">
            <h2>Categorias</h2>
            <span>Quer descobrir o que as lojas estão vendendo? Aproveite as categorias!</span>
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