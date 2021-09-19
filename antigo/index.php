<?php
    include('./utils/conexao.php');

    $button = 'Conheça agora';
    $navbutton = 'Entrar';
    $buttonLink = './login.php';

    session_start();

    if(isset($_SESSION['usuario'])) {
        $button = 'Painel de controle';
        $navbutton = 'Painel';

        if($_SESSION['usuario']['nivel'] == 1) {
            $buttonLink = './admin.php';
        } else {
            $buttonLink = './painel.php';
        }
    };

    function fillData($mysqli, $table) {
        $sql = "SELECT COUNT(*) AS n_$table FROM $table";
        $object = $mysqli->query($sql);
        if($object) {
            return $object->fetch_assoc()["n_$table"];
        } else {
            return 0;
        }
    }
    
    $entregas = fillData($mysqli, 'entrega');
    $usuarios = fillData($mysqli, 'usuario');
    $ebox = fillData($mysqli, 'ebox');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./styles/index.css">
        <title>EntregaFácil</title>
    </head>
    <body>
        <div id="wrapper">
            <nav>
                <a class="brand-container" href="index.php">
                    <img src="./assets/logo.svg" alt="EntregaFácil">
                    <p class="brand-name">Entrega<span class="bold-span">Fácil</span></p>
                </a>
                <div class="navigation-links">
                    <a class="navigation-link" href="#servicos">Serviços</a>
                    <a class="navigation-link" href="#precos">Preços</a>
                    <a class="navigation-button" href="<?=$buttonLink?>">
                        <img src="./assets/login.svg" alt="<?=$navbutton?>">
                        <?=$navbutton?>
                    </a>
                    <img src="./assets/dark-mode.svg" alt="Modo Escuro">
                </div>
            </nav>

            <div id="main">
                <div class="main-info-container">
                    <p class="title">Nós podemos <br> <span class="bold-span">facilitar sua vida.</span></p>
                    <p class="description">
                        Desfrute do nosso serviço de entregas para áreas restritas via pontos estratégicos e <span class="medium-span">diga adeus a dor de cabeça na hora de comprar online.</span></p>
                    </p>
                    <a class="navigation-button" href="<?=$buttonLink?>">
                        <img src="./assets/login.svg" alt="Entrar">
                        <?=$button?>
                    </a>
                </div>
                <div class="main-hero-container">
                    <img src="./assets/main-hero.svg" alt="Principal">
                </div>
            </div>

            <div id="servicos">
                <div class="servicos-hero-container">
                    <img src="./assets/servicos-hero.svg" alt="Servicos">
                </div>
                <div class="servicos-info-container">
                    <p class="servicos-title">Receber suas compras<br>nunca foi tão fácil.</p>
                    <p class="servicos-description">Você poderá definir seu endereço fora de casa para compras e evitar aquela burocracia de lidar com taxas de entrega mais alta ou área de risco.</p>
                    <div class="check-list">
                        <div class="check">
                            <img src="./assets/check.svg" alt="Vantagens">
                            <p class="check-text">Proteção de endereço físico</p>
                        </div>
                        <div class="check">
                            <img src="./assets/check.svg" alt="Vantagens">
                            <p class="check-text">Economia na taxa de frete</p>
                        </div>
                        <div class="check">
                            <img src="./assets/check.svg" alt="Vantagens">
                            <p class="check-text">Logística eficiente</p>
                        </div>
                        <div class="check">
                            <img src="./assets/check.svg" alt="Vantagens">
                            <p class="check-text">Compartilhamento de caixa</p>
                        </div>  
                    </div>
                </div>
            </div>

            <div id="info-overlay">
                <div class="card">
                    <img src="./assets/user.svg" alt="Mais de <?= $usuarios ?> usuários">
                    <div class="card-item">
                        <div class="card-title"><?= $usuarios ?></div>
                        <div class="card-subtitle">Clientes registrados</div>
                    </div>
                </div>
                <div class="card">
                    <img src="./assets/server.svg" alt="Mais de <?= $ebox ?> pontos de retirada">
                    <div class="card-item">
                        <div class="card-title"><?= $ebox ?></div>
                        <div class="card-subtitle">Pontos de retirada</div>
                    </div>
                </div>
                <div class="card">
                    <img src="./assets/pin.svg" alt="Mais de <?= $entregas ?> entregas">
                    <div class="card-item">
                        <div class="card-title"><?= $entregas ?></div>
                        <div class="card-subtitle">Entregas feitas</div>
                    </div>
                </div>
            </div>

            <div id="precos">
                <div class="pricing-title">Escolha um plano</div>
                <div class="pricing-subtitle">Nós vamos te ajudar a achar um plano que se encaixe no seu bolso.</div>

                <div class="price-container">
                    <div class="price-card">
                        <div class="price-top">
                            <img src="./assets/individual.svg" alt="Plano Individual">

                            <div class="price-card-name medium-span">Plano Individual</div>
                            <div class="price-goods-list">
                                <div class="price-good">
                                    <img src="./assets/check-2.svg" alt="Vantagens">
                                    <div class="price-good-text">5 encomendas grátis ao mês*</div>
                                </div>
                                <div class="price-good">
                                    <img src="./assets/check-2.svg" alt="Vantagens">
                                    <div class="price-good-text">Limite de 2 dispositivos conectado</div>
                                </div>
                                <div class="price-good">
                                    <img src="./assets/check-2.svg" alt="Vantagens">
                                    <div class="price-good-text">Retirada em apenas um ponto por vez</div>
                                </div>
                            </div>
                        </div>

                        <div class="price-bottom">
                            <div class="price-value-title unique medium-span">Grátis</div>
                            <button class="price-button">Selecionar</button>
                        </div>
                    </div>
                    <div class="price-card">
                        <div class="price-top">
                            <img src="./assets/family.svg" alt="Plano Família">

                            <div class="price-card-name medium-span">Plano Premium</div>
                            <div class="price-goods-list">
                                <div class="price-good">
                                    <img src="./assets/check-2.svg" alt="Vantagens">
                                    <div class="price-good-text">10 encomendas grátis ao mês*</div>
                                </div>
                                <div class="price-good">
                                    <img src="./assets/check-2.svg" alt="Vantagens">
                                    <div class="price-good-text">Limite de 4 dispositivos conectados</div>
                                </div>
                                <div class="price-good">
                                    <img src="./assets/check-2.svg" alt="Vantagens">
                                    <div class="price-good-text">Retirada em até três pontos simultâneos</div>
                                </div>
                                <div class="price-good">
                                    <img src="./assets/check-2.svg" alt="Vantagens">
                                    <div class="price-good-text">Programa de Fidelidade Básico</div>
                                </div>
                            </div>
                        </div>

                        <div class="price-bottom">
                            <div class="price-value-title medium-span">R$29,99<span class="sub">/mês</span></div>
                            <div class="light">(ou <span class="sub">R$345,00</span>/ano)</div>
                            <button class="price-button">Selecionar</button>
                        </div>
                    </div>
                    <div class="price-card">
                        <div class="price-top">
                            <img src="./assets/bussiness.svg" alt="Plano Pequeno Negócio">

                            <div class="price-card-name medium-span">Plano Pequeno Negócio</div>
                            <div class="price-goods-list">
                                <div class="price-good">
                                    <img src="./assets/check-2.svg" alt="Vantagens">
                                    <div class="price-good-text">25 encomendas grátis ao mês*</div>
                                </div>
                                <div class="price-good">
                                    <img src="./assets/check-2.svg" alt="Vantagens">
                                    <div class="price-good-text">Limite de 6 dispositivos conectados</div>
                                </div>
                                <div class="price-good">
                                    <img src="./assets/check-2.svg" alt="Vantagens">
                                    <div class="price-good-text">Retirada em até cinco pontos simultâneos</div>
                                </div>
                                <div class="price-good">
                                    <img src="./assets/check-2.svg" alt="Vantagens">
                                    <div class="price-good-text">Programa de Fidelidade Premium</div>
                                </div>
                                <div class="price-good">
                                    <img src="./assets/check-2.svg" alt="Vantagens">
                                    <div class="price-good-text"></div>
                                </div>
                            </div>
                        </div>

                        <div class="price-bottom">
                            <div class="price-value-title medium-span">R$59,99<span class="sub">/mês</span></div>
                            <div class="light">(ou <span class="sub">R$620,00</span>/ano)</div>
                            <button class="price-button">Selecionar</button>
                        </div>
                    </div>  
                </div>

                <span class="bussiness-contact">Para Planos Empresariais: Envie um email para empresarial@entregafacil.com.br e iremos fazer um orçamento. </span>
            </div>
        </div>
        <footer>
            ©2021 EntregaFácil Rua Capote Valente, 39 Pinheiros – CEP 05409-000 – São Paulo, SP   
        </footer>
    </body>
</html>