<!-- TRADUÇÃO da PÁGINA -->
<?php 
    include('includes/process.php');    
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="FATEC São Roque - 2019 - PROJETO INTEGRADOR II: página 01 do tema de 'Jóogos Marcantes do Século XXI', contendo informações sobre os games que mais marcaram desde o ano 2000!">
    <meta name="author" content="VINÍCIUS LESSA | @contato: vinícius.lessa33@outlook.com">
    <!-- FONTES CDN: 
        - https://fonts.google.com/
        - https://fontawesome.com/
    -->
    <link rel="icon" href="images/favicon3.png">
    <title>Melhores Games do Século XXI</title>

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
    <div class="bestxxi">
        <header>
            <div>
                <?php
                 // incluindo topo da página 
                    include('includes/header.php');
                            
                    
                    // breadcrumb                   
                    breadcrumb(array('index.php' => 'Home', 'PORTAL/portal-games/bestxxihome.php' => Translate('Melhores Games do Século XXI'), '' =>'Jogos Marcantes'));
                   
                    include('includes/lang.php');  
            ?>
            </div>
        </header>

        <article class="container" id="content">
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div>
                        <h1 tabindex="0" class="mb-1 text-center"><?= Translate('GAMES MARCANTES DESSE SÉCULO') ?></h1>
                        <h4 tabindex="0" class="mb-4 text-center"><i>"<?= Translate('OS JOGOS QUE MARCARAM ÉPOCA') ?>"</i></h4><br>
                        <h3 tabindex="0" class="mb-4"><?= Translate('O que há para ver?') ?></h3>
                        <p tabindex="0" class="text-justify">
                            Apenas os verdadeiros gamers entendem o quanto um determinado jogo pode ser envolvente e intenso, consumindo horas e horas do seu dia. Melhor seria se eles apenas proporcionassem alegria e diversão, mas todo mundo sabe que não é bem assim... Muitos apresentam mensagens pesadas, mas que revelam detalhes importantes da história. Na lista abaixo, você confere os 10 momentos mais marcantes do mundo dos games. 
                        </p>
                        <p tabindex="0" class="text-justify">
                            Tão controverso quanto sua produtora, a Rockstar, o game provou que nem sempre a fórmula politicamente correta funciona quando o objetivo é conquistar o público. Lançado em 2001 para PlayStation 2, o jogo causou polêmica por “incentivar” a violência e trazer à tona assuntos adultos em um universo até então predominantemente infantil. Ao contrário do que acontecia na maioria dos jogos daquele tempo, o protagonista não é o personagem do bem, mas sim um anti-herói que pode – e deve – agir de acordo com o que propõe o mundo da marginalidade.
                            elit viverra eu. 
                        </p>
                        <p tabindex="0" class="text-justify">
                            Desenvolvido pelo russo Alexei Pajitnov, em 1985, enquanto fazia parte da Academia de Ciência de Moscou, o Tetris foi adaptado para mais de 60 plataformas ao longo de sua história, tornando-se um dos mais populares quebra-cabeças de todos os tempos. A programação do game foi inspirada em um jogo de tabuleiro grego chamado “pentomino” e, embora tenha alcançado lugar de destaque na indústria, durante anos Pajitnov não recebeu os royalties pela sua invenção por conta do sistema soviético, controlador de todos os órgãos científicos na época.
                        </p>
                    </div>
                </div>
                <a class='sr-only sr-only-focusable' href='#topo'>
                    <div class='container text-center'>
                        <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                    </div>
                </a>
            </div>            
            <div class="separator mt-4 mb-4"></div>
            <section class="container pt-3 pl-0 pr-0">                
                <div class="col-12 mb-4">                
                    <div class="row">
                        <div class="col-md-4">
                            <div tabindex="0" class="col blockimg allimg gtasa rounded">
                                <img src="images/reddead1.webp" class="imgarticle" alt="Imagem do jogo GTA SAN ANDREAS, homem segurando arma caracterizado como bandido"/>
                            </div>    
                            <div class="col pt-2 p-0">
                                <h3 tabindex="0" class="text-center">GTA: SAN ANDREAS</h3>
                                <p tabindex="0" class="text-justify">
                                    Groove Street, assim como há 10 anos atrás, ainda é o lar do personagem CJ, Carl Johnson, 
                                    protagonista do game, que retorna a Los Santos (uma versão genérica de Los Angeles) depois de 
                                    saber da morte de sua mãe. Em contato com os velhos amigos, e seu irmão, Sweet, ele volta a se 
                                    envolver com o mundo do crime e das batalhas de gangue.Groove Street, assim como há 10 anos atrás, ainda é o lar do personagem CJ, Carl Johnson,
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div tabindex="0" class="col blockimg allimg thewitcher rounded">
                                <img src="images/reddead1.webp" class="imgarticle" alt="Imagem Ilustrativa do jogo DE UICHER, com um Bruxo empunhando uma espada de aço, fundo vermelho com o título da franquia a sua direita."/>
                            </div>    
                            <div class="col pt-2 p-0">
                                <h3 tabindex="0" class="text-center">THE WITCHER 3</h3>
                                <p tabindex="0" class="text-justify">
                                    The Witcher 3: Wild Hunt, como citamos, vem para finalizar a saga de Geralt. Isso 
                                    não vai impedir de que saiam novos “The Witcher” ao longo dos próximos anos, mas Geralt
                                    de Rivia vai terminar sua história por aqui, de forma bem inspirada e com momentos épicos
                                    – dignos de grandes RPGs e similares.
                                    Mas o fim não vai ser algo necessariamente agradável, como uma bela aposentadoria, e sim 
                                    uma tarefa árdua que vai chegar ao bruxo quando menos ele espera.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col blockimg allimg lastofus rounded">
                                <img src="images/reddead1.webp" class="imgarticle" alt="Imagem do jogo DE LEST OFI US com os protagonistas olhando para a camera, virados de costa"/>
                            </div>    
                            <div class="col pt-2 p-0">
                                <h3 tabindex="0" class="text-center">THE LAST OF US</h3>
                                <p tabindex="0" class="text-justify">
                                    O enredo de The Last of Us é um excelente exemplo de que os jogos podem também contar
                                    uma história digna de uma obra literária. A trama gira em torno de Joel, que depois de perder sua filha tragicamente, precisa encontrar 
                                    motivações para viver em um mundo dominado pelo caos, depois de uma contaminação em massa, que transforma seres humanos em criaturas horripilantes.
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
                <div class="row pr-2 pl-2 pt-4 pb-4 m-0 mb-5" style="background: rgba(0,0,0,0.7);">
                    <div class="col-lg-5 pl-1 pb-0 pt-2">
                        <h3 tabindex="0" class="text-center">THE ELDER SCROLLS V:</h3>
                        <div class="m-0 mb-3 mt-4 p-0">
                            <p tabindex="0" class="mb-1 pb-0 text-justify">
                                Se existe uma frase que possa definir o jogo The Elder Scrolls V: Skyrim
                                , essa frase é: “Diga adeus à sua vida real”, e não há uma definição melhor para
                                ele, uma vez que você mergulha na história e começa a se aventurar em mais um
                                pedaço do reino de Tamriel.
                                Trata-se de uma aventura contínua, um mundo vasto e que transmite uma coisa não
                                muito comum em NPCs (personagens não jogáveis) do cenário: Vida. As pessoas nas
                                cidades trabalhando, e indo para suas casas para uma boa noite de sono, uma 
                                rotina que se repete dia após dia dentro do jogo, e uma grande interação com
                                o jogador.
                            </p>
                        </div>
                    </div>
                    <div tabindex="0" class="col-lg-7 blockimg allimg skyrim rounded p-0" style="background-position: 30%;">
                        <img src="images/skyrim1.webp" class="imgarticle h-100" alt="Imagem do jogo ISCAIRIN guerreiro com espada gritando, fundo cinza e nome do jogo a esqueda"/>
                    </div>
                    <a class='sr-only sr-only-focusable' href='#topo'>
                        <div class='container text-center'>
                            <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                        </div>
                    </a>
                        
                </div>
            </section>
            <aside>
                <div class="row pt-4 pb-4 m-0 mb-5" style="background: rgba(0,0,0,0.7);">
                    <div class="col-12">
                        <h3 tabindex="0" class="text-center"><?= Translate('VEJA TAMBÉM') ?></h3>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="row">
                            <div class="col-md-4">
                                <ul>
                                    <li class="p-0 m-0"><a href="bestxxihome.php" tabindex="0"><?= Translate('TOP FIVE: Os games que marcaram época') ?></a></li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul>
                                    <li class=" p-0 m-0"><a href="bestxximarc.php" tabindex="0"><?= Translate('GAMES MARCANTES DESSE SÉCULO') ?></a></li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul>
                                    <li class=" p-0 m-0"><a href="bestxxiyear.php" tabindex="0"><?= Translate('PRÊMIO DE MELHORES JOGOS DO ANO') ?></a></li>
                                </ul>                    
                            </div>
                        </div>
                        <a class='sr-only sr-only-focusable' href='#topo'>
                            <div class='container text-center'>
                                <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                            </div>
                        </a>
                    </div>
                </div>
            </aside>
            <br>
        </article>       
    </div>
    <!--Footer-->
    <?php
	// incluindo footer da página
	include('includes/footer.php');
    ?>
</body>
</html>