<?php

//include "validacaoUsuario.php";
session_start();

if(!isset($_SESSION["usuario"]["id_usuario"])){
    die("0");
}

include "conexao.php";

//header("Content-Type: Application/json");

$id = $_POST["id"];
$qtd = $_POST["qtd"];
$cod_usuario = $_SESSION["usuario"]["id_usuario"];


$select = "SELECT max(id_carrinho) as cod_carrinho FROM carrinho where cod_usuario=$cod_usuario";

$resultado = $conexao->query($select);

foreach($resultado as $linha){
    $cod_carrinho = $linha["cod_carrinho"];
}

$insert = "INSERT INTO carrinho_produto(cod_produto, qtde, cod_carrinho ) 
                VALUES ('$id','$qtd','$cod_carrinho')";

$conexao->query($insert);


echo "1";


?>