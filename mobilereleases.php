<!-- TRADUÇÃO da PÁGINA -->
<?php
    include('includes/process.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="FATEC São Roque - 2019 - PROJETO INTEGRADOR II: página 01 do tema de 'Mobile e Portáteis'">
    <meta name="author" content="LUCAS JUSTI | @contato: lucas.silva563@fatec.sp.gov.br">
    <!-- FONTES CDN: 
        - https://fonts.google.com/
        - https://fontawesome.com/
    -->
    <link rel="icon" href="images/favicon3.png">
    <title>Lançamentos Mobile</title>

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

<body>
    <div class="mobilereleases">
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
        <main class="container">
            <article id="content">
                <div class="row">
                    <div class="col-12 mt-5 mb-4">
                        <h1 class="text-center" tabindex="0"><?= Translate('LANÇAMENTOS') ?></h1>
                        <p class="lead text-center" tabindex="0"><?= Translate('Os games mais esperados para mobile - ação, corrida, estratégia e mais!') ?></p>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-6 mt-4">
                            <h2 class="text-left" tabindex="0">Mario Kart Tour</h2>
                            <p class="lead" tabindex="0">Mario Kart dá a volta ao mundo!</p>
                            <p class="text-justify" tabindex="0">Mario e companhia percorrem o mundo em novas pistas inspiradas em cidades reais e também em pistas clássicas de Mario Kart! Estes destinos serão palco de temporadas, que mudam a cada duas semanas. Além das pistas baseadas em lugares icônicos, queridos personagens receberão variações temáticas relacionadas a cidade de cada temporada.</p>
                        </div>
                        <div class="col col-md-6 mt-4">
                            <div class="embed-responsive embed-responsive-4by3" tabindex="0">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/m_eIGTQgK4s" allowfullscreen></iframe>
                            </div>
                            <a class='sr-only sr-only-focusable' href='#topo'>
                                <div class='container text-center'>
                                    <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="row invert">
                        <div class="col-12 col-md-6 mt-4">
                            <h2 class="text-left" tabindex="0">Harry Potter: Wizards Unite</h2>
                            <p class="lead" tabindex="0">Descubra o seu potencial bruxo.</p>
                            <p class="text-justify" tabindex="0">Uma Catástrofe assola o mundo bruxo e transporta os Magis – artefatos mágicos, criaturas, pessoas e, até mesmo, memórias – para o mundo dos trouxas. Como um novo recruta da Força-Tarefa de Manutenção de Sigilo, você trabalhará com bruxas e bruxos do mundo todo para solucionar o mistério das Catástrofe e manter a magia longe dos olhos dos trouxas.</p>
                        </div>
                        <div class="col col-md-6 mt-4">
                            <div class="embed-responsive embed-responsive-4by3" tabindex="0">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/0pThkmngqJE" allowfullscreen></iframe>
                            </div>
                            <a class='sr-only sr-only-focusable' href='#topo'>
                                <div class='container text-center'>
                                    <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-6 mt-4">
                            <h2 class="text-left" tabindex="0">Gears Pop!</h2>
                            <p class="lead" tabindex="0">Lute pela supremacia nos campos de batalha!</p>
                            <p class="text-justify" tabindex="0">Colete e melhore dezenas de heróis e vilões icônicos de Gears of War desenhados com o adorável visual de vinil colecionável de Funko Pop! Forme o esquadrão supremo e lidere-o rumo à vitória na Arena contra outros colecionadores e competidores em combate tático acelerado em cobertura!</p>
                        </div>
                        <div class="col col-md-6 mt-4">
                            <div class="embed-responsive embed-responsive-4by3" tabindex="0">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/3Pf4KxbknXA" allowfullscreen></iframe>
                            </div>
                            <a class='sr-only sr-only-focusable' href='#topo'>
                                <div class='container text-center'>
                                    <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="row invert">
                        <div class="col-12 col-md-6 mt-4">
                            <h2 class="text-left" tabindex="0">Minecraft Earth</h2>
                            <p class="lead" tabindex="0">Explore o mundo real com realidade aumentada.</p>
                            <p class="text-justify" tabindex="0">Descubra uma nova dimensão do Minecraft enquanto cria, explora e sobrevive no mundo real. Junte-se a diversos construtores e exploradores expandindo o planeta, colete recursos para suas construções, crie usando a realidade aumentada e coloque itens em tamanho real. Você pode até mesmo se juntar a outros jogadores para embarcar em miniaventuras!</p>
                        </div>
                        <div class="col col-md-6 mt-4">
                            <div class="embed-responsive embed-responsive-4by3" tabindex="0">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/AQEizp-VrVU" allowfullscreen></iframe>
                            </div>
                            <a class='sr-only sr-only-focusable' href='#topo'>
                                <div class='container text-center'>
                                    <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-6 mt-4">
                            <h2 class="text-left" tabindex="0">Shadowgun War Games</h2>
                            <p class="lead" tabindex="0">Use sua habilidade, trabalhe com sua equipe e consiga a vitória!</p>
                            <p class="text-justify" tabindex="0">Acha que a guerra nunca muda? Pense de novo! Torne-se parte dos Shadowgun War Games, o próximo capítulo do crescente e premiado universo Shadowgun. Shadowgun War Games é um FPS multiplayer para celular em ritmo acelerado e que requer um pensamento tático e reflexos rápidos.</p>
                        </div>
                        <div class="col col-md-6 mt-4">
                            <div class="embed-responsive embed-responsive-4by3" tabindex="0">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/oNM5wr7yUnQ" allowfullscreen></iframe>
                            </div>
                            <a class='sr-only sr-only-focusable' href='#topo'>
                                <div class='container text-center'>
                                    <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="row invert">
                        <div class="col-12 col-md-6 mt-4">
                            <h2 class="text-left" tabindex="0">Human: Fall Flat</h2>
                            <p class="lead" tabindex="0">Descubra o multijogador de plataforma de quebra-cabeças mais engraçado!</p>
                            <p class="text-justify" tabindex="0">Em Human: Fall Flat você joga como um humano desajeitado que sonha com lugares surreais repletos de quebra-cabeças tentando encontrar a saída. Exploração e criatividade são os segredos, já que muitas opções são bem-vindas!</p>
                        </div>
                        <div class="col col-md-6 mt-4">
                            <div class="embed-responsive embed-responsive-4by3" tabindex="0">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/F3-T6b0g4ok" allowfullscreen></iframe>
                            </div>
                            <a class='sr-only sr-only-focusable' href='#topo'>
                                <div class='container text-center'>
                                    <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-6 mt-4">
                            <h2 class="text-left" tabindex="0">Forza Street</h2>
                            <p class="lead" tabindex="0">Corra para conseguir carros lendários!</p>
                            <p class="text-justify" tabindex="0">Corra pela impressionante cena das corridas de rua em velocidades estonteantes! Divirta-se ao conquistar a coleção de carros dos seus sonhos. Escolha um evento, crie seu grid de carros de sua coleção, e comece a correr para conquistar sua infâmia no primeiro jogo Forza para celular.</p>
                        </div>
                        <div class="col col-md-6 mt-4">
                            <div class="embed-responsive embed-responsive-4by3" tabindex="0">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/07TffPtB_Jg" allowfullscreen></iframe>
                            </div>
                            <a class='sr-only sr-only-focusable' href='#topo'>
                                <div class='container text-center'>
                                    <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="row invert">
                        <div class="col-12 col-md-6 mt-4">
                            <h2 class="text-left" tabindex="0">Bad North</h2>
                            <p class="lead" tabindex="0">Defenda as ilhas do seu reino contra hordas de invasores!</p>
                            <p class="text-justify" tabindex="0">Seu lar está sob ataque. O rei foi morto pelas mãos dos invasores vikings. A esperança é um lampejo distante na neblina, desaparecendo rapidamente a cada momento que passa. Conforme você se levanta para assumir o lugar do seu pai como governante, a organização de suas defesas dependerá de você. Mas não se engane, essa não é uma luta pela vitória, mas sim uma tentativa desesperada de sobreviver.</p>
                        </div>
                        <div class="col col-md-6 mt-4">
                            <div class="embed-responsive embed-responsive-4by3" tabindex="0">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/RqD6qJZlW90" allowfullscreen></iframe>
                            </div>
                            <a class='sr-only sr-only-focusable' href='#topo'>
                                <div class='container text-center'>
                                    <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </article>
            <section class="container mobileTheme">
                <div class="row mt-5">
                    <div class="col">
                        <h3 class="text-center mt-2" tabindex="0"><?= Translate('ARTIGOS RELACIONADOS') ?></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="separator mb-3"></div>
                    <div class="col-md-6 mb-5 text-center">
                        <a href="mobileranking.php" tabindex="0">
                            <h4 class="text-center mt-2"><?= Translate('TOP 10 MOBILE') ?></h4>
                        </a>
                        <a href="mobileranking.php"><img src="images/Lucas/ranking.webp" alt="Números dispostos em forma de escada ao lado do planeta terra, representando um ranking" width="200" height="200"></a>
                    </div>
                    <div class="col-md-6 mb-5 text-center">
                        <a href="mobileevolution.php" tabindex="0">
                            <h4 class="text-center mt-2"><?= Translate('HISTÓRIA DOS PORTÁTEIS') ?></h4>
                        </a>
                        <a href="mobileevolution.php"><img src="images/Lucas/handheldlink.webp" alt="video-games portáteis sobre uma mesa" width="200" height="200"></a>
                    </div>
                </div>
                <a class='sr-only sr-only-focusable' href='#topo'>
                    <div class='container text-center'>
                        <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                    </div>
                </a>
            </section>
        </main>
        <!--Footer-->
        <?php
        // incluindo footer da página
        include('includes/footer.php');
        ?>
    </div>
</body>

</html>