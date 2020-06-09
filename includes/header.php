<html>

<?php 
    //header("Content-type: text/html; charset=UTF-8");

    if (session_status() != 2) {
        session_start();
    } 
?>       
    <nav alt='' class='navbar navbar-expand-md navbar-dark cornavfooter fixed-top'>            
        <a class='navbar-brand' href='index.php'>TMC - Music Trade Center</a> <!-- home -->
        <!-- LINK DE PULAR DIRETO PARA A PÁGINA -->
        <div id='topo' class='skippy' alt=''>
            <a class='sr-only sr-only-focusable' href='#content' alt=''>
                <div class='container text-center'>
                    <span class='skiplink-text'><?=Translate('PULAR PARA CONTEÚDO PRINCIPAL')?></span>
                </div>
            </a>
        </div>

        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarsExampleDefault' aria-controls='navbarsExampleDefault' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
        </button>

        <div class='collapse navbar-collapse' id='navbarsExampleDefault'>
            <ul class='navbar-nav mr-auto'>
                <li class='nav-item'>
                    <a class='nav-link' href='feedmusical.php'><?= Translate('FEED MUSICAL') ?></a>
                </li>
            
                <li class='nav-item'>
                    <a class='nav-link' href='musictradecenter.php'><?= Translate('MUSIC TRADE CENTER') ?></a>
                </li>

                <li class='nav-item'>
                    <a class='nav-link' href='anunciar.php'><?= Translate('ANUNCIAR') ?></a>
                </li>
            </ul>
		</div> 
    </nav>

<?php
        /*-- CONDICIONAL PARA MONTAGEM DO BREADCRUMB --*/
        
        function breadcrumb($url_pieces = array(), $divisor = '>') {        
         //verifica se foram passados parametros
         if ($url_pieces) {
            $url_crumb = $url_pieces;
            $http = null;
         } else {
            //senão não houver parametro
            //então criar a url automaticamente
            $http = 'http://'; 
            $request = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
            $explode = explode('/', $request);
            foreach($explode as $explode) {
                $url_crumb[str_replace('.php', '', $explode)] = str_replace('.php', '', $explode);
            }
         }
         //quantidade de fragmentos da url
            $count = sizeof($url_crumb);
         //inicia contador
            $i = 1;
            foreach($url_crumb as $link=>$value) {
                //verifica se é o primeiro fragmento da url
                if($i == 1) {
                    $href = $http.$link;
                } else {
                    $href = '/'.$link;
                }
                //verifica se é o ultimo fragmento da url
                if($i == $count) {
                    //mostrar fragmento sem link
                    $crumb[] = '<span>'.($value).'</span>';
                } else {
                    //mostrar fragmento com link para a pagina
                    $crumb[] = '<a href="'.$href.'" title="'.$value.'">'.$value.'</a>&nbsp'.$divisor.'&nbsp';
                }
                $i++;
            }
         //mostrar breadcrumb na tela
            echo "<div class='breadcrumb'>";
            foreach($crumb as $crumb) {
                echo $crumb;
            }
            echo "</div>";
        }
?>

</html>