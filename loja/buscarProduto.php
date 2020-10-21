<?php

//include("validacaoUsuario.php");

if($_SESSION["usuario"]["permissao"]!="2"){

include "conexao.php";

//header("Content-Type: Application/json");

$keyword = strval($_POST['query']);

$search_param = "%$keyword%";

$id_produto = $_POST["id_produto"];
$nome_produto = $_POST["nome_produto"];
$descricao = $_POST["descricao"];
$tamanho = $_POST["tamanho"];
$cor = $_POST["cor"];
$cod_categoria = $_POST["cod_categoria"];
$valor_unitario = $_POST["valor_unitario"];
$estoque = $_POST["estoque"];

$SELECT = "SELECT  
                nome_produto='$nome_produto', 
                descricao='$descricao',  
                tamanho='$tamanho', 
                cor='$cor', 
                cod_categoria='$cod_categoria', 
                valor_unitario='$valor_unitario', 
                estoque='$estoque'
            FROM view_produto
            WHERE id_produto='$id'
            AND nome_produto LIKE \"$search_param\"";

$conexao->query($select);

    if(isset($_POST['id_produto'])){
        $select = "SELECT * FROM view_produto  WHERE id_produto=$id
                    AND nome_produto LIKE \"$search_param\"";
        $resultado = $conexao->query($select);
        if($resultado){
            $tabela = array();
            $tabela = $resultado->fetch_all();
            if(sizeof($tabela) > 0){
                foreach($tabela as $linha){
                    $nome_produto[] = $linha["nome_produto"];                    
                }
                echo json_encode($nome_produto);
            }
        }
     }

	$conexao->close();

?>

