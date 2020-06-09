<!-- TRADUÇÃO da PÁGINA -->
<?php
    include('includes/process.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="FATEC São Roque - 2019 - PROJETO INTEGRADOR II: página 02 do tema de 'Mobile e Portáteis'">
    <meta name="author" content="LUCAS JUSTI | @contato: lucas.silva563@fatec.sp.gov.br">
    <!-- FONTES CDN: 
        - https://fonts.google.com/
        - https://fontawesome.com/
    -->
    <link rel="icon" href="images/favicon3.png">
    <title>TOP 10</title>

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
                breadcrumb(array('index.php' => 'Home', '' => Translate('Os mais jogados')));

                include('includes/lang.php');
                ?>
            </div>
        </header>
        <main class="container">
            <article id="content">
                <div class="row">
                    <div class="col-12 mt-5 mb-4">
                        <h1 class="text-center" tabindex="0"><?= Translate('OS MAIS JOGADOS') ?></h1>
                        <p class="lead text-center" tabindex="0"><?= Translate('Os jogos mais populares para mobile do mundo.') ?></p>
                    </div>
                </div>

                <div class="row">
                    <table class="table table-hover table-dark cornavfooter" tabindex="0">
                        <thead>
                            <tr>
                                <th scope="col" colspan="2">#</th>
                                <th scope="col">Jogo</th>
                                <th scope="col">Nº de Jogadores</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td><img src="images/Lucas/pokemon.webp" height="31" width="50" alt="Logotipo do jogo Pokemon"></td>
                                <td>Pokémon Go</td>
                                <td>1 Bilhão</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td><img src="images/Lucas/minion.webp" height="44" width="50" alt="Logotipo do jogo Minion Rush"></td>
                                <td>Despicable Me: Minion Rush</td>
                                <td>900 Milhões</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td><img src="images/Lucas/candy.webp" height="37" width="50" alt="logotipo do jogo Candy Crush"></td>
                                <td>Candy Crush Saga</td>
                                <td>500 Milhões</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td><img src="images/Lucas/fruit.webp" height="39" width="50" alt="logotipo do jogo Fruit Ninja"></td>
                                <td>Fruit Ninja</td>
                                <td>500 Milhões</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td><img src="images/Lucas/jet.webp" height="29" width="50" alt="logotipo do jogo JetPack Joyride"></td>
                                <td>Jetpack Joyride</td>
                                <td>500 Milhões</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td><img src="images/Lucas/temple.webp" height="35" width="50" alt="logotipo do jogo Temple Run"></td>
                                <td>Temple Run</td>
                                <td>500 Milhões</td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td><img src="images/Lucas/asphalt.webp" height="50" width="50" alt="logotipo do jogo Asphalt"></td>
                                <td>Asphalt 8: Airborne</td>
                                <td>350 Milhões</td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td><img src="images/Lucas/helix.webp" height="48" width="50" alt="logotipo do jogo Helix Jump"></td>
                                <td>Helix Jump</td>
                                <td>334 Milhões</td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td><img src="images/Lucas/angry.webp" height="33" width="50" alt="logotipo do jogo Angry Birds"></td>
                                <td>Angry Birds</td>
                                <td>300 Milhões</td>
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td><img src="images/Lucas/mario.webp" height="45" width="50" alt="logotipo do jogo Super Mario Run"></td>
                                <td>Super Mario Run</td>
                                <td>300 Milhões</td>
                            </tr>
                        </tbody>
                    </table>
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
                        <a href="mobileevolution.php" tabindex="0">
                            <h4 class="text-center mt-2"><?= Translate('HISTÓRIA DOS PORTÁTEIS') ?></h4>
                        </a>
                        <a href="mobileevolution.php"><img src="images/Lucas/handheldlink.webp" alt="video-games portáteis sobre uma mesa" width="200" height="200"></a>
                    </div>
                    <div class="col-md-6 mb-5 text-center">
                        <a href="mobilereleases.php" tabindex="0">
                            <h4 class="text-center mt-2"><?= Translate('LANÇAMENTOS') ?></h4>
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