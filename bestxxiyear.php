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
                    breadcrumb(array('index.php' => 'Home', 'PORTAL/portal-games/bestxxihome.php' => Translate('Melhores jogos do SÉCULO XXI'), 'PORTAL/portal-games/bestxximarc.php' =>'Jogos Marcantes', '' => Translate('Prêmios - Jogos do Ano')));

                    include('includes/lang.php');  
            ?>
            </div>
        </header>

        <article class="container" id="content">
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div>
                        <h1 tabindex="0" class="mb-1 text-center"><?= Translate('Vencedores do prêmio de JOGO DO ANO') ?></h1>
                        <h4 tabindex="0" class="mb-4 text-center"><?= Translate('Fonte') ?>: GOTYPicks website</h4><br>
                        <h3 tabindex="0" class="mb-4"><?= Translate('O que é o Prêmio de Jogo do Ano?') ?></h3>
                        <p tabindex="0" class="text-justify">
                            O Jogo do Ano (do inglês: "Game of the Year" ou "GOTY") é um título dado por várias
                            premiações, revistas, websites e organizações especializadas para um jogo eletrônico. Muitas
                            das publicações e associações dão a designação de "Jogo do Ano" ao título que consideram
                            representar o ápice do desenvolvimento de jogos naquele ano. Essas organizações nomeam o seu
                            Melhor Jogo do Ano de maneiras distintas; muitas delas indicam o seu Jogo do Ano por meio de
                            uma categoria destinada ao melhor jogo, e outras designam por meio de listas de "Melhores
                            Jogos do Ano", com o jogo do ano sendo identificado como o título que se encontra em
                            primeiro lugar em tais listas.
                        </p>
                        <a class='sr-only sr-only-focusable' href='#topo'>
                            <div class='container text-center'>
                                <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                            </div>
                        </a>
                        <p tabindex="0" class="text-justify">
                            Relembre abaixo a lista dos Jogos Ganhadores do prêmio nos últimos anos:
                        </p>
                    </div>
                </div>
            </div>

            <section class="container pt-3 pb-3 pl-0 pr-0" style="background:">
                <div class="row" style="background: rgba(0,0,0,0.7);">
                    <div class="col">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>Ano</th>
                                    <th>Maior vencedor</th>
                                    <th>Nº de<br />Prêmios</th>
                                    <th>Desenvolvedora(s)</th>
                                    <th>Plataforma(s)</th>
                                </tr>
                                <tr>
                                    <td>2003</td>
                                    <td><i><a target="blank" href="https://pt.wikipedia.org/wiki/Star_Wars:_Knights_of_the_Old_Republic"
                                                title="Star Wars: Knights of the Old Republic">Star Wars: Knights of the
                                                Old Republic</a></i></td>
                                    <td class='text-center'>13</td>
                                    <td><a target="blank" href="https://pt.wikipedia.org/wiki/BioWare" title="BioWare">BioWare</a></td>
                                    <td><a target="blank" href="https://pt.wikipedia.org/wiki/Microsoft_Windows" title="Microsoft Windows">Microsoft
                                            Windows</a>, <a target="blank" href="https://pt.wikipedia.org/wiki/Xbox_(console)" title="Xbox (console)">Xbox</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2004</td>
                                    <td><i><a target="blank" href="https://pt.wikipedia.org/wiki/Half-Life_2" title="Half-Life 2">Half-Life 2</a></i></td>
                                    <td class='text-center'>21</td>
                                    <td><a target="blank" href="https://pt.wikipedia.org/wiki/Valve_Corporation" title="Valve Corporation">Valve
                                            Corporation</a></td>
                                    <td><a target="blank" href="https://pt.wikipedia.org/wiki/Microsoft_Windows" title="Microsoft Windows">Microsoft
                                            Windows</a></td>
                                </tr>
                                <tr>
                                    <td>2005</td>
                                    <td><i><a target="blank" href="https://pt.wikipedia.org/wiki/Resident_Evil_4" title="Resident Evil 4">Resident Evil
                                                4</a></i></td>
                                    <td class='text-center'>35</td>
                                    <td><a target="blank" href="https://pt.wikipedia.org/wiki/Capcom" title="Capcom">Capcom</a></td>
                                    <td><a target="blank" href="https://pt.wikipedia.org/wiki/GameCube" class="mw-redirect" title="GameCube">GameCube</a>, <a
                                            target="blank" href="https://pt.wikipedia.org/wiki/PlayStation_2" title="PlayStation 2">PlayStation 2</a></td>
                                </tr>
                                <tr>
                                    <td>2006</td>
                                    <td><i><a target="blank" href="https://pt.wikipedia.org/wiki/The_Elder_Scrolls_IV:_Oblivion"
                                                title="The Elder Scrolls IV: Oblivion">The Elder Scrolls IV:
                                                Oblivion</a></i></td>
                                    <td class='text-center'>40</td>
                                    <td><a target="blank" href="https://pt.wikipedia.org/wiki/Bethesda_Game_Studios" title="Bethesda Game Studios">Bethesda
                                            Game Studios</a></td>
                                    <td><a target="blank" href="https://pt.wikipedia.org/wiki/Microsoft_Windows" title="Microsoft Windows">Microsoft
                                            Windows</a>, <a target="blank" href="https://pt.wikipedia.org/wiki/Xbox_360" title="Xbox 360">Xbox 360</a></td>
                                </tr>
                                <tr>
                                    <td>2007</td>
                                    <td><i><a target="blank" href="https://pt.wikipedia.org/wiki/BioShock" title="BioShock">BioShock</a></i></td>
                                    <td class='text-center'>47</td>
                                    <td><a href="/w/index.php?title=Irrational_Games&amp;action=edit&amp;redlink=1"
                                            class="new" title="Irrational Games (página não existe)">Irrational
                                            Games</a></td>
                                    <td><a target="blank" href="https://pt.wikipedia.org/wiki/Microsoft_Windows" title="Microsoft Windows">Microsoft
                                            Windows</a>, <a target="blank" href="https://pt.wikipedia.org/wiki/Xbox_360" title="Xbox 360">Xbox 360</a></td>
                                </tr>
                                <tr>
                                    <td>2008</td>
                                    <td><i><a target="blank" href="https://pt.wikipedia.org/wiki/Fallout_3" title="Fallout 3">Fallout 3</a></i></td>
                                    <td class='text-center'>69</td>
                                    <td><a target="blank" href="https://pt.wikipedia.org/wiki/Bethesda_Game_Studios" title="Bethesda Game Studios">Bethesda
                                            Game Studios</a></td>
                                    <td><a target="blank" href="https://pt.wikipedia.org/wiki/Microsoft_Windows" title="Microsoft Windows">Microsoft
                                            Windows</a>, <a target="blank" href="https://pt.wikipedia.org/wiki/PlayStation_3" title="PlayStation 3">PlayStation
                                            3</a>, <a target="blank" href="https://pt.wikipedia.org/wiki/Xbox_360" title="Xbox 360">Xbox 360</a></td>
                                </tr>
                                <tr>
                                    <td>2009</td>
                                    <td><i><a target="blank" href="https://pt.wikipedia.org/wiki/Uncharted_2:_Among_Thieves"
                                                title="Uncharted 2: Among Thieves">Uncharted 2: Among Thieves</a></i>
                                    </td>
                                    <td class='text-center'>111</td>
                                    <td><a target="blank" href="https://pt.wikipedia.org/wiki/Naughty_Dog" title="Naughty Dog">Naughty Dog</a></td>
                                    <td><a target="blank" href="https://pt.wikipedia.org/wiki/PlayStation_3" title="PlayStation 3">PlayStation 3</a></td>
                                </tr>
                                <tr>
                                    <td>2010</td>
                                    <td><i><a target="blank" href="https://pt.wikipedia.org/wiki/Red_Dead_Redemption" title="Red Dead Redemption">Red Dead
                                                Redemption</a></i></td>
                                    <td class='text-center'>111</td>
                                    <td><a target="blank" href="https://pt.wikipedia.org/wiki/Rockstar_San_Diego" title="Rockstar San Diego">Rockstar San
                                            Diego</a></td>
                                    <td><a target="blank" href="https://pt.wikipedia.org/wiki/PlayStation_3" title="PlayStation 3">PlayStation 3</a>, <a
                                            target="blank" href="https://pt.wikipedia.org/wiki/Xbox_360" title="Xbox 360">Xbox 360</a></td>
                                </tr>
                                <tr>
                                    <td>2011</td>
                                    <td><i><a target="blank" href="https://pt.wikipedia.org/wiki/The_Elder_Scrolls_V:_Skyrim"
                                                title="The Elder Scrolls V: Skyrim">The Elder Scrolls V: Skyrim</a></i>
                                    </td>
                                    <td class='text-center'>227</td>
                                    <td><a target="blank" href="https://pt.wikipedia.org/wiki/Bethesda_Game_Studios" title="Bethesda Game Studios">Bethesda
                                            Game Studios</a></td>
                                    <td><a target="blank" href="https://pt.wikipedia.org/wiki/Microsoft_Windows" title="Microsoft Windows">Microsoft
                                            Windows</a>, <a target="blank" href="https://pt.wikipedia.org/wiki/PlayStation_3" title="PlayStation 3">PlayStation
                                            3</a>, <a target="blank" href="https://pt.wikipedia.org/wiki/Xbox_360" title="Xbox 360">Xbox 360</a></td>
                                </tr>
                                <tr>
                                    <td>2012</td>
                                    <td><i><a target="blank" href="https://pt.wikipedia.org/wiki/The_Walking_Dead_(jogo_eletr%C3%B4nico)"
                                                title="The Walking Dead (jogo eletrônico)">The Walking Dead</a></i></td>
                                    <td class='text-center'>75</td>
                                    <td><a target="blank" href="https://pt.wikipedia.org/wiki/Telltale_Games" title="Telltale Games">Telltale Games</a></td>
                                    <td><a target="blank" href="https://pt.wikipedia.org/wiki/Microsoft_Windows" title="Microsoft Windows">Microsoft
                                            Windows</a>, <a target="blank" href="https://pt.wikipedia.org/wiki/PlayStation_3" title="PlayStation 3">PlayStation
                                            3</a>, <a target="blank" href="https://pt.wikipedia.org/wiki/Xbox_360" title="Xbox 360">Xbox 360</a></td>
                                </tr>
                                <tr>
                                    <td>2013</td>
                                    <td><i><a target="blank" href="https://pt.wikipedia.org/wiki/The_Last_of_Us" title="The Last of Us">The Last of Us</a></i>
                                    </td>
                                    <td class='text-center'>249</td>
                                    <td><a target="blank" href="https://pt.wikipedia.org/wiki/Naughty_Dog" title="Naughty Dog">Naughty Dog</a></td>
                                    <td><a target="blank" href="https://pt.wikipedia.org/wiki/PlayStation_3" title="PlayStation 3">PlayStation 3</a></td>
                                </tr>
                                <tr>
                                    <td>2014</td>
                                    <td><i><a target="blank" href="https://pt.wikipedia.org/wiki/Dragon_Age:_Inquisition"
                                                title="Dragon Age: Inquisition">Dragon Age: Inquisition</a></i></td>
                                    <td class='text-center'>134</td>
                                    <td><a target="blank" href="https://pt.wikipedia.org/wiki/BioWare" title="BioWare">BioWare</a></td>
                                    <td><a target="blank" href="https://pt.wikipedia.org/wiki/Microsoft_Windows" title="Microsoft Windows">Microsoft
                                            Windows</a>, <a target="blank" href="https://pt.wikipedia.org/wiki/PlayStation_3" title="PlayStation 3">PlayStation
                                            3</a>, <a target="blank" href="https://pt.wikipedia.org/wiki/PlayStation_4" title="PlayStation 4">PlayStation
                                            4</a>, <a target="blank" href="https://pt.wikipedia.org/wiki/Xbox_360" title="Xbox 360">Xbox 360</a>, <a
                                            target="blank" href="https://pt.wikipedia.org/wiki/Xbox_One" title="Xbox One">Xbox One</a></td>
                                </tr>
                                <tr>
                                    <td>2015</td>
                                    <td><i><a target="blank" href="https://pt.wikipedia.org/wiki/The_Witcher_3:_Wild_Hunt" title="The Witcher 3: Wild Hunt">The
                                                Witcher 3: Wild Hunt</a></i></td>
                                    <td class='text-center'>257</td>
                                    <td><a target="blank" href="https://pt.wikipedia.org/wiki/CD_Projekt" title="CD Projekt">CD Projekt RED</a></td>
                                    <td><a target="blank" href="https://pt.wikipedia.org/wiki/Microsoft_Windows" title="Microsoft Windows">Microsoft
                                            Windows</a>, <a target="blank" href="https://pt.wikipedia.org/wiki/PlayStation_4" title="PlayStation 4">PlayStation
                                            4</a>, <a target="blank" href="https://pt.wikipedia.org/wiki/Xbox_One" title="Xbox One">Xbox One</a></td>
                                </tr>
                                <tr>
                                    <td>2016</td>
                                    <td><i><a target="blank" href="https://pt.wikipedia.org/wiki/Uncharted_4:_A_Thief%27s_End"
                                                title="Uncharted 4: A Thief&#39;s End">Uncharted 4: A Thief's
                                                End</a></i></td>
                                    <td class='text-center'>165</td>
                                    <td><a target="blank" href="https://pt.wikipedia.org/wiki/Naughty_Dog" title="Naughty Dog">Naughty Dog</a></td>
                                    <td><a target="blank" href="https://pt.wikipedia.org/wiki/PlayStation_4" title="PlayStation 4">PlayStation 4</a></td>
                                </tr>
                                <tr>
                                    <td>2017</td>
                                    <td><i><a target="blank" href="https://pt.wikipedia.org/wiki/The_Legend_of_Zelda:_Breath_of_the_Wild"
                                                title="The Legend of Zelda: Breath of the Wild">The Legend of Zelda:
                                                Breath of the Wild</a></i></td>
                                    <td class='text-center'>189</td>
                                    <td><a target="blank" href="https://pt.wikipedia.org/wiki/Nintendo_Entertainment_Planning_%26_Development"
                                            title="Nintendo Entertainment Planning &amp; Development">Nintendo EPD</a>
                                    </td>
                                    <td><a target="blank" href="https://pt.wikipedia.org/wiki/Nintendo_Switch" title="Nintendo Switch">Nintendo Switch</a>, <a
                                            target="blank" href="https://pt.wikipedia.org/wiki/Wii_U" title="Wii U">Wii U</a></td>
                                </tr>
                                <tr>
                                    <td>2018</td>
                                    <td><i><a target="blank" href="https://pt.wikipedia.org/wiki/God_of_War_(jogo_eletr%C3%B4nico_de_2018)"
                                                title="God of War (jogo eletrônico de 2018)">God of War</a></i></td>
                                    <td class='text-center'>198</td>
                                    <td><a target="blank" href="https://pt.wikipedia.org/wiki/SIE_Santa_Monica_Studio" title="SIE Santa Monica Studio">SIE
                                            Santa Monica Studio</a></td>
                                    <td><a target="blank" href="https://pt.wikipedia.org/wiki/PlayStation_4" title="PlayStation 4">PlayStation 4</a></td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <p tabindex="0" class="text-justify">
                            Desde 2003, o website GOTYPicks faz uma compilação dos jogos que mais receberam prêmios de "Jogo 
                            do Ano" naquele ano. O site pega as informações de todas as publicações de jogos, sites, revistas
                            e premiações notáveis e faz um somatório total para concluir qual foi o jogo que mais recebeu 
                            prêmios de Jogo do Ano naquele determinado ano (em conjunto com o ano seguinte, por exemplo: o 
                            D.I.C.E. Awards 2019 foi uma cerimônia que premiou os melhores jogos de 2018), feito esse, que 
                            o site chama de "Jogo do Ano Definitivo".
                        </p>
                        <a class='sr-only sr-only-focusable' href='#topo'>
                            <div class='container text-center'>
                                <span class='skiplink-text'><?= Translate('Voltar ao início') ?></span>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
        </article>
    </div>
    <!--Footer-->
    <?php
	// incluindo footer da página
	include('includes/footer.php');
    ?>
</body>

</html>