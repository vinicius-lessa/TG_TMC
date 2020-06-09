<!-- TRADUÇÃO da PÁGINA -->
<?php
include('includes/process.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="FATEC São Roque - 2019 - PROJETO INTEGRADOR II: página 'Quem Somos'">
    <meta name="author" content="LUCAS JUSTI, VINÍCIUS LESSA | @contato: lucas.silva563@fatec.sp.gov.br - vinícius.lessa33@outlook.com">
    <!-- FONTES CDN: 
        - https://fonts.google.com/
        - https://fontawesome.com/
    -->
    <link rel="icon" href="images/favicon3.png">
    <title>Quem Somos</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- CSS padrão -->
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>

    <!-- Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- icones footer -->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

</head>

<body class="color-background-gradient">
    <div class="quemsomos">
        <header>
            <div>
                <?php
                // incluindo topo da página 
                include('includes/header.php');
                
                // breadcrumb
                breadcrumb(array('index.php' => 'Home', '' => Translate('Contatos')));

                include('includes/lang.php');
                ?>
            </div>
        </header>
        <article id="content">
            <div class="container">
                <h1 class="display-4 text-center mt-4 mb-5" tabindex="0"><?= Translate('QUEM SOMOS') ?></h1>
                <div class="row devrow mb-5">
                    <div class="col-lg-4">
                        <div class="devblock pt-4 pb-4 h-100">
                            <div class="col-lg-12 mb-3">
                                <img tabindex="0" class="rounded-circle devimg" src="images/developers/vinicius.webp" height="220" width="220" alt="Cabeça e ombros de um homem, vestindo capuz com barba no rosto, aparência entre 20, 25 anos, ao fundo uma moto e um carro">
                            </div>
                            <div class="col-lg-12">
                                <h2 class="text-center" tabindex="0">Vinícius Lessa</h2>
                                <p class="mt-4 mb-4" tabindex="0">Vinícius Lessa, atualmente cursando o 3º Semestre de Sistemas para Internet na FATEC SÃO ROQUE.</p>
                                <h5 class="text-left" tabindex="0">PELO QUE FOI RESPONSÁVEL:</h5>
                                <ul tabindex="0">
                                    <li>Criação das seções <a href="bestxxihome.php">MELHORES DO SÉCULO</a></li>
                                    <li>Elaboração do Algorítimo de Tradução.</li>
                                    <li>Elaboração do Algorítimo "Breadcrumb".</li>
                                    <li>Padronização utilizando INCLUDES.</li>
                                    <li>Página HOME, QUEM SOMOS.</li>
                                </ul>
                            </div>
                            <a class='sr-only sr-only-focusable' href='#topo'>
                                <div class='container text-center'>
                                    <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="devblock pt-4 pb-4 h-100">
                            <div class="col-lg-12 mb-3">
                                <img tabindex="0" class="rounded-circle devimg" src="images/developers/marcelo.webp" height="220" width="220" alt="Cabeça e ombros de um homem de cabelos longos, vestido com camiseta branca estampada, aparência de 25, 30 anos.">
                            </div>
                            <div class="col-lg-12">
                                <h2 class="text-center" tabindex="0">Marcelo Fernando</h2>
                                <p class="mt-4 mb-4" tabindex="0">Marcelo, guitarrista amador, palmeirense, apaixonado por música e tecnologia.
                                    Bem humorado, atualmente trabalha com cobranças extrajudiciais e estuda sistemas para internet na FATEC São Roque.</p>
                                <h5 class="text-left" tabindex="0">PELO QUE FOI RESPONSÁVEL:</h5>
                                <ul tabindex="0">
                                    <li>Criação da seção <a href="pchome.php">PC</a></li>
                                    <li>Edição de sua seção no CSS</li>
                                    <li>Elaboração das tags descritivas de accessibilidade.</li>
                                </ul>
                            </div>
                            <a class='sr-only sr-only-focusable' href='#topo'>
                                <div class='container text-center'>
                                    <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="devblock pt-4 pb-4 h-100">
                            <div class="col-lg-12 mb-3">
                                <img tabindex="0" class="rounded-circle devimg" src="images/developers/zara.webp" height="220" width="220" alt="Rosto de um homem usando óculos, trajando camisa xadrez, aparenta ter 25, 30 anos.">
                            </div>
                            <div class="col-lg-12">
                                <h2 class="text-center" tabindex="0">Fernando Zara</h2>
                                <p class="mt-4 mb-4" tabindex="0">Fernando Zara é um estudante, ex-chefe de cozinha formado em gastronomia, hoje programador FLuig com linguagem javascript na empresa Soulpay soluções de pagamentos.</p>
                                <h5 class="text-left" tabindex="0">PELO QUE FOI RESPONSÁVEL:</h5>
                                <ul tabindex="0">
                                    <li>Criação da seção <a href="devcriators.php">DESENVOLVEDORES DE GAMES</a></li>
                                    <li>Edição de sua seção no CSS</li>
                                    <li>Páginas CRIAR CONTA, NORMAS DE UTILIZAÇÃO</li>
                                </ul>
                            </div>
                            <a class='sr-only sr-only-focusable' href='#topo'>
                                <div class='container text-center'>
                                    <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div><!-- /.row -->

                <div class="row devrow mb-5">
                    <div class="col-lg-4">
                        <div class="devblock pt-4 pb-4 h-100">
                            <div class="col-lg-12 mb-3">
                                <img tabindex="0" class="rounded-circle devimg" src="images/developers/anderson.webp" height="220" width="220" alt="Homem com barba, usando camiseta de super-heróis, ao fundo uma cama beliche e uma janela do lado direito">
                            </div>
                            <div class="col-lg-12">
                                <h2 class="text-center" tabindex="0">Anderson Nascimento</h2>
                                <p class="mt-4 mb-4" tabindex="0"> Anderson estudante 28 anos,amante de (gibis,mangas,Animes,Tokusatsu),gosto de tocar guitarra e brinco na bateria tambem. Amante de Death Metal,formado técnico em eletroeletrônica ,programação gosto de Python e C# amo Ufologia,Planetas, ocultismo e outras artes históricas.
                                    <h5 class="text-left" tabindex="0">PELO QUE FOI RESPONSÁVEL:</h5>
                                    <ul tabindex="0">
                                        <li>Criação da seção <a href="videogameshome.php">VIDEO-GAMES</a></li>
                                        <li>Edição de sua seção no CSS</li>
                                        <li>Mudança de Fonte e cor das minhas paginas para Acessibilidade</li>
                                        <li>Correção de problemas</li>
                                    </ul>
                            </div>
                            <a class='sr-only sr-only-focusable' href='#topo'>
                                <div class='container text-center'>
                                    <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="devblock pt-4 pb-4 h-100">
                            <div class="col-lg-12 mb-3">
                                <img tabindex="0" class="rounded-circle devimg" src="images/developers/ismael.webp" height="220" width="220" alt="Rosto de um homem com meio sorriso, usando óculos, ao fundo uma parede azul">
                            </div>
                            <div class="col-lg-12">
                                <h2 class="text-center" tabindex="0">Ismael Espíndola</h2>
                                <p class="mt-4 mb-4" tabindex="0">Ismael Prazeres Espíndola, estudante de Sistemas para Internet na FATEC São Roque, 22 anos de idade, viciado em Warface e Warframe e alguns outros FPS.</p>
                                <h5 class="text-left" tabindex="0">PELO QUE FOI RESPONSÁVEL:</h5>
                                <ul tabindex="0">
                                    <li>Criação da seção <a href="classicoshome.php">CLÁSSICOS</a></li>
                                    <li>Criação do background da Home</li>
                                    <li>Desenvolvimento de Mockups</li>
                                    <li>Criação e adaptação de algumas das Imagens do Portal</li>
                                </ul>
                            </div>
                            <a class='sr-only sr-only-focusable' href='#topo'>
                                <div class='container text-center'>
                                    <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="devblock pt-4 pb-4 h-100">
                            <div class="col-lg-12 mb-3">
                                <img tabindex="0" class="rounded-circle devimg" src="images/developers/lucas.webp" height="220" width="220" alt="Rosto e ombros de um homem sério, com barba e ao fundo a natureza, lago, flores e montanhas">
                            </div>
                            <div class="col-lg-12">
                                <h2 class="text-center" tabindex="0">Lucas Justi</h2>
                                <p class="mt-4 mb-4" tabindex="0">Lucas é estudante, tem 28 anos. Gosta de música, jogos...(no shit!), Magic the Gathering e tudo do universo de O Senhor dos Anéis. Provavelmente passa mais tempo jogando do que deveria.</p>
                                <h5 class="text-left" tabindex="0">PELO QUE FOI RESPONSÁVEL:</h5>
                                <ul tabindex="0">
                                    <li>Criação da seção <a href="mobilereleases.php">MOBILE E PORTÁTEIS</a></li>
                                    <li>Elaboração do Algorítimo de Tradução.</li>
                                    <li>Elaboração do Algorítimo "Breadcrumb".</li>
                                    <li>Padronização utilizando INCLUDES.</li>
                                    <li>Páginas QUEM SOMOS, CONTATO.</li>
                                </ul>
                            </div>
                            <a class='sr-only sr-only-focusable' href='#topo'>
                                <div class='container text-center'>
                                    <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div><!-- /.row -->
                <div class="row devrow mb-5">
                    <div class="col-lg-4">
                        <div class="devblock pt-4 pb-4 h-100">
                            <div class="col-lg-12 mb-3">
                                <img tabindex="0" class="rounded-circle devimg" src="images/developers/gabrielshirai.webp" height="220" width="220" alt="Rosto de um homem de bigode e cavanhaque, cabelos longos caído sobre o rosto">
                            </div>
                            <div class="col-lg-12">
                                <h2 class="text-center" tabindex="0">Gabriel Shirai Monteiro</h2>
                                <p class="mt-4 mb-4" tabindex="0">Gabriel Shirai atualmente é estudante e tem 20 anos. Mora em um Buraco desconhecido chamado Mombaça e desconfia de seus vizinhos. Gosta de Música de estilos variados e de Jogar Video-Game.</p>
                                <h5 class="text-left" tabindex="0">PELO QUE FOI RESPONSÁVEL:</h5>
                                <ul tabindex="0">
                                    <li>Criação da seção <a href="lancamentoshome.php">LANÇAMENTOS</a></li>
                                    <li>Edição de sua seção no CSS</li>
                                </ul>
                            </div>
                            <a class='sr-only sr-only-focusable' href='#topo'>
                                <div class='container text-center'>
                                    <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div>
        </article>
        <!--Footer-->
        <?php
        // incluindo footer da página
        include('includes/footer.php');
        ?>
    </div>
</body>

</html>