<?php

//include "validacaoUsuario.php";


include "conexao.php";

//header("Content-Type: Application/json");

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

$insert = "INSERT INTO usuario(nome_usuario, senha, permissao, email, nome, sobrenome, data_nascimento, rua, 
            numero, compl, bairro, cidade, estado, telefone, cep, cpf, rg ) 
                VALUES ('$nome_usuario','$senha','$permissao','$email','$nome','$sobrenome','$data_nascimento',
                '$rua','$numero','$compl','$bairro','$cidade','$estado','$telefone','$cep','$cpf','$rg')";

$conexao->query($insert);

$select = "SELECT id_usuario, nome_usuario, permissao, email, nome, sobrenome, data_nascimento, rua, 
numero, compl, bairro, cidade, estado, telefone, cep, cpf, rg FROM usuario where email=:email AND senha=:senha";

$stmt = $conexao->prepare($select);

$stmt->bindValue(":email",$email);
$stmt->bindValue(":senha",$senha);

$stmt->execute();

session_start();
$linha = $stmt->fetch();
$_SESSION["usuario"] = $linha;

$insert = "INSERT INTO carrinho(cod_usuario) VALUES ('".$_SESSION['usuario']['id_usuario']."')";

$conexao->query($insert);

echo "1";


?>