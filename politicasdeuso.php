<!-- TRADUÇÃO da PÁGINA -->
<?php
    include('includes/process.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="FATEC São Roque - 2019 - PROJETO INTEGRADOR II: página de NORMAS DE UTILIZAÇÃO">
    <meta name="author" content="FERNANDO ZARA">
    <!-- FONTES CDN: 
        - https://fonts.google.com/
        - https://fontawesome.com/
    -->
    <link rel="icon" href="images/favicon3.png">
    <title>Normas de Utilização</title>

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

<body class="color-background-gradient politicasdeuso">
    <div>
        <header>
            <div>
                <?php
                // incluindo topo da página 
                include('includes/header.php');

                // breadcrumb                
                breadcrumb(array('index.php' => 'Home', '' => Translate('Normas de Utilização')));     

                include('includes/lang.php');
                ?>
            </div>
        </header>

        <div class="container">
            <article class="mt-5 mb-5 border border-white rounded" id="content">
                <div class="container">
                    <h1 tabindex="0" class="mt-4 text-center"><?= Translate('NORMAS DE UTILIZAÇÃO') ?></h1>

                    <p tabindex="0" class="text-justify">O Portal Gamestuff, pertence e é operado pela Skynet Globodine Desenvolvimento de Jogos e Software,
                        Limitada..
                        Leia estes termos e condições com cuidado. Sua completa aceitação é condição para o uso do Site, dos
                        sites de Jogos e de quaisquer jogos disponibilizados pela Gamestuff por meio do Site e/ou Lojas de
                        Terceiros, bem como para o uso dos sites específicos dos Jogos direcionados pelo Portal (tais como,
                        por
                        exemplo, pesadelo.gamestuff.com) (“Sites dos Jogos”). Se você não concorda com qualquer parte destes
                        Termos
                        de Uso, por favor, não faça uso do Portal, de qualquer Jogo ou dos Sites, se você for menor de
                        idade,
                        deverá obter o consentimento de seus pais ou responsáveis quanto à aceitação destes Termos de Uso, e
                        para todos os efeitos legais, a Skyjaz considerará que você obteve caso venha a usar o Portal, os
                        Jogos
                        ou os Sites de Jogos.</p>
                    <p tabindex="0" class="text-justify">Para determinadas atividades no Portal, Site de Jogos e/ou fóruns (especialmente, participação em
                        fóruns
                        de Jogos), é essencial o seu prévio cadastramento. O Portal, Site de Jogos e/ou fóruns estão
                        programado
                        para exigir o cadastramento antes da admissão em tais atividades.</p>
                    <p tabindex="0" class="text-justify">Estes Termos de Uso são aplicáveis em conjunto com o Contrato de Licença de cada Jogo e a Política de
                        Privacidade. Em caso de qualquer dúvida, prevalece o documento mais específico sobre o assunto.</p>
                    <p tabindex="0" class="text-justify">Se você tem quaisquer dúvidas sobre estes Termos de Uso ou sobre os demais documentos acima citados,
                        você deve nos contatar via Chamado de Suporte (http://www.gamestuff.com/suporte). Não utilize o Portal,
                        os Jogos e/ou os Sites dos Jogos até que você tenha aceito completamente as condições dispostas aqui
                        e nos demais documentos citados, tais como Contratos de Licença de Uso dos Jogos.</p>
                    <h4 tabindex="0" class="text-center">Alterações</h4>
                    <p tabindex="0" class="mb-5">A Gamestuff poderá alterar estes Termos de Uso a qualquer momento, sem aviso prévio, postando um aviso
                        na homepage do Portal e nos Sites dos Jogos para que os usuários possam acessar os novos Termos e
                        Condições. Se você não concordar com o conteúdo da alteração, não continue a usar o Portal, os Jogos
                        e/ou os Sites dos Jogos. Nós trataremos o uso contínuo do Portal, dos Jogos e/ou dos Sites dos Jogos
                        como aceitação das alterações feitas aos Termos de Uso.</p>
                </div>
            </article>
        </div>
        <!--Footer-->
        <?php
        // incluindo footer da página
        include('includes/footer.php');
        ?>
    </div>
</body>

</html>