<?php

// CRUD TABELA DE PRODUTOS

require_once 'classes/Class.Crud.php';

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Content-type: application/json; charset=UTF-8');

// Estabelece Conexão com o BANCO DE DADOS
$pdo = Conexao::getConexao();
Crud::setConexao($pdo);

$uri = basename($_SERVER['REQUEST_URI']);
//echo $uri;


// ********************* GET
if ($_SERVER['REQUEST_METHOD'] == 'GET'):
    
    // echo json_encode( ['verbo_http' => $_SERVER['REQUEST_METHOD']] );

    if ( !Empty($uri) && $uri <> 'index.php' ):
        // if ($uri == 'produto'):
        //     $dados = Crud::select('SELECT * FROM estoque',[],TRUE);          
        // else:
        //     if (is_numeric($uri)):
        //         $dados = Crud::select('SELECT * FROM estoque WHERE ID = :ID',
        //         ['ID' => $uri],
        //         TRUE);
        //     else:
        //         echo json_encode(['mensagem' => 'O parâmetro não é numérico']);
        //         http_response_code(406);
        //         exit;
        //     endif; 
        // endif;

        if ($uri == 'anuncios'):
            $dados = Crud::select('SELECT * FROM anuncios',[],TRUE);          
        else:
            if (is_numeric($uri)):
                $dados = Crud::select('SELECT * FROM anuncios WHERE COD_ANUNCIO = :COD_ANUNCIO',
                ['COD_ANUNCIO' => $uri],
                TRUE);
            else:
                echo json_encode(['mensagem' => 'O parâmetro não é numérico']);
                http_response_code(406);
                exit;
            endif; 
        endif;
        
        if (!Empty($dados)):  
            echo json_encode($dados);
            http_response_code(200);
        else:
            echo json_encode(['mensagem' => 'Pesquisa não encontrada!']);
            http_response_code(406);
            exit;
        endif;
    else:
        http_response_code(406);
        echo json_encode(['mensagem' => 'Parâmetro não preenchido na consulta!']);
        exit;
    endif;

    // Se estiver vazio
endif;


// ********************* POST (INCLUSÃO)
if ($_SERVER['REQUEST_METHOD'] == 'POST'):
    //echo json_encode( ['verbo_http' => $_SERVER['REQUEST_METHOD']] );

    $descricao = (isset($_POST['descricao'])) ? $_POST['descricao'] : '';
    $saldoInicial = 0;

    if (empty($descricao)):
        echo json_encode(['mensagem' => 'Informe a Descrição']);
        http_response_code(406);
        exit;
    endif;

    Crud::setTabela('estoque');
    $retorno = Crud::insert(['descricao' => $descricao,'saldo_atual' => $saldoInicial]);

    if ($retorno):
        http_response_code(201);
        echo json_encode(['mensagem' => 'Inserido com Sucesso!']);
    else:
        http_response_code(500);
        echo json_encode(['mensagem' => 'Erro ao inserir!']);
    endif;

endif;

// ********************* PUT
if ($_SERVER['REQUEST_METHOD'] == 'PUT'):
    // echo json_encode( ['verbo_http' => $_SERVER['REQUEST_METHOD']] );

    // PHP NAO POSSUI PUT POR ORIGEM
    parse_str(file_get_contents('php://input'), $_PUT);

    $id = (isset($_PUT['id'])) ? $_PUT['id'] : '';
    $tipo = (isset($_PUT['tipo'])) ? $_PUT['tipo'] : '';
    $quantidade = (isset($_PUT['quantidade']) && $_PUT['quantidade'] > 0) ? $_PUT['quantidade'] : '';

    if (empty($id)):
        echo json_encode(['mensagem' => 'Informe o ID do produto']);
        http_response_code(406);
        exit;
    elseif(empty($tipo)):
        echo json_encode(['mensagem' => 'Informe o tipo de Movimentação']);
        http_response_code(406);
        exit; 
    elseif(!empty($tipo) && $tipo <> 'E' && $tipo <> 'S'):
        echo json_encode(["mensagem" => "Informe o tipo de Movimentação da Forma correta ('E' para ENTRADA, 'S' para SAÍDA"]);
        http_response_code(406);
        exit; 
    elseif(empty($quantidade)):
        echo json_encode(['mensagem' => 'Informe a QUANTIDADE a ser Movimentada']);
        http_response_code(406);
        exit;
    endif;

    // Busco Saldo Atual do Produto
    $dados = Crud::select('SELECT saldo_atual FROM estoque WHERE id = :id', ['id' => $id], FALSE);
    
    // Saldo Atual do Produto
    $saldoAnterior = (int)$dados->saldo_atual;

    // Cálculo o Saldo Depois com base no TIPO DE MOVIMENTAÇÃO
    $saldoDepois = ($tipo == 'E') ? ((int)$saldoAnterior + (int)$quantidade) : ((int)$saldoAnterior - (int)$quantidade);

    if (!empty($dados)):
        // Incluir LOG
        Crud::setTabela('movimentacao_estoque');
        $retornoInc = Crud::insert(['tipo' => $tipo, 'id_produto' => $id, 'saldo_antes' => $saldoAnterior, 'saldo_depois' => $saldoDepois, 'qtde' => $quantidade]);

        // Atualizo Saldo Atual
        Crud::setTabela('estoque');
        $retorno = Crud::update(['saldo_atual' => $saldoDepois], ['ID' => $id]);

        if ($retorno && $retornoInc):
            http_response_code(202);
            echo json_encode(['mensagem' => 'Saldo Movimentado com Sucesso!']);
        else:
            http_response_code(500);
            echo json_encode(['mensagem' => 'Erro ao Atualizar Saldo!']);
        endif;
    else:
        http_response_code(404);
        echo json_encode(['mensagem' => 'O ID informado não foi encontrado']);
        exit;
    endif; 
    
endif;


// ********************* DELETE
if ($_SERVER['REQUEST_METHOD'] == 'DELETE'):
    
    // echo json_encode( ['verbo_http' => $_SERVER['REQUEST_METHOD']] );

    if (!is_numeric($uri)):
        echo json_encode(['mensagem' => 'O parâmetro não é numérico']);
        http_response_code(406);
        exit;
    else:
        $dados = Crud::select('SELECT id FROM estoque WHERE id = :id', ['id' => $uri], FALSE);
        if (!empty($dados)):
            // Exclui da Tabela ESTOQUE
            Crud::setTabela('estoque');
            $retorno = Crud::delete(['id' => $uri]);

            // Exclui da tabela MOVIMENTAÇÃO_ESTOQUE
            Crud::setTabela('movimentacao_estoque');
            $retornoMov = Crud::delete(['id_produto' => $uri]);

            if ($retorno):
                http_response_code(202);
                echo json_encode(['mensagem' => 'Deletado com sucesso!']);
                exit;
            else:
                http_response_code(500);
                echo json_encode(['mensagem' => 'Problema na deleção do cliente!']);
                exit;
            endif;
        else:
            http_response_code(404);
            echo json_encode(['mensagem' => 'O parâmetro informado não foi encontrado']);
            exit;
        endif;
    endif;
endif;