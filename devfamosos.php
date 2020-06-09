<!-- TRADUÇÃO da PÁGINA -->
<?php
    include('includes/process.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="FATEC São Roque - 2019 - PROJETO INTEGRADOR II: página 02 do tema de 'Desenvolvedoras' falando dos principais nomes em desenvolvimento de games'">
    <meta name="author" content="FERNANDO ZARA | @contato: fzc92@hotmail.com">
    <link rel="icon" href="images/favicon3.png">
    <title>Desenvolvedores Famosos</title>

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
                breadcrumb(array('index.php' => 'Home', 'PORTA/portal-games/devcriators.php' => Translate('DESENVOLVEDORES DE GAMES'), '' => Translate('DESENVOLVEDORES FAMOSOS')));

                include('includes/lang.php');
                ?>
            </div>
        </header>
        <article>
            <div class="container" id="content">
                <div class="row">
                    <div class="col-12 mt-4 mb-4">
                        <h1 class="text-center" tabindex="0"><?= Translate('DESENVOLVEDORES FAMOSOS') ?></h1>
                    </div>
                </div>
                <div class="row">

                    <div class="col-12 col-lg-5">
                        <img tabindex="0" class="mx-auto d-block img-fluid" src="./images/Zara/hideo_kojima.webp" alt="criador de jogos Hideo Kojima">
                    </div>
                    <div class="col-12 col-lg-6">
                        <h3 class="text-center" tabindex="0">Hideo Kojima</h3>
                        <p class="text-justify" tabindex="0">Hideo Kojima é um designer japonês de jogos eletrônicos que trabalhou para a Konami. Foi vice-presidente da Konami Computer Entertainment Japan e é o diretor-executivo e chefe de estúdio da Kojima Productions, que foi fundada em 2005 e renovada em 2015 por ele.</p>
                    </div>
                </div>
                <a class='sr-only sr-only-focusable' href='#topo'>
                    <div class='container text-center'>
                        <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                    </div>
                </a>
            </div>
        </article>

        <section>
            <div class="container">
                <div class="row">


                    <div class="col-12 col-lg-6">
                        <h3 class="text-center" tabindex="0">Shinji Mikami</h3>
                        <p class="text-justify" tabindex="0">Por incrível que pareça, até entrar na faculdade, Mikami não pensava em trabalhar com games. Na verdade, sequer jogava games. Mikami foi conhecer os jogos eletrônicos durante a faculdade, quando jogou seu primeiro game aos 20 anos. Foi Appoooh, um jogo japonês de arcade do estilo Wrestling lançado pela Sega em 1984.</p>
                    </div>
                    <div class="col-12 col-lg-5">
                        <img tabindex="0" class="mx-auto d-block img-fluid" src="./images/Zara/Shinji_Mikami.webp" alt="criador de jogos Shinji Mikami">
                    </div>
                </div>
                <a class='sr-only sr-only-focusable' href='#topo'>
                    <div class='container text-center'>
                        <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                    </div>
                </a>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">

                    <div class="col-12 col-lg-5">
                        <img tabindex="0" class="mx-auto d-block img-fluid" src="./images/Zara/Shigeru_Miyamoto.webp" alt="criador de jogos Shigeru Miyamoto">
                    </div>
                    <div class="col-12 col-lg-6">
                        <h3 class="text-center" tabindex="0">Shigeru Miyamoto</h3>
                        <p class="text-justify" tabindex="0">Shigeru Miyamoto é um designer e produtor de jogos eletrônicos japonês, conhecido por ser o criador de algumas das mais bem-sucedidas séries de jogos eletrônicos de todos os tempos. Miyamoto entrou na Nintendo em 1977, quando a companhia entrava no mercado de jogos.</p>
                    </div>
                </div>
                <a class='sr-only sr-only-focusable' href='#topo'>
                    <div class='container text-center'>
                        <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                    </div>
                </a>
            </div>
        </section>
        <section class="container mobileTheme">
            <div class="row mt-5">
                <div class="col">
                    <h3 class="text-center mt-2" tabindex="0"><?= Translate('ARTIGOS RELACIONADOS') ?></h3>
                </div>
            </div>
            <div class="separator mb-3"></div>
            <div class="row">
                <div class="col-md-6 mb-5 text-center">
                    <a href="devcriators.php" tabindex="0">
                        <h4><?= Translate('DESENVOLVEDORES DE GAMES') ?></h4>
                    </a>
                    <a href="devcriators.php"><img class="imagem2" src="images/Zara/Desenvolvedor-de-Games.webp" alt="Homem de costas sentado em uma mesa usando um computador" width="200" height="200"></a>
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