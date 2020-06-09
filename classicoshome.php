<!-- TRADUÇÃO da PÁGINA -->
<?php 
    include('includes/process.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="FATEC São Roque - 2019 - PROJETO INTEGRADOR II: página contendo informações sobre alguns games clássicos que marcaram história!">
    <meta name="author" content="ISMAEL ESPÍNDOLA | @contato: ipespindola03@gmail.com">
    <!-- FONTES CDN: 
        - https://fonts.google.com/
        - https://fontawesome.com/
    -->
    <link rel="icon" href="images/favicon3.png">
    <title>Gamestuff &#8226; Clássicos</title>

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
    <div class="classicos">
        <header>
            <div>
                <?php
                 // incluindo topo da página 
                include('includes/header.php');   
                            
                // breadcrumb
                breadcrumb(array('index.php' => 'Home', 'classicoshome.php' => Translate('CLÁSSICOS')));

                include('includes/lang.php');  
            ?>
            </div>
        </header>
        <article class="container" id="content">
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="container p-0">
                        <div class="row">
                            <div class="col-md-12 p-0">
                                <div class="p-0 m-1 mb-3">
                                    <div>
                                        <h1 class="mb-1" tabindex="0">JOGOS CLÁSSICOS</h1>
                                        <h3 class="mb-4" tabindex="0">
                                            Os velhinhos que ainda fazem bastante sucesso</h3>
                                        <p class="text-justify" tabindex="0"> Os jogos antigos não tinham os melhores gráficos e nem a melhor
                                            jogabilidade, mas mesmo assim
                                            marcaram a história. Não só pela dificuldade que era de criar um jogo
                                            naquela época, mas pelas
                                            inovações e principalmente por abrir a possibilidade de hoje podermos jogar
                                            jogos cada vez mais
                                            realista e com qualidade ao extremo.
                                        </p>
                                        <p class="text-justify" tabindex="0"> Se você chegou à casa dos 30 (anos) é muito provável que já tenha desfrutado de alguns clássicos dos videogames. Na década de 1980, diversos jogos ocupavam o imaginário de jovens e adultos, como Super Mario Bros, Pac-Man e Metal Gear. Com seus gráficos inovadores, campanhas bem formuladas e personagens que viriam a ser precursores de grandes franquias, os games conquistaram um espaço no coração e na prateleira de pessoas de todas as idades.
                                        </p>
                                        <a class='sr-only sr-only-focusable' href='#topo'>
                                            <div class='container text-center'>
                                                <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- HR -->
                                    <div class="separator mt-5 mb-5"></div>
                                    <div class="row p-0 m-0" style="background:;">
                                        <div class="col-lg-12 pl-1 pb-0 pt-0">
                                            <h3 class="text-center" tabindex="0">CLÁSSICOS QUE AINDA PODEMOS JOGAR </h3>
                                        </div>
                                        <div class="col-lg-6 pl-1 pb-0 pt-0">
                                            <div class="m-0 mb-3 p-0">
                                                <p style="background: ; margin-bottom: -15px; padding-bottom: 0px;" tabindex="0">
                                                    A maioria dos jogos se perdeu com o tempo e com os consoles da
                                                    época, mas essa lista trás alguns
                                                    jogos que com a ajuda de um computador ainda é possível se divertir
                                                    lembrando dos jogos favoritos
                                                    que marcaram a sua infância:
                                                </p>
                                                <p style="background: ; margin-bottom: -15px; padding-bottom: 0px;" class="mt-3" tabindex="0">
                                                    Começar qualquer lista de jogos clássicos e não falar de Pac-Man é algo difícil de conseguir. O game, que nasceu em 1980, foi um dos primeiros a virar febre em todo o mundo. Com gráficos simples e uma mecânica fácil de entender, o jogo consistia em uma cabeça amarela redonda, com uma boca que abria e fechava, percorrendo um labirinto repleto de pastilhas e sendo perseguida por quatro fantasmas. Para progredir o jogador tinha que comer todas as pastilhas sem ser pego pelos fantasmas, com a dificuldade aumentando progressivamente.
                                                </p>

                                                <p style="background: ; margin-bottom: -15px; padding-bottom: 0px;" class="mt-3" tabindex="0">
                                                    Primeiro jogo da série Donkey Kong, era um minigame que foi feito originalmente para Arcade, em 1981. Além de apresentar o macacão mais querido da Nintendo, e dar início aos jogos em estilo plataforma, o jogo também trouxe uma surpresa. Na história, o macaco sequestra uma mulher chamada Pauline e cabe ao jogador controlar o boneco que irá resgatá-la chamado de "Jumpman". Acontece que o Jumpman era, nada mais, nada menos, do que a primeira versão do que viria a ser o Mario, da franquia de jogos de maior sucesso no mundo: Super Mario Bros.
                                                </p>
                                            </div>
                                            <a class='sr-only sr-only-focusable' href='#topo'>
                                                <div class='container text-center'>
                                                    <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-6">
                                            <table class="mt-4" tabindex="0">
                                                <tr>
                                                    <th class="cth">JOGO</th>
                                                    <th class="cth">ANO</th>
                                                    <th class="cth">JOGO</th>
                                                    <th class="cth">ANO</th>
                                                </tr>
                                                <tr>
                                                    <td><a href="http://nesbox.com/game/snes/super-mario-kart/rom/7f25ce5a283d902694c52fb1152fa61a" class="ctd" target="blank">Super Mario Kart</a></td>
                                                    <td class="ctd">1992</td>
                                                    <td><a href="http://nesbox.com/game/snes/super-mario-world" class="ctd" target="blank">Super Mario World</a></td>
                                                    <td class="ctd">1990</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="http://www.ssega.com/game.php?id=3254" class="ctd" target="blank">Sonic 2</a></td>
                                                    <td class="ctd">1992</td>
                                                    <td><a href="http://nesbox.com/game/snes/super-mario-world" class="ctd" target="blank">Doom</a></td>
                                                    <td class="ctd">1993</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="http://nesbox.com/game/snes/teenage-mutant-ninja-turtles-iv-turtles-in-time" class="ctd" target="blank">Turtles in Time</a></td>
                                                    <td class="ctd">1992</td>
                                                    <td><a href="http://nesbox.com/game/snes/legend-of-zelda-the-a-link-to-the-past/rom/608c22b8ff930c62dc2de54bcd6eba72" class="ctd" target="blank">Legend of Zelda: A Link To The
                                                            Past</a></td>
                                                    <td class="ctd">1991</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="http://nesbox.com/game/snes/nba-jam" class="ctd" target="blank">NBA Jam</a></td>
                                                    <td class="ctd">1993</td>
                                                    <td><a href="https://www.ssega.com/play/aladdin/29" class="ctd" target="blank">Aladdin</a></td>
                                                    <td class="ctd">1993</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="http://nesbox.com/game/snes/super-metroid" class="ctd" target="blank">Super Metroid</a></td>
                                                    <td class="ctd">1994</td>
                                                    <td><a href="https://www.ssega.com/play/earthworm-jim/572" class="ctd" target="blank">Earthworm Jim</a></td>
                                                    <td class="ctd">1994</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="http://nesbox.com/game/snes/donkey-kong-country/rom/2e604bc12fb8f9467765c807c24877fa" class="ctd" target="blank">Donkey Kong Country</a></td>
                                                    <td class="ctd">1994</td>
                                                    <td><a href="http://nesbox.com/game/snes/mortal-kombat-ii" class="ctd" target="blank">Mortal Kombat II</a></td>
                                                    <td class="ctd">1993</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="http://nesbox.com/game/nes/prince-of-persia" class="ctd" target="blank">Prince of Persia</a></td>
                                                    <td class="ctd">1989</td>
                                                    <td><a href="http://www.freegameempire.com/games/Speedball-2-Brutal-Deluxe/Run-in-browser" class="ctd" target="blank">Speed Ball 2: Brutal Deluxe</a>
                                                    </td>
                                                    <td class="ctd">1990</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="http://www.classicdosgames.com/online/alondark.html" class="ctd" target="blank">Alone in the Dark</a></td>
                                                    <td class="ctd">1992</td>
                                                    <td><a href="http://nesbox.com/game/snes/mega-man-x/rom/a10071fa78554b57538d0b459e00d224" class="ctd" target="blank">Mega Man X</a></td>
                                                    <td class="ctd">1993</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="http://www.classicdosgames.com/online/1duke.html" class="ctd" target="blank">Duke Nukem 3D</a></td>
                                                    <td class="ctd">1996</td>
                                                    <td><a href="http://nesbox.com/game/snes/super-castlevania-iv" class="ctd" target="blank">Super Castlevania IV</a></td>
                                                    <td class="ctd">1991</td>
                                                </tr>

                                            </table>
                                            <a class='mt-3 sr-only sr-only-focusable' href='#topo'>
                                                <div class='container text-center'>
                                                    <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- HR -->
                                <div class="separator mt-5 mb-5"></div>
                            </div>
                            <div class="row p-0 m-0">
                                <div class="col-md-12 pl-1 pb-0 pt-0">
                                    <h1 class="text-center geral" tabindex="0">JOGOS QUE FORAM RAMASTERIZADOS</h1>
                                    <h3 class="text-center geral" tabindex="0">Halo: The Master Chief Collection</h3>
                                    <h5 class="text-center" tabindex="0">(Xbox One)</h5>
                                </div>
                                <div class="col-lg-6 pl-1 pb-0 pt-0">
                                    <div class="m-0 mb-3 p-0">
                                        <p style="background: ; margin-bottom: -15px; padding-bottom: 0px;" tabindex="0">
                                            Halo: The Master Chief Collection reúne 10 anos dos clássicos exclusivamente
                                            para o Xbox One.
                                            A coletânea com os 4 jogos principais da franquia Halo, incluindo: Halo
                                            Combat Evolved, Halo 2,
                                            Halo 3 e Halo 4, traz todos os games remasterizados em alta definição. Mas o
                                            destaque fica mesmo para o
                                            multiplayer e o visual, que receberam grandes melhorias sem perder as
                                            características dos originais. O título
                                            também tem um passe para assistir Halo Nightfall, a série de televisão
                                            inspirada na franquia.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6 embed-responsive embed-responsive-4by3">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ZDvYJGquXgE?&rel=0&color=white&fs=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen tabindex="0">
                                    </iframe>
                                </div>
                                <a class='sr-only sr-only-focusable' href='#topo'>
                                    <div class='container text-center'>
                                        <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                                    </div>
                                </a>
                                <!-- Resident Evil -->
                                <hr class="hr mt-4 mb-4 col-11">
                                <div class="row p-0 m-0" style="background:;">
                                    <div class="col-lg-12 pl-1 pb-0 pt-0">
                                        <h3 class="text-center" tabindex="0">Resident Evil HD Remaster</h3>
                                        <h5 class="text-center" tabindex="0">(PS4, Xbox One, PS3, Xbox 360 e PC)</h5>
                                    </div>
                                    <div class="col-lg-6 pl-1 pb-0 pt-0">
                                        <div class="m-0 mb-3 p-0">
                                            <p class="mt-3" tabindex="0">Resident Evil, conhecido no Japão como Biohazard, é um jogo eletrônico de survival horror desenvolvido e publicado pela Capcom, lançado originalmente para o Nintendo GameCube em 2002. É um remake do jogo original de 1996, o primeiro da franquia Resident Evil.
                                            </p>
                                            <p style="background: ; margin-bottom: -15px; padding-bottom: 0px;" tabindex="0">
                                                Após vários anos do lançamento da versão original Resident , o clássico
                                                Resident Evil ressurgiu
                                                como uma edição retrabalhada. A experiência como um todo permanece
                                                intacta, porém a jogabilidade foi otimizada com movimentação moderna e
                                                comandos mais precisos.
                                            </p>

                                            <p class="mt-3" tabindex="0">Embora o jogador possa usar armas de fogo para matar monstros, Resident Evil enfatiza a evasão em vez de combate em ritmo acelerado, fornecendo munição limitada. O jogador também tem uma quantidade limitada de saúde, que diminui se o personagem é atacado pelas criaturas. No entanto, a saúde pode ser recuperada através da recolha e o uso de ervas, que podem ser misturadas com outras ervas para aumentar o seu efeito curativo.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 embed-responsive embed-responsive-4by3">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/60nnPLJqgYQ?&rel=0&color=white&fs=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen tabindex="0">
                                        </iframe>
                                    </div>
                                    <a class='sr-only sr-only-focusable' href='#topo'>
                                        <div class='container text-center'>
                                            <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                                        </div>
                                    </a>
                                </div>
                                <!-- The Last Of Us -->
                                <hr class="hr mt-4 mb-4 col-11">
                                <div class="row p-0 m-0">
                                    <div class="col-lg-12 pl-1 pb-0 pt-0">
                                        <h3 class="text-center" tabindex="0">The Last of Us Remastered</h3>
                                        <h5 class="text-center" tabindex="0">(PS4)</h5>
                                    </div>
                                    <div class="col-lg-6 pl-1 pb-0 pt-0">
                                        <div class="m-0 mb-3 p-0">
                                            <p style="background: ; margin-bottom: -15px; padding-bottom: 0px;" tabindex="0">
                                                Considerado por muitos sites especializados como um dos melhores jogos
                                                exclusivos da Sony,
                                                mesmo nos 20 anos de existência da marca PlayStation, The Last of Us é
                                                um título difícil de ser
                                                aprimorado, justamente por já ser bom o bastante. O multiplayer também
                                                está presente para
                                                satisfazer os fãs de games competitivos mais estratégicos.
                                            </p>
                                            <p class="mt-3" tabindex="0"> O desenvolvimento de The Last of Us começou em 2009 logo depois da finalização de Uncharted 2: Among Thieves, o título anterior da Naughty Dog. A relação entre Joel e Ellie foi o foco central do jogo, com todos os outros elementos de história e jogabilidade desenvolvendo-se ao seu redor. A equipe criativa escolheu os atores Troy Baker e Ashley Johnson a fim de interpretarem os personagens principais, que realizaram a captura de movimentos e dublagem para seus respectivos papéis. Ambos auxiliaram o diretor de criação Neil Druckmann com o desenvolvimento da história e personagens. Novos motores de jogo foram criados para satisfazer as necessidades técnicas, com a inteligência artificial de Ellie sendo um grande ponto de desenvolvimento e aprimoramento. A trilha sonora original foi composta por Gustavo Santaolalla, enquanto os efeitos sonoros assumiram um ponto de vista mais naturalista e minimalista do que em outros jogos de ação.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 embed-responsive embed-responsive-4by3">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/AaOWRvmtEFQ?&rel=0&color=white&fs=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen tabindex="0"></iframe>
                                    </div>
                                    <a class='sr-only sr-only-focusable' href='#topo'>
                                        <div class='container text-center'>
                                            <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="hr mt-4 mb-5 col-11">
            <div class="row">
                <div class="col-md-8 p-0">
                    <div class="p-0 m-1 mb-3">
                        <div>
                            <h1 class="mb-1" tabindex="0">A era de Ouro dos Games</h1>
                            <h3 class="mb-4" tabindex="0">Informações adicionais</h3>
                            <p class="text-justify" tabindex="0">A pesquisa Games Market Report aponta que em 2016 esse mercado alcançará US$ 86,1 bilhões. É uma evolução assombrosa, que se explica, em parte, por um fato: é cada vez mais fácil ter um aparelho em que se possa jogar. Nos anos 80 e 90, ou você tinha um console para jogar na sua TV de tubo ou um aparelho portátil, tipo Game Boy. A série B dos jogadores de videogame era formada por quem se contentava com os chamados minigames, mais simples e baratos. Foi justo essa série B que deu um dos grandes saltos da indústria. A avó do seu vizinho que jogava Tetris em uma maquininha cinza e quadrada comprada em camelô virou o que se chama hoje “jogador casual”. Quem diria? Do jogo da cobrinha no tempo em que visor de celular não tinha cor à infinidade de jogos na tela Retina do iPad, a indústria descobriu um novo universo. Entre 2012 e 2016, a fatia dos tablets no mercado deve crescer 47,6% e a dos celulares, 18,8%.

                                Por outro lado, consoles caseiros deverão cair 4% e portáteis, 15%. É um reflexo da ascensão de celulares e tablets, que evoluem todo ano, têm uma montanha de jogos baratíssimos e servem para muitas outras coisas além de jogar. Isso levou alguns apressados a decretar a morte dos videogames tradicionais. Mas, enquanto saciarem seus fãs com produtos direcionados a eles, jogadores fiéis e mais exigentes, os portáteis e os consoles caseiros vão durar.Ou seja, o mercado está se adaptando a uma nova realidade tecnológica sem perder nenhuma plataforma. Por isso que os videogames não param de crescer. Não só há mais aparelhos disponíveis como há cada vez mais opções que agradam a diversos públicos. E ainda tem os MMOs (em que um monte de gente joga junto on-line), games para computador e os joguinhos sociais que infestam o Facebook. Isso torna o público maior e mais diversificado. E os mais experientes já não têm muita paciência para explicar que videogame não é coisa de criança. Para dar o argumento IBGE da coisa: o Censo Gamer Brasil 2012 diz que 51% dos jogadores do País têm mais de 19 anos.

                                Para atender essa demanda, é de se esperar que o processo de produção também tenha realidades diferentes. GTA V teria custado, entre produção e marketing, US$ 266 milhões, pelo que se especulou antes do lançamento. São US$ 29 milhões a mais que Avatar (só para voltar a comparar com cinema). Mas o mercado não é formado só por grandes produtoras e orçamentos milionários. Assim como suas irmãs mais velhas, a indústria do videogame também viu florescer um nicho alternativo. Pouca grana, pouco braço e muita criatividade em um porão já proporcionaram grandes jogos nos últimos anos, como Braid, Fez, World of Goo, Limbo e Minecraft, o mais bem-sucedido do gênero. Sem tanta pressão por sucesso comercial, esses jogos indie exploram temáticas, narrativas e gráficos de um jeito muitas vezes inovador – e o melhor, sem precisar de todos os recursos tecnológicos que um PlayStation 4 da vida oferece. Em preto e branco, com pixels gigantes ou imitando algo que seria moderno 20 anos atrás, eles reforçaram a ideia de que não é necessário ser ultrarrealista para ser bom. Criatividade conta tanto quanto tecnologia.
                                Agora se discute se videogame é arte. O MoMA, em Nova York, já alimenta seu acervo, de Pac-Man (1980) a Minecraft (2011). Ainda se discute se videogames podem incitar a violência. Enquanto experts debatem, a taxa de crimes como assassinato e roubo de carro cai nos Estados Unidos desde os anos 90. Nessa época, saiu Grand Theft Auto, ícone dessa indústria bilionária. GTA V já entrou para a história. Vende como água e é assunto de elevador e bar. Para entender o porquê desse rebuliço, exploraramos todo o jogo e os seus cantos mais polêmicos – por 24 horas seguidas. O motivo principal adiantamos aqui: o jogo é sensacional.
                            </p>
                            <a class='sr-only sr-only-focusable' href='#topo'>
                                <div class='container text-center'>
                                    <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <aside class="col-lg-4 p-0 mt-1" style="height: auto;">
                    <div class="col p-0 asideblock">
                        <div class="p-3" style="background: rgba(0,0,0,0.7);">
                            <h3 class="text-center pb-3" tabindex="0">LISTA DOS MELHORES</h3>
                            <div class="row pl-2 pr-2 mt-2 mb-3">
                                <div class="col-5">
                                    <img class="img-fluid" src="images/imagempadrao.webp" alt="Ilustração de um joystick de videogame, Playstation 4">
                                </div>
                                <div class="col-7">
                                    <h4 tabindex="0">SUPER MARIO</h4>
                                    <p class="text-justify" tabindex="0">Super Mario é uma série de jogos de plataforma criados pela Nintendo e apresentando seu mascote, Mario. .</p>
                                    <a href="classicosprincipais.php" tabindex="0"><?= Translate('Saiba Mais') ?></a>
                                </div>
                            </div>
                            <div class="row pl-2 pr-2 mt-3 mb-3">
                                <div class="col-5">
                                    <img class="img-fluid" src="images/imagempadrao.webp" alt="Ilustração de um joystick de videogame, Playstation 4">
                                </div>
                                <div class="col-7">
                                    <h4 tabindex="0">SONIC</h4>
                                    <p class="text-justify" tabindex="0">Sonic the Hedgehog é uma franquia de jogos criada e produzida pela Sega. A franquia é centrada em uma série de jogos de plataforma focados em velocidade.</p>
                                    <a href="classicosprincipais.php" tabindex="0"><?= Translate('Saiba Mais') ?></a>
                                </div>
                            </div>
                            <div class="row pl-2 pr-2 mt-3 mb-3">
                                <div class="col-5">
                                    <img class="img-fluid" src="images/imagempadrao.webp" alt="Ilustração de um joystick de videogame, Playstation 4">
                                </div>
                                <div class="col-7">
                                    <h4 tabindex="0">DONKEY KONG</h4>
                                    <p class="text-justify" tabindex="0">Donkey Kong é um jogo de arcade desenvolvido pela Nintendo, lançado em 1981. É um primeiro exemplo do gênero plataforma, uma vez que a jogabilidade foca na movimentação do personagem principal por uma série de plataformas enquanto desvia de obstáculos.</p>
                                    <a href="classicosprincipais.php" tabindex="0"><?= Translate('Saiba Mais') ?></a>
                                </div>
                            </div>
                            <div class="row pl-2 pr-2 mt-3 mb-1">
                                <div class="col-12 mt-4">
                                    <h3 class="text-center" tabindex="0">Game of the Year Award</h3>
                                    <p class="text-justify" tabindex="0">Atualmente o jogo com o maior número de prêmios é o The Witcher 3: Wild Hunt (2015) que possui 257 prêmios no total. Outros jogos bastante premiados incluem The Last of Us (2013), The Elder Scrolls V: Skyrim (2011), God of War (2018) e The Legend of Zelda: Breath of the Wild (2017).</p>
                                    <a href="classicosprincipais.php" tabindex="0"><?= Translate('Saiba Mais') ?></a>
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
        <section class="container pt-3 pb-3 pl-0 pr-0">
            <div class="mt-4 mb-4 separator"></div>
            <div class="row p-0 m-0" style="background:">
                <div class="col-lg-6 pl-1 pb-0 pt-2">
                    <h3 tabindex="0">ACESSE TAMBÉM</h3>
                    <div class="m-0 mb-3 p-0">
                        <h5><a href="classicoscuriosidades.php" class="clink" tabindex="0">Curiosidades dos Clássicos</a></h5>
                        <h5><a href="classicosprincipais.php" class="clink" tabindex="0">Principais Clássicos</a></h5>
                    </div>
                </div>

            </div>
            <div class="col-12 mt-5 mb-5 others">
                <div class="row">

                    <div class="col-lg-3">
                        <h3 class="text-center"><a href="lancamentos.php" tabindex="0">LANÇAMENTOS</a></h3>
                        <div class="mt-4 mb-4">
                            <div class="blockimg allimg reddead rounded">
                                <p class="text-justify">
                                    <a href="lancamentoshome.php" tabindex="0">
                                        <img src="images/reddead1.webp" class="imgarticle" alt="Ilustração do jogo Red Dead Redemption: Desenho de um homem vestido com roupas de faroeste segurando um revolver calibre 38 em primeiro plano, ao fundo o sol do lado direito e sete homens montados em cavalos ao lado esquerdo" />
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <h3 class="text-center"><a href="videogameshome.php" tabindex="0">VIDEOGAMES</a></h3>
                        <div class="mt-4 mb-4">

                            <div class="blockimg allimg magnavox rounded">
                                <p class="text-justify">
                                    <a href="videogameshome.php" tabindex="0">
                                        <img src="images/reddead1.webp" class="imgarticle" alt="Foto primeiro video-game da história" />
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <h3 class="text-center"><a href="bestxxihome.php" tabindex="0">MELHORES XXI</a></h3>
                        <div class="mt-4 mb-4">

                            <div class="blockimg allimg thewitcher rounded">
                                <p class="text-justify">
                                    <a href="bestxxihome.php" tabindex="0">
                                        <img src="images/reddead1.webp" class="imgarticle" alt="Imagem do jogo The Witcher 3: Guerreiro com longos cabelos brancos sacando uma espada" />
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <h3 class="text-center"><a href="devcriators.php" tabindex="0">DESENVOLVEDORAS</a></h3>
                        <div class="mt-4 mb-4">

                            <div class="blockimg allimg desenvolv rounded">
                                <p class="text-justify">
                                    <a href="devcriators.php" tabindex="0">
                                        <img src="images/reddead1.webp" class="imgarticle" alt="banner com os logotipos de várias empresas de jogos" />
                                    </a>
                                </p>
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
        </section>
    </div>
    <!--Footer-->
    <div class='container-fluid'>
        <div class='row'>
            <?php
        include('includes/footer.php'); 
      ?>
        </div>
    </div>
</body>

</html>