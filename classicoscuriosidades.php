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
    <title>Gamestuff &#8226; Curiosidades</title>

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
                    breadcrumb(array('index.php' => 'Home', 'PORTAL/portal-games/classicoshome.php' => Translate('CLÁSSICOS'), '' => Translate('CURIOSIDADES')));

                    include('includes/lang.php');  
            ?>
            </div>
        </header>

        <article class="container" id="content">
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="container p-0">
                        <div class="row">
                            <div class="col-lg-12 p-0">
                                <div class="p-0 m-1 mb-3">
                                    <div>
                                        <h1 class="mb-1" tabindex="0"><?= Translate('CURIOSIDADE DOS CLÁSSICOS')?></h1>
                                        <h3 class="mb-4 mt-4" tabindex="0">O Primeiro Jogo Competitivo:</h3>
                                        <p class="text-justify" tabindex="0">Em 1958 foi lançado o primeiro jogo eletrônico que era possével jogar contra
                                            outra pessoa. Esse jogo se
                                            chamava Tennis for Two (Tênis para dois) e sua história é curiosa.
                                            Originalmente era um equipamento
                                            militar para medir a trajetória de projéteis, mas o físico William
                                            Higinbotham achou que podia brincar com isso
                                            de outra maneira. Assim, apresentou seu simulador de tênis na exibição anual
                                            do laboratório em que trabalhava.
                                            Claramente foi a atração mais popular dessa exibição.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-8 p-0">


                                    <!-- 1 -->
                                </div>
                                <div class="row p-0 m-0">
                                    <div class="col-lg-12 pl-1 mt-5">
                                        <h3 tabindex="0"><?= Translate('O PRIMEIRO JOGO ELETRONICO COMPETITIVO')?></h3>
                                    </div>
                                    <div class="col-lg-6 pl-1">
                                        <div class="m-0 mb-3 p-0">
                                            <p class="mt-3" tabindex="0">
                                                tualmente o cenários dos esportes eletrônicos está gigantesco. Com uma legião de fãs fervorosos ao redor do mundo, uma vasta cobertura da grande mídia e quantias milionárias sendo investidas, a nova moda são os “joguinhos”. Mas não foi sempre assim, nos primórdios os jogos eletrônicos estavam bem longe de serem reconhecidos como esportes, ainda menos profissionalmente!
                                            </p>
                                            <p class="mt-3" tabindex="0">
                                                Então para entendermos melhor essa evolução, o Mouse com Refri traz no episódio de hoje os primeiros jogos a terem uma característica competitiva!
                                            </p>
                                            <p class="mt-3" tabindex="0">
                                                A partir da década de 2010 a popularização do streaming fez o esporte eletrônico crescer rapidamente, sendo a principal fonte o Twitch lançado em 2011, um site especializado em transmissões de jogos eletrônicos, sendo League of Legends e DotA as competições mais assistidas, em 2013 o site registrou 4,5 milhões de visualizações durante a competição de DOTA 2 The International,[10] essa década marca também a grande presença física de espectadores aos campeonatos, em 2013 o The International vendeu todos os ingressos no Staples Center em Los Angeles, em 2014 o League of Legends World Championship atraiu 40 mil espectadores no Seul World Cup Stadium na Coreia do Sul.
                                            </p>
                                            <p class="mt-3" tabindex="0">
                                                A partir da década de 2000 o esporte eletrônico passou por um grande crescimento, de 10 torneios no ano 2000 para 160 no ano 2010, durante essa década os principais torneios foram o World Cyber Games, o Intel Extreme Masters e a Major League Gaming. A primeira organização internacional foi a G7 fundada pelos times 4 Kings, Fnatic, Made in Brasil, Mousesports, NiP, SK Gaming, Team 3D. Na Coreia do Sul foram criados dois canais com programação dedicada jogos eletrônicos, o Ongamenet e o MBCGame que começaram a transmitir campeonatos de Starcraft e Warcraft III, alguns outros canais no mundo transmitiram competições como a GIGA Television na Alemanha e a XLEAGUE.TV no Reino Unido, Game One na França. Nos Estados Unidos, a ESPN tinha um programa chamado Madden Nation que transmitia competições do jogo Madden NFL além de programas com cobertura de campeonatos no G4TV.
                                            </p>
                                            <p class="mt-3" tabindex="0">
                                                A primeira competição esportiva eletrônica que se tem notícia, foi na data de 19 de outubro de 1972 para estudantes da Universidade Stanford, nos Estados Unidos com o jogo Spacewar, cujo nome oficial foi "Olimpíadas Intergaláticas de Spacewar", o prêmio foi um ano de assinatura da revista Rolling Stone.
                                            </p>
                                            <a href="#" class="btn btn-light btn-sm" tabindex="0"><?= Translate('Saiba Mais') ?></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 blockimg allimg p-0" style="">
                                        <iframe width="580" height="400" src="https://www.youtube.com/embed/6PG2mdU_i8k?&rel=0&color=white&fs=0" frameborder="0" allow="accelerometer;
                                         autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen tabindex="0"></iframe>
                                    </div>
                                    <a class='sr-only sr-only-focusable' href='#topo'>
                                        <div class='container text-center'>
                                            <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                                        </div>
                                    </a>

                                    <!-- 2 -->

                                </div>
                                <div class="row p-0 m-0">
                                    <div class="col-lg-12 pl-1 pb-0 pt-0 mt-3">
                                        <h3 tabindex="0">SPACE INVADERS</h3>
                                        <h5 tabindex="0"><?= Translate('Moedas e Mais Moedas')?></h5>
                                    </div>
                                    <div class="col-lg-12 pl-1 pb-0 pt-0">
                                        <div class="m-0 mb-3 p-0">
                                            <p class="mt-3" tabindex="0">
                                                Depois que o Space Invaders foi lançado no Japão (em 1978), os arcades
                                                do país lotaram com pessoas que queriam
                                                destruir alienígenas e ganhar pontos com isso, mas com todo o sucesso, o
                                                país ficou sem moedas de 100 ienes. A teoria é que o jogo era tão
                                                popular que todas as moedas foram parar nas máquinas de fliperama.
                                                Apesar de ter sido muito popular mesmo
                                                (a ponto de toda cafeteria e restaurante ter um Space Invaders
                                                disponível), a falta de moedas foi apenas
                                                uma decisão do governo japonês para reduzir gastos.
                                            </p>
                                            <a href="#" class="btn btn-light btn-sm" tabindex="0"><?= Translate('Saiba Mais') ?></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 blockimg allimg p-0" style="">
                                    </div>

                                    <!-- 3 -->

                                </div>
                                <div class="row p-0 m-0">
                                    <div class="col-lg-12 pl-1 pb-0 pt-0 mt-3">
                                        <h3 tabindex="0">PACMAN</h3>
                                        <h5 tabindex="0"><?= Translate('Pizza e Jogos')?></h5>
                                    </div>
                                    <div class="col-lg-12 pl-1 pb-0 pt-0">
                                        <div class="m-0 mb-3 p-0">
                                            <p class="mt-3" tabindex="0">
                                                Todo mundo já percebeu que a figura do Pac Man, se parece com uma pizza
                                                faltando um pedaço. No entanto,
                                                o que pouca gente sabe é que ele realmente foi inspirado nisso. O
                                                designer Toru Iwatani conta que durante
                                                a produção do jogo, estavam com dificuldades para criar o personagem
                                                principal. A grande ideia veio
                                                exatamente durante um jantar em que todos estavam comendo pizza e
                                                Iwatani olhou para a forma redonda com “boquinha” na mesa.
                                            </p>
                                            <a href="#" class="btn btn-light btn-sm" tabindex="0"><?= Translate('Saiba Mais') ?></a>
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
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 p-0">
                    <div class="p-0 m-1 mb-3">
                        <div>
                            <h1 class="mb-1" tabindex="0">Games mais importantes de todos os tempos</h1>
                            <h3 class="mb-4" tabindex="0">Quais são os jogos que fizeram história, quebraram os paradigmas da indústria e mudaram o modo como interagimos com o entretenimento digital?</h3>
                            <p class="text-justify" tabindex="0">A questão “videogames são arte?” continua a ser debatida exaustivamente entre críticos e entusiastas. Cada lado do conflito possui argumentos plausíveis, mas nós da SUPER já decidimos o nosso lado: videogames são uma forma de arte, e ponto final. E, se essa premissa é verdadeira, então fica fácil definir que há jogos que são muito mais importantes do que outros – tão importantes que criaram gêneros ou estabeleceram novos padrões.
                            </p>
                            <p class="text-justify" tabindex="0">Alguns não primam exatamente pela excelência técnica, mas abriram as portas para mudanças decisivas. Já outros até podem ser considerados obras-primas – ou seja, representaram as melhores obras de seus respectivos artistas e contribuíram de alguma maneira para o estabelecimento, a popularização e a evolução dessa arte.
                            </p>
                            <p class="text-justify" tabindex="0">Se dividirmos as pouco mais de cinco décadas de entretenimento eletrônico da mesma maneira que as eras da humanidade, quais são os títulos mais relevantes e influentes de cada período?
                            </p>
                            <p class="text-justify" tabindex="0">Assim como as pinturas rupestres eram feitas sobre a textura das rochas das cavernas, na nossa pré-história dos games a ação se passava sempre sobre o fundo preto da tela. Os gráficos – formas geométricas simples que nem sequer tinham mais de uma cor até meados da década de 1970 – eram abstratos e desafiavam os jogadores a enxergar ali naves espaciais e monstros perigosos.
                            </p>
                            <a href="#" class="btn btn-light btn-sm" tabindex="0"><?= Translate('Saiba Mais') ?></a>
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
                                    <img class="img-fluid" src="images/imagempadrao.webp" alt="Ilustração de um joystick de videogame, Playstation 4">
                                </div>
                                <div class="col-7">
                                    <h4 tabindex="0">SUPER MARIO</h4>
                                    <p class="text-justify" tabindex="0">Muitos consideram este o game mais importante de todos os tempos, e não é difícil entender o porquê. A Nintendo ressuscitou o mercado de consoles com o Famicom (NES no Ocidente), graças à sacada de incluir um produto irresistível no pacote.</p>
                                    <a href="classicosprincipais.php" class="btn btn-light btn-sm" tabindex="0"><?= Translate('Saiba Mais')?></a>
                                </div>
                            </div>
                            <div class="row pl-2 pr-2 mt-3 mb-3">
                                <div class="col-5">
                                    <img class="img-fluid" src="images/imagempadrao.webp" alt="Ilustração de um joystick de videogame, Playstation 4">
                                </div>
                                <div class="col-7">
                                    <h4 tabindex="0">SONIC</h4>
                                    <p class="text-justify" tabindex="0">Sonic the Hedgehog é uma franquia de jogos criada e produzida pela Sega. A franquia é centrada em uma série de jogos de plataforma focados em velocidade. O protagonista da série é um ouriço azul chamado Sonic, cuja vida pacífica é sempre interrompida pelo antagonista principal da série, Dr. Eggman.</p>
                                    <a href="classicosprincipais.php" class="btn btn-light btn-sm" tabindex="0"><?= Translate('Saiba Mais')?></a>
                                </div>
                            </div>
                            <div class="row pl-2 pr-2 mt-3 mb-3">
                                <div class="col-5">
                                    <img class="img-fluid" src="images/imagempadrao.webp" alt="Ilustração de um joystick de videogame, Playstation 4">
                                </div>
                                <div class="col-7">
                                    <h4 tabindex="0">DONKEY KONG</h4>
                                    <p class="text-justify" tabindex="0">Donkey Kong é uma série de jogos eletrônicos criada por Shigeru Miyamoto que gira em torno do personagem Donkey Kong, sendo o primeiro jogo da série lançado em 1981.</p>
                                    <a href="classicosprincipais.php" class="btn btn-light btn-sm" tabindex="0"><?= Translate('Saiba Mais')?></a>
                                </div>
                            </div>
                            <div class="row pl-2 pr-2 mt-3 mb-1">
                                <div class="col-12 mt-4">
                                    <h3 class="text-center" tabindex="0">Game of the Year Award</h3>
                                    <p class="text-justify" tabindex="0">O Jogo do Ano (do inglês: "Game of the Year" ou "GOTY") é um título dado por várias premiações, revistas, websites e organizações especializadas para um jogo eletrônico.</p>
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
        </article>
        <section class="container pt-3 pb-3 pl-0 pr-0" style="background:">
            <div class="row p-0 m-0" style="background:">
                <div class="col-lg-6 pl-1 pb-0 pt-2">
                    <h3 tabindex="0"><?= Translate('ACESSE TAMBÉM')?></h3>
                    <div class="m-0 mb-3 p-0">
                        <h5><a href="classicosprincipais.php" class="clink" tabindex="0"><?= Translate('Principais Clássicos')?></a></h5>
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
                                        <img src="images/reddead1.webp" class="imgarticle" alt="Ilustração do jogo Red Dead Redemption: Desenho de um homem vestido com roupas de faroeste segurando um revolver calibre 38 em primeiro plano, ao fundo o sol do lado direito e sete homens montados em cavalos ao lado esquerdo" />
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
    <?php
	// incluindo footer da página
	include('includes/footer.php');
    ?>
</body>

</html>