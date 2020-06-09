<?php
// TRADUZ A PÁGINA 
  include('includes/process.php');
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="FATEC São Roque - 2019 - PROJETO INTEGRADOR II: 1ª Página do tema de 'Games para PC', informações relacionadas aos games para pc.">

    <meta name="author" content="Marcelo Fernando Silva Barros">
    <link rel="icon" href="images/favicon3.png">
    <title>PC GAMES</title>

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

    <body class="color-background-gradient personal-computer">

        <header>
            <div class="videogames">
                <?php
        
        include('includes/header.php');
        
        // breadcrumb        
        breadcrumb(array('index.php' => 'Home', '' => Translate('Hitória dos jogos para pc')));
   
        include('includes/lang.php');
        ?>
            </div>

        </header>

        <section>
            <div class="container" id="content">
                <div class="row mr-1 ml-1 mt-4">
                    <h1 class="text-uppercase" tabindex="0"><?= Translate('Hitória dos jogos para pc') ?></h1>
                    <p class="text-justify" tabindex="0">A história dos jogos digitais teve início quando os acadêmicos começaram a projetar jogos simples,
                        simuladores e programas de inteligência artificial, como parte de suas pesquisas em ciência da computação.
                        Somente a partir das décadas de 1970 e 1980 é que os jogos eletrônicos se tornaram populares, quando jogos
                        de arcade, console de jogos eletrônicos e jogos de computador foram introduzidos ao público em geral. Desde
                        então, os jogos eletrônicos tornaram-se uma forma popular de entretenimento e uma parte da cultura moderna
                        em diversas regiões do mundo.</p>
                    <h1 class="text-uppercase" tabindex="0"><?= Translate('Jogos exclusivos para pc') ?></h1>
                    <p class="text-justify" tabindex="0">Durante muitos anos alguns jogos eram disponíveis apenas para computadores, exemplos como The Sims, SimCity
                        e alguns simuladores. Durante muitos anos o Steam imperou incontestado no reino do PC, uma plataforma
                        digital de venda de jogos. Sejamos bem claros - o Steam não vai a lado nenhum, e tem tudo para continuar a
                        dominar a venda digital de videojogos no PC.
                        A facilidade de programação para computador deixava clara a gama de jogos e melhoria gráfica se comparados
                        aos videogames.
                        A realidade atual é que cada vez mais cresce o número de jogos multiplataforma e diminui as exclusividades.
                        <section>
                            <p class="text-justify" tabindex="0">Abaixo alguns exemplos de jogos exclusivos para PC:</p>
                            <ul>
                                <li><a href="https://play.br.leagueoflegends.com/pt_BR" target="_blank" ; tabindex="0">LEAGUE OF
                                        LEGENDS</a></li>
                                <li><a href="https://worldofwarcraft.com/pt-br/" target="_blank" ; tabindex="0">WORLD OF
                                        WARCRAFT</a></li>
                                <li><a href="https://www.tibia.com/mmorpg/free-multiplayer-online-role-playing-game.php?taftoken=c46cc3cf-df9b-4dfa-959c-50115f0d9458" target="_blank" tabindex="0">TIBIA</a></li>
                                <li><a href="https://levelupgames.uol.com.br/levelup/jogos-online/jogos-de-mmorpg/ragnarok.lhtml" target="_blank" tabindex="0">RAGNAROK</a></li>
                            </ul>
                        </section>
                        <p class="text-justify" tabindex="0">Não sabemos por quanto tempo os jogos exclusivos durarão, e todos jogadores torcem por jogos
                            multiplataformas e com interação entre as plataformas, principalmente para jogos online, fato que
                            contribuiria para uma maior união entre as produtoras e desenvolvedoras.</p>

                        <h1 class="text-uppercase text-right" tabindex="0"><?= Translate('Evolução dos jogos para pc') ?></h1>
                        <p class="text-justify" tabindex="0"> O que tudo indica é que o primeiro game ou sistema que possibilitou tudo isso é o (Cathode Ray Tube
                            Amusement Device) ou (Missile Simulator) de (1947) que era um simulador de mísseis inspirado nos radares
                            da segunda guerra mundial. (é difícil encontra informações ou imagens desse game na internet.)</p>
                        <p class="text-justify" tabindex="0">Durante um bom tempo vários protótipos de games foram inventados por varias pessoas. Até que
                            especialmente em (1958) foi criado o famoso game (Tennis for Two), que por muitos e considerado como
                            verdadeiro primeiro game já criado; e que com certeza foi o primeiro game multi player. Ele foi criado por
                            um senhor chamado (William Higinbotham), ele também e conhecido como pai dos vídeo games, ele criou o game
                            modificando o sistema de um osciloscópio, que é um aparelho que mede sinais elétricos e
                            eletrônicos.Atualmente a guerra das empresas por games mais potentes e gráficos melhores continua,
                            deixando um pouco de lado a inovação na gameplay.</p>
                </div>
                <a class='sr-only sr-only-focusable' href='#topo'>
                    <div class='container text-center'>
                        <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                    </div>
                </a>
            </div>

            <div class="container">
                <div class="separator"></div>
                <h2 class="text-uppercase text-center" tabindex="0"><?= Translate('Melhores jogos para Pc da Atualidade') ?>:</h2>
                <iframe class="col-sm-12" width="560" height="315" src="https://www.youtube.com/embed/b87BdPVrTOk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen tabindex="0"></iframe>
            </div>
            <a class='sr-only sr-only-focusable' href='#topo'>
                <div class='container text-center'>
                    <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                </div>
            </a>
            <div class="separator mb-3 mt-4"></div>
        </section>

        <div class="album py-3">
            <div class="container">

                <div class="row">
                    <div class="col-md-4 ">
                        <div class="cardmarcelo">
                            <img tabindex="0" class="card-img-top" src="images/Marcelo/online.webp" alt="Jogador profissional de E-sport" width="100" height="200">
                            <div class="card-body">
                                <p class="card-text" tabindex="0"><?= Translate('Conheça o universo dos jogos On-line para PC') ?></p>
                                <a href="pconline.php" class="btn btnmarcelo btn-primary my-2" tabindex="0"> Leia mais...</a>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="cardmarcelo mb-4 box-shadow">
                            <img tabindex="0" class="card-img-top" src="images/Marcelo/pcgamer.webp" alt="Gabinete PC Gamer, placa de vídeo e processador" width="100" height="200">
                            <div class="card-body">
                                <p class="card-text" tabindex="0"><?= Translate('Tudo o que rola no fantástico mundo dos PC Games') ?></p>
                                <a href="pcgamer.php" class="btn btnmarcelo btn-primary my-2" tabindex="0">Leia mais...</a>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="cardmarcelo mb-4 box-shadow">
                            <img tabindex="0" class="card-img-top" src="images/Marcelo/doom.webp" alt="Capa do jogo Doom. Ilustração de um soldado com máscara de gás matando demônios." width="100" height="200">
                            <div class="card-body">
                                <p class="card-text" tabindex="0"><?= Translate('Momento de diversão, jogue o clássico DOOM!') ?></p>
                                <a href="https://js-dos.com/games/doom.exe.html" target="_blank" class="btn btnmarcelo btn-primary my-2" tabindex="0">Jogue agora!</a>

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
        <!-- FOOTER -->
        <?php
      include('includes/footer.php');
    ?>
    </body>
</div>

</html>