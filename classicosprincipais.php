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
    <title>Gamestuff &#8226; Principais</title>

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
                    breadcrumb(array('index.php' => 'Home', 'classicoshome.php' => Translate('CLÁSSICOS'), '' => Translate('Principais Clássicos')));

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
                                        <h1 class="mb-1" tabindex="0"><?= Translate('OS PRINCIPAIS JOGOS CLÁSSICOS')?></h1>
                                        <p class="text-justify" tabindex="0"> De 1950 até o final dos anos 70 os gráficos não eram muito bom, eram formas
                                            geométricas simples que nem sequer tinham mais de uma cor. Os temas populares
                                            eram os esportes e a navegação por labirintos, mas interagir com a tela era
                                            por si só uma novidade tão grande, e os gráficos eram tão simples, que, se os criadores não explicassem
                                            sobre o que era o jogo, a maioria das pessoas nunca adivinharia.
                                        </p>
                                        <p class="text-justify" tabindex="0"> Durante os anos 60, os jogos eram produzidos para utilização em
                                            computadores universidades, porque as pessoas não tinham muito acesso.
                                            Somente com os primeiros fliperamas eles passaram a
                                            ser considerados produtos de apelo comercial. O primeiro console de
                                            videogame para ser ligado à TV foi o <a href="videogameshome.php" class="clink" tabindex="0"> Magnavox Odyssey</a>, lançado em 1972.
                                            Conforme a tecnologia avançava, os jogos começaram a ganhar cores, e
                                            surgiam os primeiros personagens marcantes, como Pac-Man, Donkey Kong, Mario, entre outros.
                                        </p>
                                        <!-- SUPER MARIO BROS -->
                                        <a class='sr-only sr-only-focusable' href='#topo'>
                                            <div class='container text-center'>
                                                <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="row p-0 m-0 mt-5">
                                        <div class="col-lg-12 pl-1 pb-0 pt-0">
                                            <h3 tabindex="0">SUPER MARIO BROS - 1985</h3>
                                            <h5 tabindex="0"><?= Translate('O jogo mais vendido da história por 22 anos')?></h5>
                                        </div>
                                        <div class="col-lg-6 pl-1 pb-0 pt-0">
                                            <div class="m-0 mb-3 p-0">
                                                <p class="mt-3" tabindex="0">
                                                    Super Mario Bros foi um dos jogos mais vendidos de toda a história dos videogames com mais
                                                    de 40 milhões de cópias e foi o principal responsável pelo sucesso inicial do console
                                                    <a href="https://pt.wikipedia.org/wiki/Nintendo_Entertainment_System" class="clink" tabindex="0">NES</a>.
                                                </p>
                                                <p class="text-justify" tabindex="0">
                                                    O jogador controla o principal protagonista da série, Mario. O objetivo do jogo é percorrer
                                                    o Mushroom Kingdom, sobreviver ao principal vilão, Bowser, e salvar a Princesa Peach
                                                    (na época conhecida por seu nome americano, Princess Toadstool) e seu reino do domínio dos Koopa Troopas.
                                                </p>
                                                <p class="text-justify" tabindex="0">
                                                    A música tema do jogo escrita por Koji Kondo é reconhecida em todo o mundo, mesmo por aqueles
                                                    que nunca jogaram o jogo, e tem sido considerada uma representação da música dos videogames em geral.
                                                </p>
                                                <p class="text-justify" tabindex="0">
                                                    Sua sequencia foi lançado com o nome de Super Mario Bros: The Lost Levels um ano depois. Muito semelhante
                                                    ao jogo anterior, no entanto, a notável diferença é a maior dificuldade, contendo elementos novos como
                                                    cogumelos venenosos que dão dano ao jogador e Warp Zones que levam o jogador a mundos anteriores.
                                                </p>
                                                <p class="text-justify" tabindex="0">
                                                    O último jogo da série Super Mario Bros foi lançado 1990.
                                                    Com uma trilha sonora impecável, jogabilidade consideradas por muitos como perfeita, gráficos bonitos e cenários bem trabalhados.
                                                    O resultado foi um grande sucesso comercial. Super Mario Bros. 3 vendeu quase 18 milhões de cópias
                                                    no mundo todo, sendo assim o jogo individual mais vendido da história dos videogames.
                                                </p>

                                            </div>
                                            <a class='sr-only sr-only-focusable' href='#topo'>
                                                <div class='container text-center'>
                                                    <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-6 blockimg allimg p-0">
                                            <img tabindex="0" src="images/Ismael/supermariobros.webp" class="rounded h-10" alt="Imagem do jogo eletrônico Super Mario Bros de 1985. Um Encanador pulando em um monstro" style="max-width: 100%; max-heght:100%;" />
                                        </div>
                                        <!-- SONIC -->
                                    </div>
                                    <div class="row p-0 m-0 mt-3">
                                        <div class="col-lg-12 pl-1 pb-0 pt-0">
                                            <h3 tabindex="0">SONIC THE HEDGEHOG - 1991</h3>
                                            <h5 tabindex="0">"Sonic Team"</h5>
                                        </div>
                                        <div class="col-lg-6 pl-1 pb-0 pt-0">
                                            <div class="m-0 mb-3 p-0">
                                                <p class="mt-3" tabindex="0">
                                                    Sonic The Hedgehog foi publicado pela Sega originalmente na América do Norte em junho de 1991.
                                                    O jogo segue a história do ouriço chamado Sonic em sua missão de derrotar o Doutor Robotnik,
                                                    um cientista que aprisionou animais em robôs e roubou as mágicas Esmeraldas do Caos.
                                                </p>
                                                <p class="text-justify" tabindex="0">
                                                    Eles escolheram um ouriço azul com espinhos ao longo de sua cabeça e
                                                    espinha e se renomearam "Sonic Team" para combinar com o personagem. Sonic the Hedgehog, foi fortemente influenciado
                                                    pelos jogos da série Super Mario, criada por Shigeru Miyamoto.
                                                </p>
                                                <p class="text-justify" tabindex="0">
                                                    O jogo usa uma técnica inovadora que permite ao sprite de Sonic rolar ao longo de um cenário curvo, originada
                                                    numa demonstração criada pelo programador Yuji Naka. O jogo foi bem recebido pela crítica, sendo considerado um
                                                    dos melhores da história, com elogios dados aos seus efeitos visuais, áudio e jogabilidade.
                                                </p>
                                            </div>
                                            <a class='sr-only sr-only-focusable' href='#topo'>
                                                <div class='container text-center'>
                                                    <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-6 blockimg allimg p-0" style="">
                                            <img tabindex="0" src="images/Ismael/sonic.webp" class="rounded h-10" alt="Imagem do jogo eletrônico Sonic de 1991. Ouriço correndo em um gramado." style="max-width: 100%; max-heght:100%;" />
                                        </div>
                                        <!-- DONKEY KONG -->
                                        <div class="row p-0 m-0 mt-3">
                                            <div class="col-lg-12 pl-1 pb-0 pt-0">
                                                <h3 tabindex="0">DONKEY KONG - 1996</h3>
                                                <h5 tabindex="0"><?= Translate('Do arcade para os jogos eletronicos')?></h5>
                                            </div>
                                            <div class="col-lg-6 pl-1 pb-0 pt-0">
                                                <div class="m-0 mb-3 p-0">
                                                    <p class="mt-3" tabindex="0">
                                                        O primeiro jogo de Donkey Kong tratava-se de um mini-game criado por Shigeru Miyamoto,
                                                        onde também apareceu pela primeira vez Mario que na época era chamado de "Jumpman",
                                                        no mesmo, Donkey Kong sequestra uma mulher chamada Pauline e o objetivo do jogador
                                                        é se desviar pulando de obstáculos que vem na direção de Jumpman até chegar em Donkey Kong e derrota-lo.
                                                    </p>
                                                    <p class="text-justify" tabindex="0">
                                                        Em 1982, a Universal Studios processou a Nintendo por achar Donkey Kong muito parecido com King Kong (1933),
                                                        esse caso foi considerado um dos maiores vacilos da história dos videogames.
                                                    </p>
                                                    <p class="text-justify" tabindex="0">
                                                        Em 1994, a Nintendo resolveu pedir à produtora de jogos britânica Rare, para fazer um novo jogo de Donkey
                                                        Kong. E neste mesmo ano foi lançado Donkey Kong Country, considerado um salto no mundo dos videogames.
                                                        O jogo,foi produzido para o console <a href="https://pt.wikipedia.org/wiki/Super_Nintendo_Entertainment_System" class="clink" tabindex="0">SNES</a> , apresentava gráficos jamais vistos numa plataforma de 16 bits.
                                                    </p>
                                                    <p class="text-justify" tabindex="0">
                                                        Nos dois anos seguintes foram lançadas duas sequências: Donkey Kong Country 2: Diddy's Kong Quest
                                                        e Donkey Kong Country 3: Dixie Kong's Double Trouble!, respectivamente.
                                                    </p>
                                                    <p class="text-justify" tabindex="0">
                                                        Em 2003, a Nintendo lançou o jogo Donkey Kong Jungle Beat, estrelando Donkey Kong que desta vez não
                                                        correrá, pulará ou esmagará Kremlings. O jogador deve batucar no bongo-controller na altura certa que
                                                        os ícones passam na tela ao ritmo da música. Um outro jogo, de plataformas, controlado pelos bongos
                                                        chamado também foi lançado.
                                                    </p>
                                                </div>
                                                <a class='sr-only sr-only-focusable' href='#topo'>
                                                    <div class='container text-center'>
                                                        <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-6 blockimg allimg p-0">
                                                <img tabindex="0" src="images/Ismael/donkeykong.webp" class="rounded h-10" alt="Imagem do jogo eletrônico Donkey Kong de 1981. Fase do jogo Donkey Kong." style="max-width: 100%; max-heght:100%;" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 p-0">
                            <div class="p-0 m-1 mb-3">
                                <div>
                                    <h1 class="mb-1" tabindex="0">A utilização dos Cartuchos</h1>
                                    <h3 class="mb-4" tabindex="0">Cartucho</h3>
                                    <p class="text-justify" tabindex="0">Cartucho (Também conhecido como "fita", ou ainda, conhecido pelo termo "cassete" no Brasil, Portugal e Japão) é um dispositivo de armazenamento utilizado principalmente para guardar os dados referentes a um videogame (tal como imagens, sons, vídeos, etc). Estas informações são lidas pela console, que contém o processador que executa o software do jogo.
                                    </p>
                                    <p class="text-justify" tabindex="0">Este tipo de mídia foi utilizados em todos os consoles de videogames até o Nintendo 64, quando, a partir de então, passaram a ser substituídos por CD's, DVD's e BD's, pelo fato de terem mais espaço para armazenamento e melhores condições gráficas e auditivas, com exceção dos consoles portáteis, que apesar do maior custo de produção, os cartuchos oferecem uma maior autonomia ao console, consumindo menos energia. Porém, depois de mais de uma década do "fim da era dos cartuchos nos videogames", as empresas produtoras de videogame começaram a novamente olhar com bons olhos este tipo de mídia, já que, conforme os jogos vão ficando mais pesados, ficam evidentes as restrições das velocidades oferecidas pela mídia óptica. Restrições essas que são muito menores com o atual estado da memória flash, presente em pendrives, cartões de memória (SD e microSD) e em SSDs, que são facilmente colocados dentro de um cartucho. Os cartuchos são pequenos e oferecem excelentes velocidades de leitura, tornando-os uma opção atraente para a distribuição de jogos.</p>
                                </div>
                                <a class='sr-only sr-only-focusable' href='#topo'>
                                    <div class='container text-center'>
                                        <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <aside class="col-lg-4 p-0 mt-1" style="height: auto;">
                            <div class="col p-0 asideblock">
                                <div class="p-3" style="background: rgba(0,0,0,0.7);">
                                    <h3 class="text-center pb-3" tabindex="0"><?= Translate('LISTA DOS MELHORES')?></h3>
                                    <div class="row pl-2 pr-2 mt-2 mb-3">
                                        <div class="col-5">
                                            <img class="img-fluid" src="images/imagempadrao.webp" alt="Joystick do console Playstation 4 ilustrado.">
                                        </div>
                                        <div class="col-7">
                                            <h4 tabindex="0">SUPER MARIO</h4>
                                            <p class="text-justify" tabindex="0">Super Mario é uma série de jogos de plataforma criados pela Nintendo e apresentando seu mascote, Mario.</p>
                                            <a href="classicosprincipais.php" class="btn btn-light btn-sm" tabindex="0"><?= Translate('Saiba Mais')?></a>
                                        </div>
                                    </div>
                                    <div class="row pl-2 pr-2 mt-3 mb-3">
                                        <div class="col-5">
                                            <img class="img-fluid" src="images/imagempadrao.webp" alt="Joystick do console Playstation 4 ilustrado.">
                                        </div>
                                        <div class="col-7">
                                            <h4 tabindex="0">SONIC</h4>
                                            <p class="text-justify" tabindex="0">Sonic the Hedgehog é uma franquia de jogos criada e produzida pela Sega. A franquia é centrada em uma série de jogos de plataforma focados em velocidade.</p>
                                            <a href="classicosprincipais.php" class="btn btn-light btn-sm" tabindex="0"><?= Translate('Saiba Mais')?></a>
                                        </div>
                                    </div>
                                    <div class="row pl-2 pr-2 mt-3 mb-3">
                                        <div class="col-5">
                                            <img class="img-fluid" src="images/imagempadrao.webp">
                                        </div>
                                        <div class="col-7">
                                            <h4 tabindex="0">DONKEY KONG</h4>
                                            <p class="text-justify" tabindex="0">Donkey Kong é um jogo de arcade desenvolvido pela Nintendo, lançado em 1981. É um primeiro exemplo do gênero plataforma, uma v</p>
                                            <a href="classicosprincipais.php" class="btn btn-light btn-sm" tabindex="0"><?= Translate('Saiba Mais')?></a>
                                        </div>
                                    </div>
                                    <div class="row pl-2 pr-2 mt-3 mb-1">
                                        <div class="col-12 mt-4">
                                            <h3 class="text-center" tabindex="0">Game of the Year Award</h3>
                                            <p class="text-justify" tabindex="0">Atualmente o jogo com o maior número de prêmios é o The Witcher 3: Wild Hunt (2015) que possui 257 prêmios no total. Outros jogos bastante premiados incluem The Last of Us (2013), The Elder Scrolls V: Skyrim (2011), God of War (2018) e The Legend of Zelda: Breath of the Wild (2017).</p>
                                            <a href="classicosprincipais.php" class="btn btn-light btn-sm" tabindex="0"><?= Translate('Saiba Mais')?></a>
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
                </div>
            </div>
        </article>
        <section class="container pt-3 pb-3 pl-0 pr-0">
            <div class="row p-0 m-0">
                <div class="col-lg-6 pl-1 pb-0 pt-2">
                    <h3 tabindex="0"><?= Translate('ACESSE TAMBÉM')?></h3>
                    <div class="m-0 mb-3 p-0">
                        <h5><a href="classicoscuriosidades.php" class="clink" tabindex="0"><?= Translate('Curiosidades dos Clássicos')?></a></h5>
                        <h5><a href="classicoshome.php" class="clink" tabindex="0"><?= Translate('Voltar')?></a></h5>
                    </div>
                </div>
            </div>
            <div class="separator mt-3"></div>
            <div class="col-12 mt-5 mb-5 others">
                <div class="row">

                    <div class="col-lg-3">
                        <h3 class="text-center"><a href="lancamentos.php" tabindex="0"><?= Translate('LANÇAMENTOS')?></a></h3>
                        <div class="mt-4 mb-4">
                            <div class="blockimg allimg reddead rounded">
                                <p class="text-justify">
                                    <a href="lancamentoshome.php" tabindex="0">
                                        <img src="images/reddead1.webp" class="imgarticle" alt="Ilustração do jogo Red Dead Redemption: Desenho de um homem vestido com roupas de faroeste segurando um revolver em primeiro plano" />
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <h3 class="text-center" tabindex="0"><?= Translate('VIDEOGAMES')?></h3>
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
                        <h3 class="text-center" tabindex="0"><?= Translate('MELHORES XXI')?></h3>
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
                        <h3 class="text-center" tabindex="0"><?= Translate('DESENVOLVEDORAS')?></h3>
                        <div class="mt-4 mb-4">

                            <div class="blockimg allimg desenvolv rounded">
                                <p class="text-justify">
                                    <a href="devcriators.php">
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
    <?php
	// incluindo footer da página
	include('includes/footer.php');
    ?>
</body>

</html>