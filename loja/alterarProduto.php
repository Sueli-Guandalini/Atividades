<?php

include("validacaoUsuario.php");

if($_SESSION["usuario"]["permissao"]!="2" && $_SESSION["usuario"]["permissao"]!="2"){


header("Content-Type: Application/json");

include "conexao.php";
$id_produto = $_POST["id_produto"];
$nome_produto = $_POST["nome_produto"];
$descricao = $_POST["descricao"];
$tamanho = $_POST["tamanho"];
$cor = $_POST["cor"];
$cod_categoria = $_POST["cod_categoria"];
$valor_unitario = $_POST["valor_unitario"];
$estoque = $_POST["estoque"];

$update = "UPDATE produto SET 
                        nome_produto='$nome_produto', 
                        descricao='$descricao', 
                        tamanho='$tamanho', 
                        cor='$cor', 
                        cod_categoria='$cod_categoria', 
                        valor_unitario='$valor_unitario', 
                        estoque='$estoque'
                WHERE id_produto='$id_produto'";

$conexao->query($update);

$select = "SELECT * FROM view_produto ORDER BY nome";

$resultado = $conexao->query($select);


foreach($resultado as $linha){
    $tabela[] = $linha;
}

echo json_encode($tabela);
}
else{
    header("location: login.php");
}
?>