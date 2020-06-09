<!-- TRADUÇÃO da PÁGINA -->
<?php 
    include('includes/process.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="FATEC São Roque - 2019 - PROJETO INTEGRADOR II">
    <meta name="author" content="FERNANDO ZARA | @contato: fzc92@hotmail.com">
    <!-- FONTES CDN: 
        - https://fonts.google.com/
        - https://fontawesome.com/
    -->
    <link rel="icon" href="images/favicon3.png">
    <title>Criar conta</title>

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

<body class="conta color-background-gradient">
    <div>
        <header>
            <div>
                <?php
                 // incluindo topo da página 
                    include('includes/header.php');   
                            
                    // breadcrumb                
                    breadcrumb(array('index.php' => 'Home', '' =>Translate('CRIAR CONTA')));           
                    
                    include('includes/lang.php');  
            ?>
            </div>
        </header>
        <div class="container mt-4 mb-5">
            <article class="border border-white rounded p-4" id="content">
                <h1 class="text-center" tabindex="0"><?= Translate('CRIAR CONTA') ?></h1>
                <form>
                    <div class="container">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" placeholder="Email" tabindex="0">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="password">Senha:</label>
                                <input type="password" class="form-control" id="password" placeholder="Senha" tabindex="0">
                            </div>
                            <div class="form-group col-md-4">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="nome">Nome:</label>
                                <input type="text" class="form-control" id="nome" placeholder="Primeiro Nome" tabindex="0">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="sobrenome">Sobrenome:</label>
                                <input type="text" class="form-control" id="sobrenome" placeholder="Sobrenome" tabindex="0">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputCity">Cidade:</label>
                                <input type="text" class="form-control" id="inputCity" placeholder="Cidade" tabindex="0">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputEstado">Estado:</label>
                                <select id="inputEstado" class="form-control" tabindex="0">
                                    <option selected>Escolher...</option>
                                    <option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espírito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PA">Pará</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="PR">Paraná</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piauí</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="RO">Rondônia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="SE">Sergipe</option>
                                    <option value="TO">Tocantins</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="nascimentoDate">Data de Nascimento:</label>
                                <input type="date" class="form-control" id="nascimentoDate" mask="00/00/00" tabindex="0">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="cep">CEP:</label>
                                <input type="text" class="form-control" id="cep" data-onlynumbers="true" placeholder="Numero do CEP" tabindex="0">
                            </div>
                            <div class="form-group col-md-5">
                                <label for="street">Rua:</label>
                                <input type="text" class="form-control" id="street" placeholder="Nome da Rua" tabindex="0">
                            </div>
                            <div class="form-group col-md-1">
                                <label for="numberHouse">Numero:</label>
                                <input type="number" class="form-control" id="numberHouse" data-onlynumbers="true" placeholder="Numero da casa ou apartamento" tabindex="0">
                            </div>
                        </div>
                        <div class="text-center mt-3">
                            <input type="submit" value="Enviar" class="text-center btn btn-light" tabindex="0">
                        </div>
                    </div>
                </form>
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