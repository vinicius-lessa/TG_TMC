<!-- TRADUÇÃO da PÁGINA -->
<?php
    include('includes/process.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="FATEC São Roque - 2019 - PROJETO INTEGRADOR II: página 03 do tema de 'Mobile e Portáteis'">
    <meta name="author" content="LUCAS JUSTI | @contato: lucas.silva563@fatec.sp.gov.br">
    <!-- FONTES CDN: 
        - https://fonts.google.com/
        - https://fontawesome.com/
    -->
    <link rel="icon" href="images/favicon3.png">
    <title>A evolução dos portáteis.</title>

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
                breadcrumb(array('index.php' => 'Home', '' => Translate('Portáteis')));

                include('includes/lang.php');
                ?>
            </div>
        </header>
        <main class="container">
            <article id="content">
                <div class="row">
                    <div class="col-12 mt-5 mb-4 text-center">
                        <h1 class="text-center" tabindex="0"><?= Translate('A EVOLUÇÃO DOS PORTÁTEIS') ?></h1>
                        <p class="lead text-center" tabindex="0"><?= Translate('O avanço tecnológico dos videogames portáteis ao longo das ultimas décadas.') ?></p>
                        <img src="images/Lucas/handheld.webp" class="img-fluid" alt="Consoles portáteis alinhados horizontalmente." height="104" width="600" tabindex="0">
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-6 mt-4">
                        <h2 class="text-left" tabindex="0">1979 - Milton Bradley Microvision</h2>
                        <p class="text-justify" tabindex="0">Microvision foi o primeiro console portátil que possibilitava utilizar cartuchos com jogos diferentes. Foi lançado pela Milton Bradley Company em 1979, projetado por Jay Smith, que mais tarde também inventaria o Vectrex.</p>
                    </div>
                    <div class="col col-lg-6 mt-4">
                        <h2 class="text-left" tabindex="0">1981 - Entex Select-A-Game Machine</h2>
                        <p class="text-justify" tabindex="0">O Entex Select-a-game é um sistema de jogo portátil lançado em 1981 pela Entex Industries. A Entex lançou seis jogos para o dispositivo antes de abandonar o suporte em 1982 a favor da Entex Adventure Vision.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col mt-4">
                        <div class="embed-responsive embed-responsive-16by9" tabindex="0">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/eRqYa6yL8Jk" allowfullscreen></iframe>
                        </div>
                        <a class='sr-only sr-only-focusable' href='#topo'>
                            <div class='container text-center'>
                                <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-6 mt-4">
                        <h2 class="text-left" tabindex="0">1984 - Epoch Game Pocket Computer</h2>
                        <p class="text-justify" tabindex="0">O Epoch Game Pocket Computer é um console portátil lançado pela Epoch no Japão em 1984. O console contém uma tela monocromática de LCD, com 4 botões de face e direcional digital. No total, foram lançados sete jogos para o console, sendo dois deles inclusos na memória (Puzzle Game e Graphics function) e outros cinco vendidos separadamente (Astro Bomber, Block Maze, Pocket Computer Mahjong, Pocket Computer Reversi, Sokoban).</p>
                    </div>
                    <div class="col col-lg-6 mt-4">
                        <h2 class="text-left" tabindex="0">1989 - Nintendo Game Boy</h2>
                        <p class="text-justify" tabindex="0">O Game Boy é um console portátil desenvolvido pela Nintendo, lançado em 21 de abril de 1989 no Japão, em 31 de julho de 1989 na América do Norte e em 28 de setembro de 1990 na Europa, é o primeiro console da linha Game Boy, foi criado por Gunpei Yokoi e pela Nintendo Research and Development.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col mt-4">
                        <div class="embed-responsive embed-responsive-16by9" tabindex="0">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/E-ej_8XBwmI" allowfullscreen></iframe>
                        </div>
                        <a class='sr-only sr-only-focusable' href='#topo'>
                            <div class='container text-center'>
                                <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-6 mt-4">
                        <h2 class="text-left" tabindex="0">1989 - Atari Lynx</h2>
                        <p class="text-justify" tabindex="0">O Atari Lynx foi um console de videogame portátil produzido pela Atari, lançado em 1989, sendo o primeiro a apresentar tela colorida. Fazendo parte dos videogames de quarta geração, concorreu com o Game Boy da Nintendo, lançado um mês antes, e com o Game Gear da Sega e o TurboExpress da NEC, lançados no ano seguinte.</p>
                    </div>
                    <div class="col col-lg-6 mt-4">
                        <h2 class="text-left" tabindex="0">1990 - NEC TurboExpress</h2>
                        <p class="text-justify" tabindex="0">O TurboExpress ou PC Engine GT no Japão é um console portátil produzido pela NEC lançado em 1990, sendo uma versão portátil do TurboGrafx-16 (PC Engine no Japão) que foi lançada 3 anos antes.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col mt-4">
                        <div class="embed-responsive embed-responsive-16by9" tabindex="0">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wxpsBsupgUo" allowfullscreen></iframe>
                        </div>
                        <a class='sr-only sr-only-focusable' href='#topo'>
                            <div class='container text-center'>
                                <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-6 mt-4">
                        <h2 class="text-left" tabindex="0">1990 - Sega Game Gear</h2>
                        <p class="text-justify" tabindex="0">Game Gear é um console de videogame portátil, de 8 bits, desenvolvido e produzido pela Sega. Fazia parte da denominada 4ª geração de consoles e surgiu em resposta ao portátil da Nintendo, o Game Boy. O portátil da Sega também tinha como concorrentes o Atari Lynx e o TurboExpress. O console foi descontinuado no Brasil e na Coreia do Sul de 1995.</p>
                    </div>
                    <div class="col col-lg-6 mt-4">
                        <h2 class="text-left" tabindex="0">1995 - Sega Genesis Nomad</h2>
                        <p class="text-justify" tabindex="0">Genesis Nomad (também conhecido como Sega Nomad) foi um console portátil lançado pela Sega em outubro de 1995 e que era uma variação do Mega Drive, ele também possuía conectividade com a televisão a partir de cabos, foi desenvolvido a partir do Mega Jet, uma versão portátil do console utilizada em aviões no Japão.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-6 mt-4">
                        <h2 class="text-left" tabindex="0">1997 - Tiger Game.com</h2>
                        <p class="text-justify" tabindex="0">A game.com é um console portátil lançado pela Tiger Electronics em setembro de 1997 nos Estados Unidos com jogo Lights Out incluído no pack. Este console tinha algumas novidades, tais como: Tela Touch Screen e a possibilidade de encaixar 2 cartuchos ao mesmo tempo.</p>
                    </div>
                    <div class="col col-lg-6 mt-4">
                        <h2 class="text-left" tabindex="0">1998 - Nintendo Game Boy Color</h2>
                        <p class="text-justify" tabindex="0">O Game Boy Color é o sucessor do Game Boy da Nintendo. O portátil foi lançado no dia 21 de outubro de 1998 no Japão, 19 de novembro de 1998 na América do Norte, 23 de novembro de 1998 na Europa, e 27 de novembro de 1998 no Reino Unido. Ele apresenta uma tela colorida, e é ligeiramente mais grosso e alto do que o Game Boy Pocket. Assim como o Game Boy original, ele possui um processador de 8-bit. Combinados, o Game Boy e o Game Boy Color venderam 118,69 milhões de unidades no mundo todo.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col mt-4">
                        <div class="embed-responsive embed-responsive-16by9" tabindex="0">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/nxnc9qBWffQ" allowfullscreen></iframe>
                        </div>
                        <a class='sr-only sr-only-focusable' href='#topo'>
                            <div class='container text-center'>
                                <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-6 mt-4">
                        <h2 class="text-left" tabindex="0">1999 - SNK Neo Geo Pocket Color</h2>
                        <p class="text-justify" tabindex="0">O Neo Geo Pocket Color é um console portátil que foi lançado pela SNK em 1999, para combater o Game Boy Color da Nintendo e substituir o Neo Geo Pocket. Tecnicamente, o Neo Geo Pocket Color é igual ao Neo Geo Pocket tradicional, sendo as únicas diferenças o ecrã, as cores e a possibilidade de ser ligado ao Dreamcast, da Sega. O console foi descontinuado em 2001.</p>
                    </div>
                    <div class="col col-lg-6 mt-4">
                        <h2 class="text-left" tabindex="0">2000 - Bandai WonderSwan Color</h2>
                        <p class="text-justify" tabindex="0">WonderSwan Color é um console portátil japonês lançado pela Bandai em 30 de dezembro de 2000, concorrente do Game Boy Advance rodando jogos coloridos de 16 bits, melhor ou pior que SNES. Além de tela colorida, ele possui uma memória de 512kbit, que permite a criação de jogos mais complexos.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col mt-4">
                        <div class="embed-responsive embed-responsive-16by9" tabindex="0">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/7WpIRAEfnrg" allowfullscreen></iframe>
                        </div>
                        <a class='sr-only sr-only-focusable' href='#topo'>
                            <div class='container text-center'>
                                <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-6 mt-4">
                        <h2 class="text-left" tabindex="0">2001 - Nintendo Game Boy Advance</h2>
                        <p class="text-justify" tabindex="0">O Game Boy Advance (popularmente abreviado como GBA) é um console portátil desenvolvido e fabricado pela empresa japonesa Nintendo. Lançado em 2001, é o sucessor do Game Boy Color e um dos últimos produtos da linha Game Boy. Seu codinome durante o processo de desenvolvimento foi Advance Game Boy. Ele continuou recebendo jogos até 2008.</p>
                    </div>
                    <div class="col col-lg-6 mt-4">
                        <h2 class="text-left" tabindex="0">2001 - Game Park GP32</h2>
                        <p class="text-justify" tabindex="0">O GP32 (GamePark 32) é um videogame portátil desenvolvido pela coreana empresa Game Park. Ele foi lançado em 23 de novembro de 2001, na Coreia do Sul .</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col mt-4">
                        <div class="embed-responsive embed-responsive-16by9" tabindex="0">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wvmnRLFYIIU" allowfullscreen></iframe>
                        </div>
                        <a class='sr-only sr-only-focusable' href='#topo'>
                            <div class='container text-center'>
                                <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-6 mt-4">
                        <h2 class="text-left" tabindex="0">2003 - Nokia N-Gage</h2>
                        <p class="text-justify" tabindex="0">O Nokia N-Gage foi o primeiro híbrido entre smartphone e console,lançado pela Nokia.Lançado em 2003. Suas medidas são de 13,37cm de largura por 6,97 cm de altura e 2,02 cm de espessura, pesando apenas 137g (incluindo a bateria). Já o N-Gage QD, lançado em 2004, tem 11,80 cm de largura por 6,80 cm de altura e 2,20 cm de espessura, pesando 143g.</p>
                    </div>
                    <div class="col col-lg-6 mt-4">
                        <h2 class="text-left" tabindex="0">2004 - Sony PlayStation Portable</h2>
                        <p class="text-justify" tabindex="0">PlayStation Portable, também conhecido pela sigla PSP, é um console portátil de videojogos da família PlayStation desenvolvido pela Sony Computer Entertainment. Foi anunciado na E3 de 2004 e lançado em 12 de dezembro de 2004 no Japão, e nos Estados Unidos em 24 de março de 2005. Seu principal concorrente era o Nintendo DS, console portátil da Nintendo.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-6 mt-4">
                        <h2 class="text-left" tabindex="0">2004 - Nintendo DS</h2>
                        <p class="text-justify" tabindex="0">O Nintendo DS é um console de videogame portátil desenvolvido e produzido pela Nintendo, lançado em 2004. Ele é visualmente distinto por seu design abre e fecha, e a presença de duas telas, sendo a inferior sensível ao toque. O sistema também possui um microfone embutido, e tem suporte a conexão sem-fio via Wireless Local, permitindo uma interação entre os jogadores dentro de uma pequena área (9-30 metros, dependendo das condições), ou pelo Nintendo Wi-Fi Connection, que permite multiplayer online com jogadores de todo o mundo.</p>
                    </div>
                    <div class="col col-lg-6 mt-4">
                        <h2 class="text-left" tabindex="0">2005 - Tiger Telematics Gizmondo</h2>
                        <p class="text-justify" tabindex="0">O Gizmondo é um videogame portátil que foi lançado pela Tiger Telematics em março de 2005. Possuía as tecnologias GPRS e GPS. O projeto eletrônico foi realizado pela Plextek Limited e o desenho industrial por Rick Dickinson.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col mt-4">
                        <div class="embed-responsive embed-responsive-16by9" tabindex="0">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/UtMpA8PFiXw" allowfullscreen></iframe>
                        </div>
                        <a class='sr-only sr-only-focusable' href='#topo'>
                            <div class='container text-center'>
                                <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-6 mt-4">
                        <h2 class="text-left" tabindex="0">2009 - PSP Go</h2>
                        <p class="text-justify" tabindex="0">PSP Go (também chamado de PSPgo ou PSP go, modelo PSP-N1000) é a versão mais recente lançada do PlayStation Portable feito pela Sony, com o lançamento em 1 de Outubro de 2009. Esse PSP foi anunciado pela Sony na conferência da E3, mas poucos dias antes na Qore. Em abril de 2011 a Sony anunciou no site japonês AV Watch que ele será descontinuado para focar os esforços no PlayStation Vita.</p>
                    </div>
                    <div class="col col-lg-6 mt-4">
                        <h2 class="text-left" tabindex="0">2011 - Nintendo 3DS</h2>
                        <p class="text-justify" tabindex="0">O Nintendo 3DS, abreviado como 3DS é um console portátil produzido pela Nintendo e lançado em 2011, sucessor do Nintendo DS. Tem a capacidade de produzir imagens em três dimensões sem óculos especiais e é compatível com títulos dos antecessores Nintendo DS e DSi.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-6 mt-4">
                        <h2 class="text-left" tabindex="0">2011 - PlayStation Vita</h2>
                        <p class="text-justify" tabindex="0">PSP Go é a versão mais recente lançada do PlayStation Portable feito pela Sony, com o lançamento em 1 de Outubro de 2009. Esse PSP foi anunciado pela Sony na conferência da E3, mas poucos dias antes na Qore. Em abril de 2011 a Sony anunciou no site japonês AV Watch que ele será descontinuado para focar os esforços no PlayStation Vita.</p>
                    </div>
                    <div class="col col-lg-6 mt-4 mb-5">
                        <h2 class="text-left" tabindex="0">2017 - Nintendo Switch</h2>
                        <p class="text-justify" tabindex="0">O Nintendo Switch, chamado durante seu desenvolvimento de NX, é um console de videogame produzido pela empresa japonesa Nintendo, tendo sido revelado em 20 de outubro de 2016. Foi lançado oficialmente no dia 3 de março de 2017, e o preço de lançamento é de US$299,99. Na ocasião do lançamento, a Sony e a Microsoft, principais concorrentes da Nintendo, usaram o Twitter para comemorar o novo console.</p>
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
                            <h4><?= Translate('TOP 10 MOBILE') ?></h4>
                        </a>
                        <a href="mobileranking.php"><img src="images/Lucas/ranking.webp" alt="Números dispostos em forma de escada ao lado do planeta terra, representando um ranking" width="200" height="200"></a>
                    </div>
                    <div class="col-md-6 mb-5 text-center">
                        <a href="mobilereleases.php" tabindex="0">
                            <h4><?= Translate('LANÇAMENTOS') ?></h4>
                        </a>
                        <a href="mobilereleases.php"><img src="images/Lucas/releases.webp" alt="Personagem Mario Bros dirigindo um kart, ao fundo o vilão Bowser em um kart tentando pegá-lo" width="200" height="200"></a>
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