<?php

include("validacaoUsuario.php");

if($_SESSION["usuario"]["permissao"]!="2" && $_SESSION["usuario"]["permissao"]!="3"){


header("Content-Type: Application/json");

include "conexao.php";

$nome_usuario = $_POST["nome_usuario"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$permissao = 2;
$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$data_nascimento = $_POST["data_nascimento"];
$rua = $_POST["rua"];
$numero = $_POST["numero"];
$compl = $_POST["compl"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$telefone = $_POST["telefone"];
$cep = $_POST["cep"];
$cpf = $_POST["cpf"];
$rg = $_POST["rg"];
$id = $_POST["id_usuario"];

$update = "UPDATE usuario SET  nome_usuario='$nome_usuario', email='$email', senha='$senha', permissao='$permissao',
    nome='$nome', sobrenome='$sobrenome', data_nascimento='$data_nascimento, rua='$rua', numero='$numero',
    compl='$compl', bairro='$bairro', cidade='$cidade', estado='$estado', telefone='$telefone', cep='$cep',
    cpf='$cpf', rg='$rg' WHERE id_usuario='$id'";

$conexao->query($update);

$select = "SELECT * FROM usuario ORDER BY nome";

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