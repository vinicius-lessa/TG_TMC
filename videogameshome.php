<?php  
 // TRADUZ A PÁGINA 
    include('includes/process.php'); 
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Anderson Nascimento">
    <link rel="icon" href="images/favicon3.png">
    <title>Gamestuff &#8226; Video Games</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- CSS padrão -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/mine.js"></script>

    <!-- icones footer -->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

</head>
<div class="color-background-gradient">

    <body class="color-background-gradient videogames">

        <header>
            <div>
                <?php
          // incluindo topo da página 
          include('includes/header.php');
                    
          // breadcrumb
          breadcrumb(array('index.php' => 'Home', '' => Translate('Lançamentos')));

          include('includes/lang.php');
        ?>
            </div>
        </header>
        <article>
            <div class="container mb-5" id="content">
                <div class="row">
                    <div class="col-12">
                        <h1 class="jumbotron-heading" tabindex="0">Magnavox Odyssey</h1>
                        <p tabindex="0">O Magnavox Odyssey foi o primeiro console
                            caseiro de videogame da história. Foi apresentado pela primeira vez em abril de 1972 e lançado em agosto
                            do mesmo ano.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <img class="img-fluid" src="images/Anderson/magnavox.webp" alt="foto primeiro video-game da história" width="550" height="400" tabindex="0">
                    </div>
                    <div class="col-lg-6">
                        <h3 tabindex="0">História</h3>
                        <p tabindex="0">
                            O Odyssey foi desenvolvido por Ralph Baer, que começou a trabalhar em um protótipo em 1966 e o terminou por
                            volta de 1968. Este protótipo, conhecido como Brown Box, está agora no Museu Nacional de História Americana
                            do Smithsonian Institution em Washington.Apenas em Maio de 1986 a marca chega ao Brasil trazendo o Odyssey
                            2, concorrente do Atari 2600.</p>
                        <a class='sr-only sr-only-focusable' href='#topo'>
                            <div class='container text-center'>
                                <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </article>

        <div class="album py-3">
            <div class="container">

                <div class="row">
                    <div class="col-md-4  mb-4  ">
                        <div class="card cardvideogame cardespaço">
                            <img class="card-img-top cardespaço" src="images/Anderson/ralph.webp" alt="Foto criador magnavox odssey" width="100" height="200">
                            <div class="card-body">
                                <h3 tabindex="0">Ralph Baer</h3>
                                <p tabindex="0">
                                    Ralph Baer (Rodalben, 8 de março de 1922 — 6 de dezembro de 2014) foi um engenheiro e inventor alemão
                                    naturalizado americano, pioneiro dos jogos eletrônicos. Desenvolveu em 1969, por conta própria, a
                                    primeira ideia para um console de videogame doméstico, o Magnavox Odyssey.

                                    Conhecido como o "pai dos videogames".</p>

                                <div class="d-flex justify-content-between align-items-center cardespaço">
                                    <div class="btn-group">
                                        <a href="era8090.php" class="btn btnanderson btn-primary my-2" tabindex="0">Anos 80</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card cardvideogame mb-4 box-shadow">
                            <img class="card-img-top" src="images/Anderson/pong.webp" alt="Foto jogo pong" width="100" height="200">
                            <div class="card-body">
                                <h3 tabindex="0">Pong</h3>
                                <p tabindex="0">
                                    Pong é o primeiro videojogo lucrativo da história, dando origem a um novo setor da indústria. Foi de
                                    importância fundamental na história do videojogo. Foi criado por Nolan Bushnell e Ted Dabney na forma
                                    de um console ligado a um monitor, movido a moedas. A primeira instalação em um bar de San Francisco,
                                    Califórnia, mostrou aos dois a possibilidade de lucro da criação. Assim, em 27 de Junho de 1972, a
                                    empresa Atari foi fundada.
                                </p>
                                <p class="text-justify"> <a href=https://pong-2.com/ class="btn btnanderson btn-primary my-2">Jogar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card cardvideogame mb-4 box-shadow">
                            <div class="embed-responsive embed-responsive-16by9" tabindex="0">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/WPLjE_LzvDc" allowfullscreen></iframe>
                            </div>
                            <div class="card-body">
                                <h3 tabindex="0">Magnavox video promo</h3>
                                <p tabindex="0"> Este card mostra video de
                                    introdução do magnavox odssey e curiosidades e outros fatos importantes.</p>

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
        <?php
        include('includes/footer.php'); 
      ?>
    </body>
</div>

</html>
