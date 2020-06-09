<!-- TRADUÇÃO da PÁGINA -->
<?php 
    include('includes/process.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="FATEC São Roque - 2019 - PROJETO INTEGRADOR II: página 01 do tema de 'Jóogos Marcantes do Século XXI', contendo informações sobre os games que mais marcaram desde o ano 2000!">
    <meta name="author" content="VINÍCIUS LESSA | @contato: vinícius.lessa33@outlook.com">
    <!-- FONTES CDN: 
        - https://fonts.google.com/
        - https://fontawesome.com/
    -->
    <link rel="icon" href="images/favicon3.png">
    <title>Melhores Games do Século XXI</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
    <!-- CSS padrão -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- icones footer -->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

</head>

<body class="bestxxi">
    <div>
        <header>
            <div>
                <?php
                 // incluindo topo da página                 
                    include('includes/header.php');   
                            
                    // breadcrumb
                    breadcrumb(array('index.php' => 'Página Inicial', '' => Translate('Melhores - Rankging')));
                                            
                    include('includes/lang.php');  
            ?>
            </div>
        </header>

        <article class="container" id="content">            
            <div class="row mt-5 inverter">
                <div class="col-lg-8">
                    <div class="container p-0">
                        <div class="row">
                            <div class="col-md-12 p-0">
                                <div class="p-0 m-1 mb-3">
                                    <div>
                                        <h1 class="mb-1" tabindex="0"><?= Translate('GAMES MARCANTES DESSE SÉCULO') ?></h1>
                                        <h3 class="mb-4" tabindex="0"><?= Translate('TOP FIVE: Os games que marcaram época') ?></h3>
                                        <p tabindex="0">
                                            A questão “videogames são arte?” continua a ser debatida exaustivamente entre críticos e entusiastas.
                                            Cada lado do conflito possui argumentos plausíveis, mas nós da SUPER já decidimos o nosso lado: videogames
                                            são uma forma de arte, e ponto final. E, se essa premissa é verdadeira, então fica fácil definir que há 
                                            jogos que são muito mais importantes do que outros – tão importantes que criaram gêneros ou estabeleceram 
                                            novos padrões.                                        
                                        </p>
                                        <p tabindex="0">
                                            Alguns não primam exatamente pela excelência técnica, mas abriram as portas para mudanças decisivas. Já 
                                            outros até podem ser considerados obras-primas – ou seja, representaram as melhores obras de seus respectivos 
                                            artistas e contribuíram de alguma maneira para o estabelecimento, a popularização e a evolução dessa arte.                           
                                        </p>
                                        <p tabindex="0">
                                            Durante os anos 60, os games eram produzidos para utilização em computadores de empresas ou universidades, já que os PCs ainda não eram difundidos. Somente com os primeiros fliperamas eles passaram a ser considerados produtos de apelo comercial.
                                        </p>
                                        <p tabindex="0">
                                            O primeiro console de videogame para ser ligado à TV foi o Magnavox Odyssey, lançado em 1972. Conforme a tecnologia avançava, os jogos ganharam cores e carisma, e surgiam os primeiros personagens marcantes, como Pac-Man e Donkey Kong.
                                        </p>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="embed-responsive embed-responsive-16by9" tabindex="0">
                                                <iframe class="embed-responsive-item"
                                                    src="https://www.youtube.com/embed/XN6yTjiG4PY"
                                                    allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <a class='sr-only sr-only-focusable' href='#topo'>
                                <div class='container text-center'>
                                    <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                                </div>
                            </a>
                    </div>
                </div>
                <aside class="col-lg-4 p-0 mt-1">
                    <div class="col p-0 asideblock">
                        <div class="p-3 aside h-100">
                            <h3 alt="Jogos do Século XXI" class="text-center pb-3" tabindex="0"><?= Translate('Jogos do Século XXI') ?></h3>                        
                            <div class="row pl-2 pr-2 mt-3 mb-3">
                                <div class="col-12" tabindex="0">
                                    <img class="border mb-1 img-fluid" src="images/Vinicius/thewitcher.webp" alt="Imagem Ilustrativa do jogo DE UICHER, com um Bruxo empunhando uma espada de aço, fundo vermelho com o título da franquia a sua direita.">
                                </div>
                                <div class="col-12">
                                    <h4 tabindex="0">The Witcher 3: Wild Hunt</h4>
                                    <h5 tabindex="0"><?= Translate('Ano Vencedor:') ?> 2018</h5>
                                    <p tabindex="0">CD Projekt RED - Microsoft Windows, PlayStation 4, Xbox One</p>
                                    <a href="bestxximarc.php" tabindex="0"><?= Translate('Saiba Mais') ?></a>
                                </div>
                            </div>
                            <div class="row pl-2 pr-2 mt-3 mb-2">
                                <div class="col-12" tabindex="0">
                                <img class="border mb-1 img-fluid" src="images/skyrim1.webp" alt="Imagem do jogo ISCAIRIN guerreiro com espada gritando, fundo cinza e nome do jogo a esqueda">
                                </div>
                                <div class="col-12">
                                    <h4 tabindex="0">The Elder Scrolls V: Skyrim</h4>
                                    <h5 tabindex="0"><?= Translate('Ano Vencedor:') ?> 2018</h5>
                                    <p tabindex="0">Bethesda Game Studios - Microsoft Windows, PlayStation 3, Xbox 360</p>
                                    <a href="bestxximarc.php" tabindex="0"><?= Translate('Saiba Mais')?></a>
                                </div>
                            </div>
                            <div class="row pl-2 pr-2 mt-2 mb-1">
                                <div class="col-12 mt-4">
                                    <h3 class="text-center" tabindex="0"><?= Translate('Prêmio - Jogos do Ano') ?></h3>
                                    <p tabindex="0">
                                        O Jogo do Ano (do inglês: "Game of the Year" ou "GOTY") é um título dado por várias premiações, 
                                        revistas, websites e organizações especializadas.
                                    </p>
                                    <a href="bestxxiyear.php" tabindex="0"><?= Translate('Saiba Mais') ?></a>
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
        <section class="container mt-4">            
            <!-- HR -->
            <div class="separator mt-3 w-100"></div>
            <div class="row mt-5 mb-5" style="background:">
                <div class="col-lg-6 blockimg allimg skyrim rounded" tabindex="0">
                    <img src="images/reddead1.jpg" class="imgarticle" alt="Imagem do jogo ISCAIRIN guerreiro com espada gritando, fundo cinza e nome do jogo a esqueda"/>
                </div>
                <div class="col-lg-6 placeblock-right" style="background:;">
                <h3 tabindex="0"><span class="place">1</span> THE ELDER SCROLLS V</h3>
                    <div class="m-0 mb-3 p-0">
                        <p class="mt-3" tabindex="0">Se existe uma frase que possa definir o
                            jogo The Elder Scrolls V: Skyrim, essa frase é: “Diga adeus à sua vida real”, e não há uma
                            definição melhor para ele, uma vez que você mergulha na história e começa a se aventurar em
                            mais um pedaço do reino de Tamriel.
                            Trata-se de uma aventura contínua, um mundo vasto e que transmite uma coisa não muito comum
                            em NPCs (personagens não jogáveis) do cenário: Vida. As pessoas nas cidades trabalhando, e
                            indo para suas casas para uma boa noite de sono, uma rotina que se repete dia após dia
                            dentro do jogo, e uma grande interação com o jogador.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mt-5 mb-5 invert" style="background:">
                <div class="col-lg-6 blockimg allimg reddead rounded" tabindex="0">
                    <img src="images/reddead1.jpg" class="imgarticle" alt="Imagem do jogo Red Dead Redemption cowboy apontando uma arma para o foco, tons vermelhos." />
                </div>
                <div class="col-lg-6 placeblock-left" style="background:;">
                    <h3 tabindex="0"><span class="place">2</span> RED DEAD REDEMPTION 2</h3>
                    <div class="m-0 mb-3 p-0">
                        <p class="mt-3" tabindex="0">
                            Red Dead Redemption 2, disponível para PS4 e Xbox One, é a continuação de um dos games mais
                            aclamados de todos os tempos. O título da Rockstar (produtora de GTA 5 e Bully) coloca os jogadores
                            na pele de Arthur Morgan, um fora da lei que precisa se reerguer junto de sua gangue e sobreviver no
                            coração dos Velho Oeste americano.
                        </p>
                        <p tabindex="0">
                            O game começa de forma lenta, talvez até um pouco maçante, como uma espécie de tutorial ao longo 
                            das primeiras missões para ajudá-lo a se situar naquele universo. 
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mt-5 mb-5" style="background:">
                <div class="col-lg-6 blockimg allimg gtasa rounded" tabindex="0">
                    <img src="images/reddead1.jpg" class="imgarticle" alt="Imagem do jogo GTA SAN ANDREAS, homem segurando arma caracterizado como bandido"/>
                </div>
                <div class="col-lg-6 placeblock-right" style="background:;">
                <h3 tabindex="0"><span class="place">3</span> GTA SAN ANDREAS</h3>
                    <div class="m-0 mb-3 p-0">
                        <p class="mt-3" tabindex="0">
                            Groove Street, assim como há 10 anos atrás, ainda é o lar do personagem CJ, Carl Johnson, 
                            protagonista do game, que retorna a Los Santos (uma versão genérica de Los Angeles) depois de 
                            saber da morte de sua mãe. Em contato com os velhos amigos, e seu irmão, Sweet, ele volta a se 
                            envolver com o mundo do crime e das batalhas de gangue.
                        </p>
                        <p tabindex="0">
                            Desde o primeiro até o último minuto de jogo, San Andreas é exatamente a mesma de 2004, 
                            com suas ruas largas, becos escuros, pedestres suspeitos e motoristas insanos. Estabelecimentos
                            comerciais, NPCs e pontos de interesse diversos também tiveram sua localização mantida no vasto 
                            smapa do game.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mt-5 mb-5 invert" style="background:">
                <div class="col-lg-6 blockimg allimg thewitcher rounded" tabindex="0">
                    <img src="images/reddead1.jpg" class="imgarticle" alt="Imagem Ilustrativa do jogo DE UICHER, com um Bruxo empunhando uma espada de aço, fundo vermelho com o título da franquia a sua direita." />
                </div>
                <div class="col-lg-6 placeblock-left" style="background:;">
                    <h3 tabindex="0"><span class="place">4</span> THE WITCHER 3</h3>
                    <div class="m-0 mb-3 p-0">
                        <p class="mt-3" tabindex="0">
                            The Witcher 3: Wild Hunt, como citamos, vem para finalizar a saga de Geralt. Isso 
                            não vai impedir de que saiam novos “The Witcher” ao longo dos próximos anos, mas Geralt
                            de Rivia vai terminar sua história por aqui, de forma bem inspirada e com momentos épicos
                            – dignos de grandes RPGs e similares.
                        </p>
                        <p tabindex="0">
                            Mas o fim não vai ser algo necessariamente agradável, como uma bela aposentadoria, e sim 
                            uma tarefa árdua que vai chegar ao bruxo quando menos ele espera. Geralt não é exatamente
                            o herói que está presente em RPGs épicos, e isso fica claro logo nos primeiros minutos de jogo.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row mt-5 mb-5" style="background:">
                <div class="col-lg-6 blockimg allimg lastofus rounded" tabindex="0">
                    <img src="images/reddead1.jpg" class="imgarticle" alt="Imagem do jogo DE LEST OFI US com os protagonistas olhando para a camera, virados de costa"/>
                </div>
                <div class="col-lg-6 placeblock-right" style="background:;">
                <h3 tabindex="0"><span class="place">5</span> THE LAST OF US</h3>
                    <div class="m-0 mb-3 p-0">
                        <p class="mt-3" tabindex="0">
                            O enredo de The Last of Us é um excelente exemplo de que os jogos podem também contar
                            uma história digna de uma obra literária. A trama gira em torno de Joel, que depois de perder sua filha tragicamente, precisa encontrar 
                            motivações para viver em um mundo dominado pelo caos, depois de uma contaminação em massa, que transforma seres humanos em criaturas horripilantes.
                            O caminho de Joel acaba cruzando o de Hellen, uma adolescente que pode possuir a cura para o vírus que contamina o mundo. Porém, além de protegê-la,
                            Joel começa a alimentar uma relação de pai e filha, o que ele nunca imaginou que pudesse vivenciar novamente.
                        </p>
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
    <!--Footer-->
    <?php
	// incluindo footer da página
	include('includes/footer.php');
    ?>
</body>

</html>