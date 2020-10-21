<?php

include("validacaoUsuario.php");

if($_SESSION["usuario"]["permissao"]!="2" && $_SESSION["usuario"]["permissao"]!="2"){

header("Content-Type: Application/json");

include "conexao.php";
$tipo = $_POST["tipo"];
$id_categoria = $_POST["id_categoria"]

$update = "UPDATE categoria SET 
                            tipo='$tipo'                 
                         WHERE id_categoria='$id_categoria'";

$conexao->query($update);

$select = "SELECT * FROM categoria ORDER BY tipo";

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