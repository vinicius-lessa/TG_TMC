<!-- TRADUZ PÁGINA -->
<?php 
    include('includes/process.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="TMC, site sobre anúnicios de equipamentos musicais.">

    <meta name="author" content="Vinícius Lessa, Suelen Jascinto e Anderson Nascimento">
    <link rel="icon" href="images/favicon3.png" alt="Logotipo do site, quatro círculos coloridos, alinhados em diagonal, dois círculos em cada diagonal">
    <title>TMC &#8226; Página Inicial</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
    <!-- CSS padrão -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/mine.js"></script>

    <!-- icones footer -->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
</head>

<body class="index">
    <div class="color-background-gradient">
        <header>
            <div>
                <?php
                // incluindo topo da página
                include('includes/header.php');    
            ?>
            </div>
            <div style="height: 55px;"></div>
            <div>
                <div id="imgheader">
                    <div class="nilblock">
                    </div>
                    <div id="linkheader">
                        <h1 class="display-4" style="color: white;" tabindex="0">Home Gamestuff</h1>
                        <h4 class="lead" tabindex="0"><?= Translate('O melhor conteúdo Gamer da WEB') ?></h4>
                        <a class="btn btn-outline-secondary mt-5" href="quemsomos.php" tabindex="0"><?= Translate('Saiba Mais') ?></a>
                    </div>
                    <div class="nilblock">
                    </div>
                </div>
            </div>
            <!-- ESCOLHE O IDIOMA -->
            <?php 
            include('includes/lang.php');  
        ?>
        </header>
        <article class="container" id="content">
            <div class="row">
                <div class="col-lg-8">
                    <div class="container p-0">
                        <div class="row">
                            <div class="col-md-12 p-0">
                                <div class="p-0 m-1 mb-3">
                                    <div class="blockimg allimg reddead rounded" tabindex="0">
                                        <img src="images/reddead1.webp" height="230" class="imgarticle" alt="Ilustração do jogo Red Dead Redemption: Desenho de um homem vestido com roupas de faroeste segurando um revolver calibre 38 em primeiro plano, ao fundo o sol do lado direito e sete homens montados em cavalos ao lado esquerdo" />
                                    </div>
                                    <div class="articlediv mt-2">
                                        <h2 tabindex="0">RED DEAD REDEMPTION 2:</h2>
                                        <p tabindex="0" class="text-justify">Red Dead Redemption 2 chega em 5 de novembro para o PC e o game recebeu um trailer de lançamento que mostra melhor como o game fica ainda mais bonito com resolução 4K e rodando a 60 quadros por segundo. O jogo está em pré-venda e dá bônus exclusivos, incluindo um título da Rockstar Games para PC de graça, conteúdos extras no Modo História, como o Cavalo de Guerra, o Kit de Sobrevivência de Fora da Lei e o Mapa do Tesouro Le Trésor des Morts, 50 Barras de Ouro em Red Dead Online e descontos nos upgrades para a Edição Especial e para a Edição Definitiva.</p>
                                        <a class="btn btn-light btn-sm btn-sm" role="button" href="bestxxihome.php" tabindex="0"><?= Translate('Saiba Mais') ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 p-0">
                                <div class="p-0 m-1">
                                    <div class="blockimg allimg skyrim rounded" tabindex="0">
                                        <img src="images/skyrim1.webp" height="230" class="imgarticle" alt="Imagem do jogo SKYRIM: Homem viking em posição de batalha, visto de cima" />
                                    </div>
                                    <div class="articlediv mt-2">
                                        <h2 tabindex="0">THE ELDER SCROLLS V: SKYRIM</h2>
                                        <p tabindex="0" class="text-justify">The Elder Scrolls 5: Skyrim, o RPG medieval da Bethesda ganhou uma versão remasterizada para PS4, Xbox One e PCs. A versão reformulada do jogo conta com diversas melhorias gráficas para deixar o jogo em sintonia com a capacidade de processamento dos novos computadores e consoles, chegando a rodar em 4K nativamente no PS4 Pro. Abaixo, você vai conhecer em detalhes as mudanças promovidas pela desenvolvedora no jogo para saber o que muda em relação ao jogo original, lançado em 2011 para PS3, Xbox 360 e PCs.</p>
                                        <a class="btn btn-light btn-sm" role="button" href="bestxxihome.php" tabindex="0"><?= Translate('Saiba Mais') ?></a>
                                    </div>
                                </div>
                            </div>
                            <a class='sr-only sr-only-focusable' href='#topo'>
                                <div class='container text-center'>
                                    <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                                </div>
                            </a>
                            <section class="col-12 mt-3 mb-5">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row p-3 mt-2 mb-2" style="background:  rgba(0,0,0,0.7);">
                                            <div class="col-lg-5" tabindex="0">
                                                <img class="img-fluid" src="images/Vinicius/lastofus1.webp" alt="Imagem do jogo The Last of Us: Menina com uma mochila, e uma escopeta nas costas, ao fundo homem com uma arma na mão e mochila nas costas na cidade abandonada pós apocalipse">
                                            </div>
                                            <div class="col-lg-7 mt-1">
                                                <h4 tabindex="0">The Last Of Us: Parte II</h4>
                                                <p tabindex="0" class="text-justify">The Last of Us Part 2, sofre um adiamento e agora será lançado apenas em 29 de maio de 2020.</p>
                                                <a class="btn btn-light btn-sm" role="button" href="lancamentoshome.php" tabindex="0"><?= Translate('Saiba Mais') ?></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row p-3 mt-2 mb-2" style="background:  rgba(0,0,0,0.7);">
                                            <div class="col-lg-5" tabindex="0">
                                                <img class="img-fluid" src="images/Vinicius/thewitcher.webp" alt="Imagem do jogo The Witcher 3: Guerreiro com longos cabelos brancos sacando uma espada">
                                            </div>
                                            <div class="col-lg-7 mt-1">
                                                <h4 tabindex="0">The Witcher 3</h4>
                                                <p tabindex="0" class="text-justify">The Witcher 3: Wild Hunt é a terceira versão da série que conta as aventuras de Geralt of Rivia.</p>
                                                <a class="btn btn-light btn-sm" role="button" href="lancamentoshome.php" tabindex="0"><?= Translate('Saiba Mais') ?></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row p-3 mt-2 mb-2" style="background:  rgba(0,0,0,0.7);">
                                            <div class="col-lg-5" tabindex="0">
                                                <img class="img-fluid" src="images/reddead1.webp" alt="Ilustração do jogo Red Dead Redemption: Desenho de um homem vestido com roupas de faroeste segurando um revolver calibre 38 em primeiro plano, ao fundo o sol do lado direito e sete homens montados em cavalos ao lado esquerdo" />
                                            </div>
                                            <div class="col-lg-7 mt-1">
                                                <h4 tabindex="0">Red Dead Redemption 2</h4>
                                                <p tabindex="0" class="text-justify">Game da Rockstar para Xbox One e PS4, terá uma série de novidades para a semana do Halloween.</p>
                                                <a class="btn btn-light btn-sm" role="button" href="bestxxihome.php" tabindex="0"><?= Translate('Saiba Mais') ?></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row p-3 mt-2 mb-2" style="background:  rgba(0,0,0,0.7);">
                                            <div class="col-lg-5" tabindex="0">
                                                <img class="img-fluid" src="images/skyrim1.webp" alt="Imagem do jogo SKYRIM: Homem viking em posição de batalha, visto de cima" />
                                            </div>
                                            <div class="col-lg-7 mt-1">
                                                <h4 tabindex="0">The Elder Scrolls V</h4>
                                                <p tabindex="0" class="text-justify">Quinto jogo da série de RPG medieval da Bethesda, se passa 200 anos após os eventos de Oblivion.</p>
                                                <a class="btn btn-light btn-sm" role="button" href="bestxxihome.php" tabindex="0"><?= Translate('Saiba Mais') ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class='sr-only sr-only-focusable' href='#topo'>
                                    <div class='container text-center'>
                                        <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                                    </div>
                                </a>
                            </section>
                        </div>
                    </div>
                </div>

                <aside class="col-lg-4 p-0 mt-1" style="height: 100%;">
                    <div class="col-md p-0 asideblock">
                        <div class="p-3" style="background: rgba(0,0,0,0.7);">
                            <h3 class="text-center pb-3"><?= Translate('ÚLTIMAS NOVIDADES') ?></h3>
                            <div class="row pl-2 pr-2 mt-4 mb-4">
                                <div class="col-5" tabindex="0">
                                    <img class="img-fluid" src="images/Marcelo/pcgamer.webp" alt="Computador Gamer ao fundo, a frente placa de vídeo do lado esquerdo e processador do lado direito">
                                </div>
                                <div class="col-7">
                                    <h4 tabindex="0">PC Gamers</h4>
                                    <p tabindex="0">Fique por dentro das notícias sobre PC.</p>
                                    <a class="btn btn-light btn-sm" role="button" href="pchome.php" tabindex="0"><?= Translate('Saiba Mais') ?></a>
                                </div>
                            </div>

                            <div class="row pl-2 pr-2 mt-4 mb-4">
                                <div class="col-5" tabindex="0">
                                    <img class="img-fluid" src="images/Marcelo/doom.webp" alt="Imagem do jogo Doom: Guerreiro espacial metralhando demônios do espaço">
                                </div>
                                <div class="col-7">
                                    <h4 tabindex="0">DOOM!</h4>
                                    <p tabindex="0">Momento de diversão, jogue o clássico DOOM!</p>
                                    <a class="btn btn-light btn-sm" role="button" href="pchome.php" tabindex="0"><?= Translate('Saiba Mais') ?></a>
                                </div>
                            </div>
                            <div class="row pl-2 pr-2 mt-4 mb-4">
                                <div class="col-5" tabindex="0">
                                    <img class="img-fluid" src="images/Anderson/ralph.webp" alt="Ilustração de um homem careca com óculos, Ralph Baer criador do videogame Magnavox Odissey, primeiro video-game da história">
                                </div>
                                <div class="col-7">
                                    <h4 tabindex="0"><?= Translate('História: Video-games') ?></h4>
                                    <p tabindex="0">As notícias mais recentes sobre o mundo dos videogames.</p>
                                    <a class="btn btn-light btn-sm" role="button" href="videogameshome.php" tabindex="0"><?= Translate('Saiba Mais') ?></a>
                                </div>
                            </div>
                            <div class="row pl-2 pr-2 mt-4 mb-4">
                                <div class="col-5" tabindex="0">
                                    <img class="img-fluid" src="images/imagempadrao.webp" alt="Ilustração de um joystick de videogame, Playstation 4">
                                </div>
                                <div class="col-7">
                                    <h4 tabindex="0"><?= Translate('Jogos Online: PC') ?></h4>
                                    <p tabindex="0">Ascenção dos jogos online para PC.</p>
                                    <a class="btn btn-light btn-sm" role="button" href="pchome.php" tabindex="0"><?= Translate('Saiba Mais') ?></a>
                                </div>
                            </div>
                            <a class='sr-only sr-only-focusable' href='#topo'>
                                <div class='container text-center'>
                                    <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                                </div>
                            </a>
                        </div>
                        <div class="p-3 mt-4 h-100" style="height: 100%; background: rgba(0,0,0,0.7);">
                            <h3 class="text-center pb-3 mt-4 mb-4" tabindex="0"><?= Translate('Lançamentos Mobile') ?></h3>
                            <div class="row pl-2 pr-2 mt-3 mb-1">
                                <div class="col-12">
                                    <h4 tabindex="0">Mario Kart Tour</h4>
                                    <p tabindex="0">Mario Kart dá a volta ao mundo!</p>
                                </div>
                                <div class="col-12 text-right">
                                    <a class="btn btn-light btn-sm" role="button" href="mobilereleases.php" tabindex="0"><?= Translate('Saiba Mais') ?></a>
                                </div>
                            </div>
                            <div class="row pl-2 pr-2 mt-2 mb-3">
                                <div class="col-12">
                                    <h4 tabindex="0">Harry Potter: Wizards Unite</h4>
                                    <p tabindex="0">Descubra o seu potencial bruxo.</p>
                                </div>
                                <div class="col-12 text-right">
                                    <a class="btn btn-light btn-sm" role="button" href="mobilereleases.php" tabindex="0"><?= Translate('Saiba Mais') ?></a>
                                </div>
                            </div>
                            <div class="row pl-2 pr-2 mt-2 mb-3">
                                <div class="col-12">
                                    <h4 tabindex="0">Human: Fall Flat</h4>
                                    <p tabindex="0">Descubra o multijogador de plataforma de quebra-cabeças mais engraçado!</p>
                                </div>
                                <div class="col-12 text-right">
                                    <a class="btn btn-light btn-sm" role="button" href="mobilereleases.php" tabindex="0"><?= Translate('Saiba Mais') ?></a>
                                </div>
                            </div>
                            <div class="row pl-2 pr-2 mt-2 mb-3">
                                <div class="col-12">
                                    <h4 tabindex="0">Gears Pop</h4>
                                    <p tabindex="0">Lute pela supremacia nos campos de batalha!</p>
                                </div>
                                <div class="col-12 text-right">
                                    <a class="btn btn-light btn-sm" role="button" href="mobilereleases.php" tabindex="0"><?= Translate('Saiba Mais') ?></a>
                                </div>
                            </div>
                            <div class="row pl-2 pr-2 mt-2 mb-3">
                                <div class="col-12">
                                    <h4 tabindex="0">Minecraft Earth</h4>
                                    <p tabindex="0">Explore o mundo real com realidade aumentada.</p>
                                </div>
                                <div class="col-12 text-right">
                                    <a class="btn btn-light btn-sm" role="button" href="mobilereleases.php" tabindex="0"><?= Translate('Saiba Mais') ?></a>
                                </div>
                            </div>
                            <a class='sr-only sr-only-focusable' href='#topo'>
                                <div class='container text-center'>
                                    <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </aside>
            </div>
        </article>
    </div>
    <!--Footer-->
    <?php
	// incluindo footer da página
	include('includes/footer.php');
    ?>
</body>

</html>