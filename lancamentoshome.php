<!-- TRADUÇÃO da PÁGINA -->
<?php
include('includes/process.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="FATEC São Roque - 2019 - PROJETO INTEGRADOR II: página 01 do tema de 'Lançamentos', contendo informações sobre os mais novos lançamentos do momento">
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
                    breadcrumb(array('index.php' => 'Home', 'lancamentoshome.php' => Translate('Lançamentos')));

                include('includes/lang.php');
                ?>
            </div>
        </header>

        <article class="container" id="content">
            <h1 class="mt-3 h1top" tabindex="0"><?= Translate('LANÇAMENTOS MAIS ESPERADOS') ?></h1>
            <h3 class="mb-1 ml-4" tabindex="0"><?= Translate('Conferência Completa e Novidades na E3 2019: Microsoft') ?></h3>
            <div class="row mt-3">
                <div class="container rounded h-100 sombraC text-center" style="background-image: url('images/Shirai/halow.webp');background-size:cover;">
                    <iframe class="embed-responsive-item col-md-9 col-lg-9 p-0 mt-1 text-center sombraV" height="460px" src="https://www.youtube.com/embed/ixdUEbOI-38" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen tabindex="0"></iframe>
                </div>
                <div class="col-lg-12">
                    <div class="container p-0">
                        <div class="row">
                            <div class="col-md-12 p-0">
                                <div class=" p-0 m-1 mb-3">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-7 col-xl-8">
                                                <p class="mt-3" tabindex="0">A EA deu o pontapé inicial nos trabalhos da E3 2019. Embora não apresente uma conferência propriamente dita, a empresa norte-americana organizou um evento próprio focado no que "realmente importa": jogos.</p>
                                                <p class="text-justify" tabindex="0">Mesclando bate-papo com produtores, desenvolvedores e designers com gameplays e teasers de jogos como FIFA 20, Madden NFL 20, Apex Legends e The Sims 4, a apresentação, em sua maior parte, foi insossa e teve um total de zero surpresas — também pudera: absolutamente tudo que foi abordado na tarde deste sábado já havia sido confirmado com antecedência.</p>
                                                <p class="text-justify" tabindex="0">Presa ao cronograma que se impôs, a EA só conseguiu empolgar mesmo com Star Wars Jedi: Fallen Order ao apresentar 15 minutos de gameplay ininterrupto. É visível que o game se inspira em muitas séries de sucesso, como God of War, Uncharted e Star Wars: The Force Unleashed, e até mesmo em iterações mais recentes nos cinemas, como O Despertar da Força, mesclando e adaptando muito bem diversas mecânicas e elementos de gameplay num só lugar.</p>
                                                <a class='sr-only sr-only-focusable' href='#topo'>
                                                    <div class='container text-center'>
                                                        <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <aside class="col-lg-5 col-xl-4" style="max-width: 400px">
                                                <div class="col rounded" style="background-color: rgba(46, 45, 45, 0.89);">
                                                    <h3 class="h3menor mt-4 bordah3" style="color: #e2e2e2" tabindex="0"><?= Translate('Talvez Você Goste') ?></h3>
                                                    <div class="separator"></div>
                                                    <div class="container mt-3">
                                                        <ul>
                                                            <p style="margin-top: -2%; margin-left: -10%"><a style="color:#21aef8; font-size: 1.2em;text-shadow: 2px 2px 8px rgba(122, 197, 244, 0.20)" href="lancamentostrailers.php" tabindex="0"><?= Translate('Novos Trailers Irados') ?></a></p>
                                                            <p style="margin-top: -2%; margin-left: -10%"><a style="color:#21aef8; font-size: 1.2em;text-shadow: 2px 2px 8px rgba(122, 197, 244, 0.20)" href="lancamentosconsoles.php" tabindex="0"><?= Translate('Consoles da Nova Geração - Xbox e PS5') ?></a></p>
                                                            <p style="margin-top: -2%; margin-left: -10%"><a style="color:#21aef8; font-size: 1.2em;text-shadow: 2px 2px 8px rgba(122, 197, 244, 0.20)" href="era2000.php" tabindex="0"><?= Translate('Relembre a Geração 2000') ?></a></p>
                                                        </ul>
                                                    </div>
                                                    <div class="separator"></div>
                                                    <div class="container mt-2">
                                                        <h3 class="h3menor" style="color: #e2e2e2" tabindex="0"><?= Translate('Inspire-se Com o Spider Man') ?></h3>
                                                        <iframe class="embed-responsive-item img-fluid text-center mb-2" width="600px" style="max-width:100%" height="200px" src="https://www.youtube.com/embed/q4GdJVvdxss" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen tabindex="0"></iframe>

                                                    </div>
                                                    <a class='sr-only sr-only-focusable' href='#topo'>
                                                        <div class='container text-center'>
                                                            <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </aside>
                                        </div>
                                    </div>
                                    <div class="container rounded col-lg-10 text-center">
                                        <img src="images/Shirai/cyberpunk1.webp" class="rounded sombraV bordaimg mb-2 mt-2 text-center" alt="Imagem Promocional do Jogo CyberPunk2077, onde mostra dois Cyborgues Conversando" style="max-width: 100%;" tabindex="0" />
                                    </div>
                                    <h3 class="mt-3" tabindex="0">CyberPunk 2077</h3>
                                    <div class="container col-lg-12 p-0 ">
                                        <div class="container col-lg-12 text-center">
                                            <p class="col-lg-11 mt-3 p-0" tabindex="0">
                                                Cyberpunk 2077 é uma história de ação e aventura de mundo aberto ambientada em Night City, uma megalópole obcecada por poder, glamour e biomodificações. Você joga como V, um mercenário fora da lei atrás de um implante único que carrega a chave da imortalidade. Você pode personalizar aparatos cibernéticos, conjunto de habilidades e estilo de jogo do personagem e explorar uma vasta cidade onde as decisões tomadas definem a história e o mundo ao seu redor.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="container rounded col-lg-10 text-center">
                                        <img src="images/Shirai/lastofus.webp" class="rounded  sombraV bordaimg mb-2 mt-2 text-center" alt="Imagem promocional do jogo The Last Of Us 2, onde mostra a personagem Ellie Caçando" style="max-width: 100%;" tabindex="0" />
                                    </div>
                                    <h3 class="mt-3" tabindex="0">The Last Of Us: Part II</h3>
                                    <div class="container col-lg-12 p-0 ">
                                        <div class="container col-lg-12 text-center">
                                            <p class="col-lg-11 p-0 mt-3" tabindex="0">
                                                The Last of Us Part 2 é o grande jogo exclusivo para PS4 com data de lançamento para 21 de fevereiro de 2020. Ele chega para suceder o primeiro game, de 2013, em tudo: ambição, qualidade de história e sucesso. Testamos a demo do novo jogo da Naughty Dog e podemos afirmar que é a sequência que todos esperavam para o game que virou febre. Durante os testes, jogamos duas partes distintas da história, uma no início e outra mais a frente da trama.
                                            </p>
                                        </div>
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
            </div>
        </article>
        <section class="container mb-5 mt-4">
            <div class="separator"></div>
            <h3 class="mt-3" tabindex="0"><?= Translate('Novidades Que Podem Lhe Interessar') ?></h3>
            <div class="row mt-3">
                <div class="col-lg-12">
                    <div class="container p-0">
                        <div class="row">
                            <div class="col-lg-4 fundosec">
                                <div class="text-center p-0 mt-4 mb-1 mr-1">
                                    <img tabindex="0" src="images/Vinicius/gtasa1.webp" class="sombraV rounded img-thumbnail" style="max-width: 100%;" alt="Imagem promocional do jogo Gta San Andreas, onde mostra um bandido com uma arma, e um link logo abaixo">
                                    <div class="col text-center mt-3">
                                        <a style="color:#21aef8;font-size: 1.5em; text-shadow: 2px 2px 8px rgba(255, 255, 255, 0.20)" href="bestxxihome.php" tabindex="0"><?= Translate('Melhores Games do Século') ?></a>
                                    </div>
                                    <p class="cormelhor" tabindex="0">Confira a Matéria que preparamos contando os Games mais marcantes dessa geração, será que você conhece todos eles? Apostamos que sim... <a style="color:#21aef8;font-size: 1.1em; text-shadow: 2px 2px 8px rgba(255, 255, 255, 0.20)" href="bestxxihome.php" tabindex="0"><?= Translate('Ler Mais') ?></a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 fundosec">
                                <div class="text-center p-0 mt-4 mb-1 ml-1">
                                    <img tabindex="0" src="images/Zara/desenvolvedores_de_game.webp" class="sombraV rounded img-thumbnail" style="max-width: 100%" alt="Imagem com Logos de Empresas de Jogos">
                                    <div class="col text-center mt-3">
                                        <a style="color:#21aef8;font-size: 1.5em; text-shadow: 2px 2px 8px rgba(255, 255, 255, 0.20)" href="devcriators.php" tabindex="0"><?= Translate('Desenvolvimento de Games') ?></a>
                                    </div>
                                    <p class="cormelhor" tabindex="0">Quer saber como é o processo de um desenvolvimento de jogo? Também quais as ferramentas e maiores estúdios do momento? Então não deixe de conferir nossa matéria especial sobre o assunto...<a style="color:#21aef8;font-size: 1.1em; text-shadow: 2px 2px 8px rgba(255, 255, 255, 0.20)" href="devcriators.php" tabindex="0"><?= Translate('Ler Mais') ?></a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 fundosec">
                                <div class="text-center p-0 mt-4 mb-1 ml-1">
                                    <div class="container sombraV rounded" style="background-color: white;">
                                        <img tabindex="0" src="images/Marcelo/pcgamer.webp" class=" rounded" style="max-width: 100%; max-height: 200px" alt="Um Computador Gamer">
                                    </div>
                                    <div class="col text-center mt-3">
                                        <a style="color:#21aef8;font-size: 1.5em; text-shadow: 2px 2px 8px rgba(255, 255, 255, 0.20)" href="pchome.php" tabindex="0"><?= Translate('Novidades Sobre PCs') ?></a>
                                    </div>
                                    <p class="cormelhor" tabindex="0">Preparamos uma matéria especial, dedicada somente a games exclusivos de computadores, venha conferir... <a style="color:#21aef8;font-size: 1.1em; text-shadow: 2px 2px 8px rgba(255, 255, 255, 0.20)" href="pchome.php" tabindex="0"><?= Translate('Ler Mais') ?></a>
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