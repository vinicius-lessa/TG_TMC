<!-- TRADUÇÃO da PÁGINA -->
<?php
    include('includes/process.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="FATEC São Roque - 2019 - PROJETO INTEGRADOR II: página 01 do tema de 'Desenvolvedoras'">
    <meta name="author" content="FERNANDO ZARA | @contato: fzc92@hotmail.com">
    <link rel="icon" href="images/favicon3.png">
    <title>Desenvolvedoras de Games</title>

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
    <div class="devcreators">
        <header>
            <div>
                <?php
                // incluindo topo da página 
                include('includes/header.php');

                // breadcrumb
                breadcrumb(array('index.php' => 'Home', '' => Translate('DESENVOLVEDORES DE GAMES')));

                include('includes/lang.php');
                ?>
            </div>
        </header>

        <article>
            <div class="container" id="content">
                <div class="row">
                    <div class="col-12 mb-4">
                        <h1 class="text-center" tabindex="0"><?= Translate('DESENVOLVEDORES DE GAMES') ?></h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-12">
                       <img tabindex="0" class="mx-auto d-block img-fluid" src="images/Zara/desenvolvedora.jpg" alt="Jogo sendo programado em um software de manipulação de imagens e design de games">
                    </div>
                </div>
                <div class="row">


                    <div class="col-12 col-lg-6">
                        <p class="lead" tabindex="0">O que é preciso saber para ser um grande desenvolvedor de games?</p>
                        <p class="text-justify" tabindex="0">O mercado de games está em expansão, e nesse cenário de crescimento constante, os desenvolvedores de games são profissionais muito procurados! No entanto, para lançar um novo jogo, eles devem trabalhar duro e aplicar variados conhecimentos para que seus projetos tornem-se realidade! Aqui, nós contamos para você quais são as quatro competências mais importantes para quem atua nesse universo. Acompanhe.</p>
                        <p class="lead" tabindex="0">Engines</p>
                        <p class="text-justify" tabindex="0">As engines estão entre as ferramentas que você precisa dominar para desenvolver um novo game, já que elas podem te ajudar muito na produção de um novo projeto. Esses programas de desenvolvimento trazem um pacote extenso de recursos, os quais evitam que você construa um jogo do zero e dão uma forcinha na hora de criar personagens, níveis e até mesmo mapas. Então, não deixe de aprender a lidar com as funcionalidades desses programas e descubra qual se adequa ao seu estilo de trabalho! Entre os mais utilizados pelos desenvolvedores, estão Cryengine, Unreal, Source e Unity.</p>
                        <p class="lead" tabindex="0">Programação</p>
                        <p class="text-justify" tabindex="0">A programação costuma ser uma área do conhecimento que assusta um pouquinho; afinal, o ato de programar um código é considerado difícil por muitos profissionais. No entanto, ela é a linguagem básica de um jogo, e se você almeja ser um grande desenvolvedor de jogos, é necessário conhecer o tema! Estude os pontos mais importantes, como vetores e suas operações, lógica da programação e códigos de software. Mesmo que você não domine a programação em profundidade, conhecer o funcionamento básico das estruturas de códigos e as linguagens mais utilizadas é fundamental.</p>
                        <a class='sr-only sr-only-focusable' href='#topo'>
                            <div class='container text-center'>
                                <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p class="lead" tabindex="0">Design</p>
                        <p class="text-justify" tabindex="0">Além de todo o conhecimento técnico para desenvolver o seu jogo, proporcionando uma variedade de ações e colocando-o em funcionamento, você também deverá criar o layout do projeto. Isso significa que é necessário pensar nos aspectos visuais e desenvolver também os cenários, personagens e todos os outros elementos que compõem o seu jogo. Logo, não deixe de estudar design de games, aprimorar suas habilidades nos softwares da área, e conhecer um pouquinho sobre as animações 2D e 3D e como elas podem ser usadas no seu game.</p>
                        <p class="lead" tabindex="0">Ingles</p>
                        <p class="text-justify" tabindex="0">Dominar a língua inglesa é uma habilidade essencial na sua carreira, e vai ajudar você a aprimorar ainda mais os seus games. Atualmente, é possível encontrar uma grande variedade de apostilas e materiais on-line em inglês sobre o desenvolvimento de jogos. Portanto, reading skills são essenciais para os profissionais da área! Além disso, muitos softwares são programados em inglês, o que torna fundamental conhecer o idioma para escrever os códigos com eficiência.</p>
                        <div class="col-12">
                            <img tabindex="0" class="mx-auto d-block img-fluid" src="images/Zara/Desenvolvedor-de-Games.webp" alt="Homem de costas sentado em uma mesa usando um computador">
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
            <div class="separator mb-3"></div>
            <div class="row">
                <div class="col-md-6 mb-5 text-center">
                    <a href="devfamosos.php" tabindex="0">
                        <h4><?= Translate('DESENVOLVEDORES FAMOSOS') ?></h4>
                    </a>
                    <a href="devfamosos.php"><img src="./images/Zara/hideo_kojima.webp" alt="hideo kojima desenvolvedor de jogos" width="200" height="200"></a>
                </div>
                <div class="col-md-6 mb-5 text-center">
                    <a href="devgames.php" tabindex="0">
                        <h4><?= Translate('COMO SER UM DESENVOLVEDOR') ?></h4>
                    </a>
                    <a href="devgames.php"><img src="./images/Zara/Como-se-tornar-um-desenvolvedor-de-jogos.webp" alt="duas mão segurando um joystick com uma frase ao fundo: como se tornar um desenvolvedor de jogos." width="200" height="200"></a>
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