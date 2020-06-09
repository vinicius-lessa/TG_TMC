<?php
// TRADUZ A PÁGINA 
  include('includes/process.php');
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="FATEC São Roque - 2019 - PROJETO INTEGRADOR II: 3ª Página do tema de 'Games para PC', informações relacionadas aos games para pc.">

    <meta name="author" content="Marcelo Fernando Silva Barros">
    <link rel="icon" href="images/favicon3.png">
    <title>PC GAMER</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- CSS padrão -->
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>

    <!-- Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/mine.js"></script>

    <!-- icones footer -->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

</head>
<div class="color-background-gradient">

    <body class="color-background-gradient videogames">

        <header>
            <div class="videogames">
                <?php
        
        include('includes/header.php');
        // breadcrumb        
        breadcrumb(array('index.php' => 'Home', 'PORTAL/portal-games/pchome.php' => Translate('Hitória dos jogos para pc'), 'PORTAL/portal-games/pconline.php' => Translate('Ascenção dos jogos online para PC'), '' => Translate('Tipos de computadores')));
        
        include('includes/lang.php');
        ?>
            </div>

        </header>
        <article>
            <div class="container" id="content">
                <div class="row mr-1 ml-1 mt-4">
                    <h1 class="text-uppercase" tabindex="0"><?= Translate('Tipos de computadores') ?></h1>
                    <p class="text-justify" tabindex="0"> Os computadores podem ser classificados pelo porte. Existem os de grande porte, mainframes, médio porte,
                        minicomputadores e pequeno porte microcomputadores, divididos em duas categorias: os de mesa (desktops) e os
                        portáteis (notebooks e handhelds).
                        Conceitualmente todos eles realizam funções internas idênticas, mas em escalas diferentes.
                        Os Mainframes se destacam por terem alto poder de processamento e muita capacidade de memória, e controlam
                        atividades com grande volume de dados, sendo de custo bastante elevado. Operam em MIPS (milhões de
                        instruções por segundo).</p>
                    <h1 class="text-uppercase" tabindex="0"><?= Translate('Diferenças entre pc gamer e videogames') ?></h1>
                    <p class="text-justify" tabindex="0">No início a principal diferença entre videogames e computadores é que bastava colocar um cartucho em um
                        console para jogar, enquanto no PC era necessário fazer instalações. anto um videogame quanto um computador
                        rodando um jogo são basicamente constituídos pelos seguintes elementos: processador, memória e placa de
                        vídeo. O processador faz os cálculos necessários, executa as funções do jogo, é o cérebro. A memória guarda
                        tanto esses dados do processador quanto os gráficos em “estado bruto”, como as texturas dos modelos 3D. A
                        placa de vídeo processa esses gráficos e os exibe na tela.
                        Em computadores, esses valores estão sempre mudando de usuário para usuário, pois cada um tem sua
                        configuração, com potência variável, enquanto nos videogames todos têm o mesmo equipamento. Desta maneira,
                        para tentar vender um jogo de PC para o máximo de pessoas possível, os produtores costumam utilizar
                        requisitos mínimos baixos.</p>
                    <h1 class="text-uppercase" tabindex="0"><?= Translate('Hardware, especificações e inovações') ?></h1>
                    <p class="text-justify" tabindex="0"> As produtoras indicam quais configurações o seu computador deverá ter para rodar os jogos. Itens como
                        memória ram, processador, espaço no HD e um dos principais componentes que é a placa de vídeo. Existem
                        modelos de placas de vídeo que chegam a custar mais de R$3.000,00, levando em consideração estes pontos o
                        custo-benfício de um PC Gamer não é grande, pois com o passar dos anos ele se tornará obsoleto, comparado ao
                        videogame que tem uma vida ativa mais prolongada, pelo menos até o momento.</p>
                    <p class="text-justify" tabindex="0">Um exemplo de configuração poderosa para o ano de 2019 PC gamer para rodar jogos com ótimo desempenho em
                        Full HD ou até em 1440p, o Acer GX-783-BR13 é a melhor escolha. A configuração por aqui é de respeito, com
                        um processador Core i7 de 3,4GHz, 16GB de memória RAM, HD híbrido com SSD de 8GB para o sistema operacional
                        e uma placa de vídeo dedicada GeForce GTX 1060 de 6GB, um setup de ponta para garantir uma ótima performance
                        até mesmo nos games mais pesados, como The Witcher 3, Far Cry 5, Assassin's Creed Origins e outros
                        lançamentos do momento. Se você quer uma máquina potente e com alto desempenho, esta é uma ótima opção,
                        porém se prepare para gastar ao menos R$5.000,00 em uma máquina com estas especificações</p>
                </div>
                <a class='sr-only sr-only-focusable' href='#topo'>
                    <div class='container text-center'>
                        <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                    </div>
                </a>
            </div>

            <div class="container">
                <div class="separator"></div>
                <h2 class="text-uppercase text-center" tabindex="0"><?= Translate('Diferença entre PC GAMER de alto custo e um de baixo custo') ?>:</h2>
                <iframe class="col-sm-12" width="560" height="315" src="https://www.youtube.com/embed/v5d95eHjWW8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen tabindex="0"></iframe>
            </div>
            <a class='sr-only sr-only-focusable' href='#topo'>
                <div class='container text-center'>
                    <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                </div>
            </a>
            <div class="separator mb-3 mt-4"></div>
        </article>

        <div class="album py-3" style="color: white;">
            <div class="container">

                <div class="row">
                    <div class="col-md-4">
                        <div class="cardmarcelo">
                            <img tabindex="0" class="card-img-top" src="images/Marcelo/prince.webp" alt="Introdução do jogo Prince of Persia" width="100" height="200">
                            <div class="card-body">
                                <p class="card-text" tabindex="0"><?= Translate('Momento de diversão, jogue o clássico PRINCE OF PERSIA!') ?>
                                </p>
                                <a href="https://www.retrogames.cz/play_102-DOS.php" target="_blank" class="btn btnmarcelo btn-light my-2" tabindex="0">Jogue agora!</a>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="cardmarcelo mb-4 box-shadow">
                            <img tabindex="0" class="card-img-top" src="images/Marcelo/historypc.webp" alt="Computador de mesa antigo" width="100" height="200">
                            <div class="card-body">
                                <p class="card-text" tabindex="0"><?= Translate('Conheça a história dos jogos para PC e suas evoluções') ?>
                                </p>
                                <a href="pchome.php" class="btn btnmarcelo btn-light my-2" tabindex="0">Leia mais...</a>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="cardmarcelo mb-4 box-shadow">
                            <img tabindex="0" class="card-img-top" src="images/Marcelo/online.webp" alt="Jogador profissional de E-sport" width="100" height="200">
                            <div class="card-body">
                                <p class="card-text" tabindex="0"><?= Translate('Conheça o universo dos jogos On-line para PC') ?></p>
                                <a href="pconline.php" class="btn btnmarcelo btn-light my-2" tabindex="0"> Leia mais...</a>
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

            <?php
      include('includes/footer.php');
      ?>

        </div>
    </body>
</div>

</html>