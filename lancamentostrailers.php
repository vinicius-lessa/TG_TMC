<!-- TRADUÇÃO da PÁGINA -->
<?php
include('includes/process.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="FATEC São Roque - 2019 - PROJETO INTEGRADOR II: página 03 do tema de 'Lançamentos', contendo informações sobre os mais novos lançamentos do momento">
    <meta name="author" content="GABRIEL SHIRAI MONTEIRO | @contato: gabrielshiraimonteiro@hotmail.com">
    <!-- FONTES CDN: 
        - https://fonts.google.com/
        - https://fontawesome.com/
    -->
    <link rel="icon" href="images/favicon3.png">
    <title>Lançamentos</title>

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
    <div class="lancamentosgab">
        <header>
            <div>
                <?php
                 // incluindo topo da página 
                    include('includes/header.php');   
                            
                    
                    // breadcrumb
                    breadcrumb(array('index.php' => 'Home', 'PORTA/portal-games/lancamentoshome.php' => Translate('Lançamentos'), '' => Translate('Novos Trailers Irados')));

                    include('includes/lang.php');   
            ?>
            </div>
        </header>

        <article class="container" id="content">
            <h1 class="mt-3 h1top" tabindex="0"><?= Translate('LANÇAMENTOS MAIS ESPERADOS') ?></h1>
            <h3 class="mb-1 ml-4" tabindex="0"><?= Translate('Fique por Dentro de Todos os Trailers da E3') ?></h3>
            <div class="container rounded sombraC" style="background-image: linear-gradient(-90deg, #0d0d0d,#212121, #212121, #0d0d0d);">
                <div class="row mt-1">
                    <div class="col-lg-8">
                        <iframe class="embed-responsive-item col-lg-8  p-0 mt-3 text-center sombraV" height="560px" style="max-width: 100%" src="https://www.youtube.com/embed/iZh4uQYDlsA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen tabindex="0"></iframe>
                    </div>
                    <div class="col-lg-4 text-center mt-1">
                        <div class="col" style="color:white">
                            <iframe class="embed-responsive-item p-0 text-center sombraV" height="190px" style="max-width: 100%" src="https://www.youtube.com/embed/piIgkJWDuQg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen tabindex="0"></iframe>
                            <iframe class="embed-responsive-item p-0 text-center sombraV" height="190px" style="max-width: 100%" src="https://www.youtube.com/embed/YApuEWtG30w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen tabindex="0"></iframe>
                            <iframe class="embed-responsive-item p-0 text-center sombraV" height="190px" style="max-width: 100%" src="https://www.youtube.com/embed/bH1lHCirCGI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen tabindex="0"></iframe>

                        </div>
                    </div>
                </div>
            </div>
            <a class='sr-only sr-only-focusable' href='#topo'>
                <div class='container text-center'>
                    <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                </div>
            </a>
            <div class="row mt-3">
                <div class="col-lg-12">
                    <div class="container p-0">
                        <div class="row">
                            <div class="col-md-12 p-0">
                                <div class=" p-0 m-1 mb-3">
                                    <div class="separator"></div>
                                    <div class="container-fluid rounded text-center col-lg-11">

                                        <img tabindex="0" src="images/Shirai/Price.webp" class="rounded sombraV bordaimg mb-2 text-center mt-2" alt="Imagem do Soldado Capitão Price do Jogo Modern Warfare" style="max-width: 100%;" />
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <h3 class="mt-3" tabindex="0"><?= Translate('A Volta do Capitão') ?></h3>
                                                <p class="mt-3" tabindex="0">The Avengers, o novo jogo dos Vingadores, foi revelado pela Square Enix para PS4, Xbox One, PC e Stadia na E3 2019. Com lançamento previsto para 15 de maio de 2020, o título é uma produção do estúdio Crystal Dynamics e deve trazer uma história inédita em relação aos filmes e quadrinhos. A equipe principal da trama será formada por Capitão América (na pele de Troy Baker), Hulk, Thor, Viúva Negra e Homem de Ferro. O game também terá elemento multiplayer cooperativo opcional.
                                                </p>
                                                <p class="text-justify" tabindex="0">Avengers será um jogo de ação em terceira pessoa, onde o player poderá controlar, alternadamente, os heróis em cada fase. O elemento multiplayer será cooperativo, para até quatro participantes, cada um no comando de um personagem, escolhido previamente. </p>
                                                <a class='sr-only sr-only-focusable' href='#topo'>
                                                    <div class='container text-center'>
                                                        <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <aside class="col-lg-4" style="max-width: 500px">
                                                <div class="col rounded" style="background-color: rgba(46, 45, 45, 0.89);">
                                                    <h3 class="h3menor mt-4 bordah3" style="color: #e2e2e2" tabindex="0"><?= Translate('Talvez Você Goste') ?></h3>
                                                    <div class="separator"></div>
                                                    <div class="container mt-3">
                                                        <ul>
                                                            <p style="margin-top: -2%; margin-left: -10%"><a style="color:#21aef8; font-size: 1.2em;text-shadow: 2px 2px 8px rgba(122, 197, 244, 0.20)" href="lancamentoshome.php" tabindex="0"><?= Translate('Conferência da E3') ?></a></p>
                                                            <p style="margin-top: -2%; margin-left: -10%"><a style="color:#21aef8; font-size: 1.2em;text-shadow: 2px 2px 8px rgba(122, 197, 244, 0.20)" href="lancamentosconsoles.php" tabindex="0"><?= Translate('Consoles da Nova Geração - Xbox e PS5') ?></a></p>
                                                            <p style="margin-top: -2%; margin-left: -10%"><a style="color:#21aef8; font-size: 1.2em;text-shadow: 2px 2px 8px rgba(122, 197, 244, 0.20)" href="era2000.php" tabindex="0"><?= Translate('Relembre a Geração 2000') ?></a></p>
                                                        </ul>
                                                    </div>
                                                    <div class="separator"></div>
                                                    <div class="container mt-2">
                                                        <ul>
                                                            <p style="margin-top: -2%; margin-left: -10%; margin-bottom: -4%"><a style="color:#21aef8; font-size: 1.2em;text-shadow: 2px 2px 8px rgba(122, 197, 244, 0.20)" href="classicoshome.php" tabindex="0"><?= Translate('Conheça os Clássicos') ?></a></p>
                                                        </ul>
                                                        <img tabindex="0" src="images/Shirai/sonic.webp" class="img-fluid img-thumbnail mb-2" alt="Imagem Pixelizada do Sonic" style="max-width: 100%" />
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <section class="container">
            <div class="separator"></div>
            <h3 class="mt-3" tabindex="0"><?= Translate('Novidades Que Podem Lhe Interessar') ?></h3>
            <div class="row mt-3">
                <div class="col-lg-12">
                    <div class="container p-0">
                        <div class="row">
                            <div class="col-lg-4 fundosec">
                                <div class="text-center p-0 mt-1 mb-1 mr-1">
                                    <img tabindex="0" src="images/Vinicius/gtasa1.webp" class="sombraV rounded img-thumbnail" style="max-width: 100%;" alt="Imagem promocional do jogo Gta San Andreas, onde mostra um bandido com uma arma, e um link logo abaixo">
                                    <div class="col text-center mt-3">
                                        <a style="color:#21aef8;font-size: 1.5em; text-shadow: 2px 2px 8px rgba(255, 255, 255, 0.20)" href="bestxxihome.php" tabindex="0"><?= Translate('Melhores Games do Século') ?></a>
                                    </div>
                                    <p class="cormelhor" tabindex="0">Confira a Matéria que preparamos contando os Games mais marcantes dessa geração, será que você conhece todos eles? Apostamos que sim... <a style="color:#21aef8;font-size: 1.1em; text-shadow: 2px 2px 8px rgba(255, 255, 255, 0.20)" href="bestxxihome.php" tabindex="0"><?= Translate('Ler Mais') ?></a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 fundosec">
                                <div class="text-center p-0 mt-1 mb-1 ml-1">
                                    <img tabindex="0" src="images/Zara/desenvolvedores_de_game.webp" class="sombraV rounded img-thumbnail" style="max-width: 100%" alt="Logos de Empresas Desenvolvedoras de Games">
                                    <div class="col text-center mt-3">
                                        <a style="color:#21aef8;font-size: 1.5em; text-shadow: 2px 2px 8px rgba(255, 255, 255, 0.20)" href="devcriators.php" tabindex="0"><?= Translate('Desenvolvimento de Games') ?></a>
                                    </div>
                                    <p class="cormelhor" tabindex="0">Quer saber como é o processo de um desenvolvimento de jogo? Também quais as ferramentas e maiores estúdios do momento? Então não deixe de conferir nossa matéria especial sobre o assunto...<a style="color:#21aef8;font-size: 1.1em; text-shadow: 2px 2px 8px rgba(255, 255, 255, 0.20)" href="devcriators.php" tabindex="0"><?= Translate('Ler Mais') ?></a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 fundosec">
                                <div class="text-center p-0 mt-1 mb-1 ml-1">

                                    <img tabindex="0" src="images/Zara/jogosdigitais.webp" class="sombraV rounded img-thumbnail" style="max-width: 100%; max-height:220px" alt="Homem Criando Jogos">

                                    <div class="col text-center mt-3">
                                        <a style="color:#21aef8;font-size: 1.5em; text-shadow: 2px 2px 8px rgba(255, 255, 255, 0.20)" href="devgames.php" tabindex="0"><?= Translate('Aprenda a Criar Games') ?></a>
                                    </div>
                                    <p class="cormelhor" tabindex="0">Acompanhe todo o processo de modelagem no desenvolvimento de um jogo, apostamos que você vai se surpreender e aprender da melhor forma possível... <a style="color:#21aef8;font-size: 1.1em; text-shadow: 2px 2px 8px rgba(255, 255, 255, 0.20)" href="devgames.php" tabindex="0"><?= Translate('Ler Mais') ?></a>
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