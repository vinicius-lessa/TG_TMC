<!-- TRADUÇÃO da PÁGINA -->
<?php 
    include('includes/process.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="FATEC São Roque - 2019 - PROJETO INTEGRADOR II: página de contatos">
    <meta name="author" content="LUCAS JUSTI | @contato: lucas.silva563@fatec.sp.gov.br">
    <!-- FONTES CDN: 
        - https://fonts.google.com/
        - https://fontawesome.com/
    -->
    <link rel="icon" href="images/favicon3.png">
    <title>Contato</title>

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

<body class="color-background-gradient">
    <div class="contatos">
        <header>
            <div>
                <?php
                 // incluindo topo da página 
                    include('includes/header.php');   
                                                
                    // breadcrumb
                    breadcrumb(array('index.php' => 'Home', '' => Translate('Contatos')));

                    include('includes/lang.php');  
            ?>
            </div>
        </header>
        <main class="container" id="content">
            <article class="mt-5 mb-5">
                <h1 class="display-4 text-center" tabindex="0"><?= Translate('CONTATOS') ?></h1>
                <div class="container contact">
                    <div class="row">
                        <div class="col-md-4" tabindex="0">
                            <div class="contact-info">
                                <img src="images/contact.png" alt="envelope de carta" />
                                <h4><?= Translate('TELEFONE') ?></h4>
                                <p class="text-justify">11-9901-1010</p>
                                <p class="text-justify">11-9910-0101</p>
                                <h4><?= Translate('E-MAIL') ?></h4>
                                <p class="text-justify">game_stuff@email.com.br</p>
                                <p class="text-justify">gamestuff@email.com</p>
                            </div>
                        </div>
                        <form class="col-md-8">
                            <div>
                                <div class="contact-form">
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="fname">Nome:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="fname" placeholder="Nome" name="fname" tabindex="0">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="lname">Sobrenome:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="lname" placeholder="Sobrenome" name="lname" tabindex="0">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="email">Email:</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="email" placeholder="Email" name="email" tabindex="0">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="comment">Comentário:</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" rows="5" id="comment" tabindex="0" placeholder="Deixe uma mensagem..."></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <input type="submit" value="Enviar" class="text-center btn btn-light" tabindex="0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </article>
        </main>
        <!--Footer-->
        <?php
	// incluindo footer da página
	include('includes/footer.php');
    ?>
    </div>
</body>

</html>
