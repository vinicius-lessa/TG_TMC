<!-- TRADUÇÃO da PÁGINA -->
<?php
    include('includes/process.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="FATEC São Roque - 2019 - PROJETO INTEGRADOR II: página 03 do tema de 'Desenvolvedoras'">
    <meta name="author" content="FERNANDO ZARA | @contato: fzc92@hotmail.com">
    <link rel="icon" href="images/favicon3.png">
    <title>Como ser um desenvolvedor</title>

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

                echo '<br>';
                // breadcrumb
                breadcrumb(array('index.php' => 'Home', 'PORTA/portal-games/devcriators.php' => Translate('DESENVOLVEDORES DE GAMES'), '' => Translate('DESENVOLVEDORES DE GAMES')));

                include('includes/lang.php');
                ?>
            </div>
        </header>
        <article>
            <div class="container" id="content">
                <div class="row">
                    <div class="col-12 mb-4">
                        <h1 class="text-center" tabindex="0"><?= Translate('COMO SER UM DESENVOLVEDOR') ?></h1>
                        <p class="lead text-center" tabindex="0"><?= Translate('APRENDA A SER UM DESENVOLVEDOR DE GAMES') ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img tabindex="0" class="mx-auto d-block img-fluid" src="./images/Zara/Como-se-tornar-um-desenvolvedor-de-jogos.webp" alt="duas mão segurando um joystick com uma frase ao fundo: como se tornar um desenvolvedor de jogos.">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mt-4">
                        <img tabindex="0" class="mx-auto d-block img-fluid" src="./images/Zara/jogosdigitais.webp" alt="Homem de costas sentado em uma mesa usando um computador">
                    </div>
                    <div class="col-md-6 mt-4">
                        <p class="lead" tabindex="0">Como funciona a carreira de um desenvolvedor de games</p>
                        <p class="text-justify" tabindex="0">Muitos profissionais pretendem ingressar nessa profissão e desejam ser contratados por uma grande empresa. Afinal, essa é uma oportunidade de iniciar a carreira e crescer profissionalmente. Se esse também é o seu objetivo, veja a seguir os passos que você precisa seguir para trabalhar em uma grande empresa e se tornar um desenvolvedor de games de sucesso.</p>
                        <p class="lead" tabindex="0">Procure uma formação prática</p>
                        <p class="text-justify" tabindex="0">O primeiro passo para se transformar em um profissional de jogos renomado é buscar se capacitar. Um curso tecnólogo voltado para a criação de jogos digitais é uma excelente alternativa para investir na sua carreira.</p>
                    </div>
                </div>

                <div class="row invert">
                    <div class="col-md-6 mt-4">
                        <img tabindex="0" class="mx-auto d-block img-fluid" src="./images/Zara/game_engine.webp" alt="tela de um computador mostrando um programa usado para criação de jogos">
                    </div>
                    <div class="col-md-6 mt-4">
                        <p class="lead" tabindex="0">Teste os seus conhecimentos</p>
                        <p class="text-justify" tabindex="0">Mesmo antes de ser contratado por uma grande empresa, procure desenvolver seus conhecimentos em projetos próprios. Muitas vezes, a experiência em projetos pessoais é um fator que contribui para a contratação de um profissional. Afinal, se você quer se candidatar a uma vaga de desenvolvedor de games, é interessante que você construa um portfólio que certifique o seu conhecimento sobre o assunto.</p>
                    </div>
                </div>
                <a class='sr-only sr-only-focusable' href='#topo'>
                    <div class='container text-center'>
                        <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                    </div>
                </a>
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
                    <a href="devcriators.php" tabindex="0">
                        <h4><?= Translate('DESENVOLVEDORES DE GAMES') ?></h4>
                    </a>
                    <a href="devcriators.php"><img class="imagem2" src="images/Zara/Desenvolvedor-de-Games.webp" alt="Homem de costas sentado em uma mesa usando um computador" width="200" height="200"></a>
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