<!-- TRADUÇÃO da PÁGINA -->
<?php 
    include('includes/process.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="FATEC São Roque - 2019 - PROJETO INTEGRADOR II: página 02 do tema de 'Lançamentos', contendo informações sobre os mais novos lançamentos do momento">
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
                    breadcrumb(array('index.php' => 'Home', 'PORTA/portal-games/lancamentoshome.php' => Translate('Lançamentos'), '' => Translate('Consoles da Nova Geração - Xbox e PS5')));

                    include('includes/lang.php');   
            ?>
            </div>
        </header>

        <article class="container" id="content">
            <h1 class="mt-3 h1top" tabindex="0"><?= Translate('LANÇAMENTOS MAIS ESPERADOS') ?></h1>
            <h3 class="mb-1 ml-4" tabindex="0"><?= Translate('Conheça as Especificações e Poder dos Novos Consoles') ?></h3>
            <div class="container rounded sombraC" style="background-image: linear-gradient(-90deg, #0d0d0d,#212121, #212121, #0d0d0d);">
                <div class="row mt-1">
                    <div class="col-lg-12">
                        <iframe class="embed-responsive-item col-lg-12  p-0 mt-3 text-center sombraV" height="500px" style="max-width: 100%" src="https://www.youtube.com/embed/-ktN4bycj9s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen tabindex="0"></iframe>
                    </div>
                    <a class='sr-only sr-only-focusable' href='#topo'>
                        <div class='container text-center'>
                            <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-12">
                    <div class="container p-0">
                        <div class="row">
                            <div class="col-md-12 p-0">
                                <div class=" p-0 m-1 mb-3">
                                    <div class="separator"></div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <h3 class="mt-3 mb-2" tabindex="0"><?= Translate('Configurações Xbox x PS4 - Antiga e Nova Geração') ?></h3>
                                                <p class="mt-3" tabindex="0">A linha PlayStation de videogames da marca Sony tem como seus ícones atuais os modelos PlayStation 3 e PlayStation 4.

                                                    Lançado em 2005, o PlayStation 3, também conhecido como PS3, já vendeu mais de 85 milhões de unidades em todo o mundo. Existem 3 modelos de PlayStation 3: o primeiro modelo que era maior começou a ser vendido em 2006, o PlayStation 3 Slim já com um tamanho menor e mais atraente lançado em 2009 e o PlayStation 3 “Super” Slim menor ainda que o anterior lançado em 2012.

                                                    Já o PlayStation 4, também conhecido como PS4, foi lançado em 2013 e já vendeu mais de 40 milhões de unidades. Já foram lançados mais 2 novos modelos de PlayStation 4: o PlayStation 4 Slim com uma redução de tamanho em relação ao seu anterior e o PlayStation 4 Pro que entre outras novidades roda jogos em resolução 4K.</p>
                                                <table class="table table-bordered table-dark mt-2" tabindex="0">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Componentes</th>
                                                            <th scope="col">Scarllet</th>
                                                            <th scope="col">One X</th>
                                                            <th scope="col">PS4 Pro</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>

                                                            <td>Processador</td>
                                                            <td>AMD Zen 2</td>
                                                            <td>AMD Jaguar 2.3GHz 8-core</td>
                                                            <td>AMD Jaguar x86-64 8-core</td>
                                                        </tr>
                                                        <tr>

                                                            <td>Memória RAM</td>
                                                            <td>?? GDDR6</td>
                                                            <td>12 GB GDDR5</td>
                                                            <td>8 GB GDDR5</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Armazenamento</td>
                                                            <td>?? SSDs</td>
                                                            <td>1 TB - HDD</td>
                                                            <td>1 TB - HDD</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Placa de Vídeo</td>
                                                            <td>?? AMD</td>
                                                            <td>AMD Radeon - 6 TFs</td>
                                                            <td>AMD Radeon - 4,2 TFs</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a class='sr-only sr-only-focusable' href='#topo'>
                                                    <div class='container text-center'>
                                                        <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <aside class="col-lg-4" style="max-width: 500px">
                                                <div class="col rounded" style="background-color: rgba(46, 45, 45, 0.89);">
                                                    <h3 class="h3menor mt-4 bordah3" style="color: #e2e2e2" tabindex="0"><?= Translate ('Talvez Você Goste') ?></h3>
                                                    <div class="separator"></div>
                                                    <div class="container mt-3">
                                                        <ul>
                                                            <p style="margin-top: -2%; margin-left: -10%"><a style="color:#21aef8; font-size: 1.2em;text-shadow: 2px 2px 8px rgba(122, 197, 244, 0.20)" href="lancamentoshome.php" tabindex="0"><?= Translate ('Conferência da E3') ?></a></p>
                                                            <p style="margin-top: -2%; margin-left: -10%"><a style="color:#21aef8; font-size: 1.2em;text-shadow: 2px 2px 8px rgba(122, 197, 244, 0.20)" href="lancamentostrailers.php" tabindex="0"><?= Translate ('Novos Trailers Irados') ?></a></p>
                                                            <p style="margin-top: -2%; margin-left: -10%"><a style="color:#21aef8; font-size: 1.2em;text-shadow: 2px 2px 8px rgba(122, 197, 244, 0.20)" href="classicoscuriosidades.php" tabindex="0"><?= Translate ('Curiosidades da Antiga Geração') ?></a></p>
                                                        </ul>
                                                    </div>
                                                    <div class="separator"></div>
                                                    <div class="container mt-2">
                                                        <ul>
                                                            <p style="margin-top: -2%; margin-left: -10%; margin-bottom: -4%"><a style="color:#21aef8; font-size: 1.2em;text-shadow: 2px 2px 8px rgba(122, 197, 244, 0.20)" href="lancamentostrailers.php" tabindex="0"><?= Translate ('Conheça os Clássicos')?></a></p>
                                                        </ul>
                                                        <img tabindex="0" src="images/Shirai/sonic.webp" class="img-fluid img-thumbnail mb-2" alt="personagem de videogames sonic" style="max-width: 100%" />
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
            <h3 class="mt-3" tabindex="0"><?= Translate ('Novidades Que Podem Lhe Interessar')?></h3>
            <div class="row mt-3">
                <div class="col-lg-12">
                    <div class="container p-0">
                        <div class="row">
                            <div class="col-lg-4 fundosec">
                                <div class="text-center p-0 mt-1 mb-1 mr-1">
                                    <img src="images/Vinicius/gtasa1.webp" class="sombraV rounded img-thumbnail" style="max-width: 100%;" alt="Imagem do jogo GTA SAN ANDREAS, homem segurando arma caracterizado como bandido">
                                    <div class="col text-center mt-3">
                                        <a style="color:#21aef8;font-size: 1.5em; text-shadow: 2px 2px 8px rgba(255, 255, 255, 0.20)" href="bestxxihome.php" tabindex="0"><?= Translate ('Melhores Games do Século')?></a>
                                    </div>
                                    <p class="cormelhor" tabindex="0">Confira a Matéria que preparamos contando os Games mais marcantes dessa geração, será que você conhece todos eles? Apostamos que sim... <a style="color:#21aef8;font-size: 1.1em; text-shadow: 2px 2px 8px rgba(255, 255, 255, 0.20)" href="bestxxihome.php" tabindex="0"><?= Translate('Ler Mais') ?></a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 fundosec">
                                <div class="text-center p-0 mt-1 mb-1 ml-1">
                                    <img src="images/Zara/desenvolvedores_de_game.webp" class="sombraV rounded img-thumbnail" style="max-width: 100%" alt="banner com os logotipos de várias empresas de jogos">
                                    <div class="col text-center mt-3">
                                        <a style="color:#21aef8;font-size: 1.5em; text-shadow: 2px 2px 8px rgba(255, 255, 255, 0.20)" href="devcriators.php" tabindex="0"><?= Translate ('Desenvolvimento de Games')?></a>
                                    </div>
                                    <p class="cormelhor" tabindex="0">Quer saber como é o processo de um desenvolvimento de jogo? Também quais as ferramentas e maiores estúdios do momento? Então não deixe de conferir nossa matéria especial sobre o assunto...<a style="color:#21aef8;font-size: 1.1em; text-shadow: 2px 2px 8px rgba(255, 255, 255, 0.20)" href="devcriators.php" tabindex="0"><?= Translate('Ler Mais') ?></a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 fundosec">
                                <div class="text-center p-0 mt-1 mb-1 ml-1">
                                    <div class="container sombraV rounded" style="background-color: white;">
                                        <img src="images/Marcelo/pcgamer.webp" class=" rounded" style="max-width: 100%; max-height: 200px" alt="Gabinete PC Gamer, placa de vídeo e processador">
                                    </div>
                                    <div class="col text-center mt-3">
                                        <a style="color:#21aef8;font-size: 1.5em; text-shadow: 2px 2px 8px rgba(255, 255, 255, 0.20)" href="pchome.php" tabindex="0"><?= Translate ('Novidades Sobre PCs')?></a>
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