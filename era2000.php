<?php  
 // TRADUZ A PÁGINA 
    include('includes/process.php');
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="gamestuff">
    <link rel="icon" href="images/favicon3.png">
    <title>Gamestuff &#8226; Era 2000</title>

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
<div class="color-background-gradient">

    <body class="color-background-gradient">

        <header>
            <div class="videogames">
                <?php                    
                    
                    include('includes/header.php');
                    // breadcrumb
                    breadcrumb(array('index.php'=>'Home', 'PORTA/portal-games/videogameshome.php'=> Translate('História: Video-games'), 'PORTA/portal-games/era8090.php' => Translate('Era 80/90'), '' => 'Era 2000'));
					
					include('includes/lang.php'); 
                ?>
            </div>
        </header>
        <div class="container" id="content"></div>
        <div class="jumbotron p-3 p-md-5 text-black rounded bg-dark" style="background-color:white;">
            <div class="col-md-6 px-0">
                <h1 tabindex="0">Nintendo 64</h1>
                <p style="color:white;" tabindex="0">Lançado em 23 de junho de 1996 no Japão, contava com três títulos de lançamento disponíveis: Super Mario 64, PilotWings 64 e Saikyou Habu Shogi. Nos EUA e no Brasil foi lançado simultaneamente em 29 de setembro de 1996 e em ambos os países, havia apenas dois títulos de lançamento disponíveis: Super Mario 64 e PilotWings mas, equanto nos EUA os títulos eram vendidos à parte, no Brasil, o console vinha com o cartucho de Super Mario 64 incluso. Já quando foi lançado na Europa, em 1 de março de 1997, o console contou com sete jogos de lançamento: além de Super Mario 64 e PilotWings, havia Wayne Gretzky's 3D Hockey, Cruis'n USA, Star Wars: Shadows of the Empire, FIFA Soccer 64 e Turok: Dinosaur Hunter.</p>
                <img tabindex="0" class="#" src="images/Anderson/gameshome1.webp" alt="Controles dos videogames playstation 1 e nintendo 64 lado a lado" width="400" height="270">
            </div>
            <a class='sr-only sr-only-focusable' href='#topo'>
                <div class='container text-center'>
                    <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                </div>
            </a>
        </div>
        <div class="row mb-2">
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <h3 class="mb-0">
                            <a class="text-dark" href="#" tabindex="0">Games dos Anos 2000</a>
                        </h3>
                        <p class="card-text mb-auto">
                            <p style="color:black;font-family: 'Oswald', 'Arial', sans-serif;" tabindex="0"> Este card traz um pouco dos games que marcaram o inicio dos anos 2000,temos o gamecube,xbox,playstation2 entre outros. </p>
                            <a href="bestxxihome.php" class="text-blue font-weight-bold" target="_blank" tabindex="0">Continue lendo</a>
                    </div>
                    <img tabindex="0" class="card-img-right " src="images/Anderson/games3.webp" alt="Card image cap" width="250" height="300" target="_blank">
                </div>
            </div>
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <h3 class="mb-0">
                            <a class="text-dark" href="#" tabindex="0">Consoles Atuais</a>
                        </h3>
                        <p class="card-text mb-auto">
                            <p style="color:black;font-family: 'Oswald', 'Arial', sans-serif;" tabindex="0"> Este card mostra um pouco da história dos video-games mais jogados do ano de 2015 em diante temos,o playstation4,nintendo switch e xbox one.
                                <a href="bestxxiyear.php" class="text-blue font-weight-bold" target="_blank" tabindex="0">Continue lendo</a></p>
                            <p class="text-justify"> <a href="index.php" class="text-blue font-weight-bold" style="margin-left:10;" target="_blank">Voltar a pagina Inicial</a>
                    </div>
                    <img tabindex="0" class="card-img-right " src="images/Anderson/games2.webp" alt="Card image cap" width="250" height="300">
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
    </body>
</div>

</html>