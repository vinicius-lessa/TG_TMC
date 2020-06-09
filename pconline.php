<!-- TRADUÇÃO da PÁGINA -->
<?php
    include('includes/process.php');
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="FATEC São Roque - 2019 - PROJETO INTEGRADOR II: 2ª Página do tema de 'Games para PC', informações relacionadas aos games para pc.">

    <meta name="author" content="Marcelo Fernando Silva Barros">

    <link rel="icon" href="images/favicon3.png">
    <title>GAMES PC ONLINE</title>

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
            <div>
                <?php
                    // incluindo topo da página 
                    include('includes/header.php');

                    
                    // breadcrumb
                    breadcrumb(array('index.php' => 'Home', '' => Translate('Lançamentos')));

                    include('includes/lang.php');
                ?>
            </div>
        </header>
        <article id="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12  mt-4">
                        <div>
                            <h1 class="text-uppercase" tabindex="0"><?= Translate('Ascenção dos jogos online para PC') ?></h1>
                            <img tabindex="0" class="float-left mr-2 ml-2" src="images/Marcelo/gameronline.webp" alt="Ilustação de um homem com fones nas orelhas, em seu quarto usando seu computador" width="200" height="200">
                        </div>
                        <p class="text-justify" tabindex="0">São chamados jogos virtuais os jogos eletrônicos jogados via Internet. Neles, um jogador com um computador,vídeo game ou aparelho eletrônico conectado à rede ou não, pode jogar com outros sem que ambos
                            precisem estar no mesmo ambiente, sem sair de casa, o jogador pode desafiar adversários que estejam em
                            outros lugares do país, ou até do mundo. Tudo em tempo real, como se o outro estivesse lado a lado, de
                            forma que esta categoria de jogos abre novas perspectivas de diversão. No entanto, atualmente alguns
                            fatores dificultam sua disseminação: o alto preço da conexão de banda larga e das mensalidades que muitos
                            jogos exigem. Também há de considerar que muitos deles exigem atualização constante do equipamento,
                            elevando o custo da diversão. Atualmente milhões de pessoas jogam online, alguns destes jogadores
                            inclusive levando a diversão como profissão.</p>


                        <h1 class="text-uppercase" tabindex="0"><?= Translate('Principais campeonatos e seus premios') ?></h1>
                        <img tabindex="0" class="float-left mr-2 ml-2" src="images/Marcelo/champ.webp" alt="Ilustração de bonecos segurando troféus e comemorando uma vitória em um campeonato de games." width="200" height="200">
                        <p class="text-justify" tabindex="0">Diversos jogadores que cresceram com videogames resolveram se dedicar e transformaram a
                            brincadeira em profissão. A CPL ou Liga Profissional de Cyberatletas, foi criada por Angel Murroz em 1997.
                            O evento foca em competições de FPS, com Counter-Strike e Quake como suas principais atrações.Apesar do
                            início modesto, conforme os anos se passaram a competição ganhou fama e as finais costumam ser vistas por
                            centenas de milhares de espectadores através da internet.Em 2005 o torneio adotou o modelo de turnê
                            mundial com partidas do jogo Painkiller, que renderam o total de US$ 1.000.000,00 em prêmios. O grande
                            vencedor, Johnathan “Fatal1ty” Wendel levou sozinho US$ 150.000,00. O World Cyber Games foi criado em 2000
                            pela empresa sul-coreana World Cyber Games Inc. e é patrocinado pela Samsung e pela Microsoft. A
                            competição costuma tentar seguir o padrão usado nas Olimpíadas, com direito até a evento de abertura. Os
                            vencedores recebem moedas de ouro, prata e bronze</p>
                        <h1 class="text-uppercase text-left" tabindex="0"><?= Translate('Modalidades e principais jogadores') ?></h1>
                        <img tabindex="0" class="float-left mr-2 ml-2" src="images/Marcelo/1x1.webp" alt="Ilustração de dois jogadores em ação durante um campeonato de jogos eletrônicos" width="200" height="200">
                        <p class="text-justify" tabindex="0">Os principais modos de jogos nos campeonatos online incluem, futebol, jogos de luta, rpg e FPS.
                            Viver de jogar video games é um sonho para muitos, sejam crianças ou adultos — um sonho que muitas vezes
                            parece ser inatingível. Apesar de tudo, um pequeno grupo de profissionais dos esportes eletrônicos
                            conseguiu não apenas realizá-lo como também ficar muito rico com ele.
                            Considerado o maior atleta de e-Sports do mundo, o coreano Lee Jae Dong enriqueceu às custas de torneios
                            de StarCraft: Brood War. Em 2012, ele começou a tentar a sua sorte em StarCraft II, se sagrando entre os
                            melhores do mundo na segunda metade de 2013.
                            Outro ucrâniano, Danil "Dendi" Ishutin conseguiu o recorde de ganhar US$ 200 mil em apenas um torneio de
                            Dota 2. Ele é o ocidental mais premiado do mundo dos e-Sports.
                            Estes são apenas alguns exemplos de jogadores profissionais bem sucedidos.</p>
                        <a class='sr-only sr-only-focusable' href='#topo'>
                            <div class='container text-center'>
                                <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                            </div>
                        </a>
                        <aside>
                            <h3 tabindex="0"><?= Translate('MELHORES JOGADORES E-SPORTS DO BRASIL') ?>:</h3>

                            <div class="row justify-content-center">
                                <div class="col">
                                    <table class="table table-dark" tabindex="0">
                                        <thead>
                                            <tr>
                                                <th scope="col">POSIÇÃO</th>
                                                <th scope="col">NOME</th>
                                                <th scope="col">JOGO</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1º</th>
                                                <td>Alvaro “VVvert” Martins </td>
                                                <td>League of Legends </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2º</th>
                                                <td>Adriano “4dr” Machadob</td>
                                                <td>DOTA2</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3º</th>
                                                <td>Marcelo “Coldzera” David</td>
                                                <td>COUNTER STRIKE: GO</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <a class='sr-only sr-only-focusable' href='#topo'>
                                    <div class='container text-center'>
                                        <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                                    </div>
                                </a>
                        </aside>

                    </div>
                </div>
            </div>
        </article>
        <div class="container">
            <div class="separator"></div>
            <h2 class="text-uppercase text-center" tabindex="0"><?= Translate('Assista uma partida online') ?>:</h2>
            <iframe class="col-12" width="560" height="315" src="https://www.youtube.com/embed/ju0ktwX6z0Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen tabindex="0"></iframe>
        </div>
        <a class='sr-only sr-only-focusable' href='#topo'>
            <div class='container text-center'>
                <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
            </div>
        </a>
        <div class="separator mb-3 mt-4"></div>
        <div class="album py-3">
            <div class="container">

                <div class="row">
                    <div class="col-sm-4 ">
                        <div class="cardmarcelo">
                            <img tabindex="0" class="card-img-top" src="images/Marcelo/pcgamer.webp" alt="Gabinete PC Gamer, placa de vídeo e processador" width="100" height="200">
                            <div class="card-body">
                                <p style="color: black" class="card-text" tabindex="0"><?= Translate('Tudo o que rola no fantástico mundo dos PC Games') ?></p>
                                <a href="pcgamer.php" class="btn btnmarcelo btn-primary my-2" tabindex="0"> Leia mais...</a>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="cardmarcelo mb-4 box-shadow">
                            <img tabindex="0" class="card-img-top" src="images/Marcelo/raptor.webp" alt="Capa do jogo Raptor. Ilustração de um avião estilo caça explodindo uma base." width="100" height="200">
                            <div class="card-body">
                                <p class="card-text" tabindex="0"><?= Translate('Momento de diversão, jogue o clássico RAPTOR!') ?></p>
                                <a href="https://www.retrogames.cz/play_603-DOS.php" target="_blank" class="btn btnmarcelo btn-primary my-2" tabindex="0">Jogue agora!</a>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="cardmarcelo mb-4 box-shadow">
                            <img tabindex="0" class="card-img-top" src="images/Marcelo/historypc.webp" alt="Imagem de um computador de mesa antigo." width="100" height="200">
                            <div class="card-body">
                                <p class="card-text" tabindex="0"><?= Translate('Conheça a história dos jogos para PC e suas evoluções') ?>
                                </p>
                                <a href="pchome.php" class="btn btnmarcelo btn-primary my-2" tabindex="0">Leia mais...</a>
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