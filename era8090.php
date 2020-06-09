<!-- TRADUÇÃO da PÁGINA -->
<?php
    include('includes/process.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Anderson Nascimento">
    <link rel="icon" href="images/favicon3.jpg">
    <title>Gamestuff &#8226; Era 80/90</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- CSS padrão -->
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>

    <!-- Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/mine.js"></script>

    <!-- icones footer -->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
</head>

<body class="color-background-gradient">
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

    <div class="videogames" id="content">
        <div class="jumbotron">
            <div class="container pr-4">
                <h1 class="jumbotron-heading" style="color:black;" tabindex="0">Atari</h1>
                <p style="color:black;font-family: 'Oswald', 'Arial', sans-serif;" tabindex="0">Atari, Inc. é uma empresa de produtos eletrônicos, e uma das principais responsáveis pela popularização dos Video games. Foi fundada em 1972 por Nolan Bushnell e Ted Dabney, e no mesmo ano começou a produzir em massa máquinas que reproduziam o jogo Pong.</p>
                <img tabindex="0" src="images/Anderson/atari.webp" alt="foto primeiro video-game da história" width="auto" height="auto">
            </div>
            <a class='sr-only sr-only-focusable' href='#topo'>
                <div class='container text-center'>
                    <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                </div>
            </a>
        </div>
        <div class="album">
            <div class="container">
                <div class="row">
                    <div class="col-md-4  mb-4 ">
                        <div class="card 1 ">
                            <img tabindex="0" class="card-img-top" src="images/Anderson/master.webp" alt="Foto criador magnavox odssey" width="100" height="200">
                            <div class="card-body">
                                <p class="card-text">
                                    <h3 tabindex="0" style="color:black;font-family: 'Oswald', 'Arial', sans-serif;">Master System</h3>
                                    <p tabindex="0" style="color:black;font-family: 'Oswald', 'Arial', sans-serif;">
                                        Em 1990, após o lançamento do Sega Genesis, a SEGA recuperou os direitos de comercialização do Master System nos EUA e lançou uma versão com um novo desenho, chamado Master System II. Esse novo modelo era mais barato, mas por outro lado foram removidos o botão de Reset e a entrada para óculos 3D, impossibilitando a utilização desse acessório e dos jogos em formato de cartão (Sega Card).</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="era2000.php" class="btn btnanderson btn-primary my-2" tabindex="0">Consoles Atuais</a>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4  mb-4 ">
                        <div class="card 2">
                            <img tabindex="0" class="card-img-top" src="images/Anderson/nintendo.webp" alt="Foto jogo pong" width="100" height="200">
                            <div class="card-body">
                                <p class="card-text">
                                    <h3 tabindex="0" style="color:black;font-family: 'Oswald', 'Arial', sans-serif;">Nintendo</h3>
                                    <p tabindex="0" style="color:black;font-family: 'Oswald', 'Arial', sans-serif;">A história da Nintendo começa em 23 de setembro de 1889, quando Fusajiro Yamauchi fundou a empresa com o nome Nintendo Koppai para produzir Hanafuda, um tipo de jogo de cartas que acabou ficando popular no Japão. ... Ltd. para aumentar a circulação das novas cartas da empresa</p>
                                    <div class="d-flex justify-content-between align-items-center">

                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card 3">
                            <div class="embed-responsive embed-responsive-16by9" tabindex="0">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/jhLb20XgwUE" allowfullscreen></iframe>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    <h3 tabindex="0" style="color:black;font-family: 'Oswald', 'Arial', sans-serif;">Anos 80 e 90</h3>
                                    <p tabindex="0" style="color:black;font-family: 'Oswald', 'Arial', sans-serif;">Este card traz um pouco a história dos games que marcaram os anos 80 e 90 e ainda são comtemplados nosdias de hoje.</p>
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
            <footer>
                <?php  
                include('includes/footer.php'); 
            ?>
            </footer>
        </div>
    </div>
</body>

</html>