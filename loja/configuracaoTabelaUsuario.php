<?php
    $p = null;
    $p["cabecalho"] = array("Nome Usuario","E-mail","Senha","Permissao","Nome","Sobrenome","Data de Nascimento","Rua/Av.","Numero","Complemento","Bairro",
    "Cidade","Estado","Telefone","CEP","CPF","RG");

    include "conexao.php";

    $sql = "SELECT * FROM usuario ORDER BY nome";

    $resultado = $conexao->query($sql);

    foreach($resultado as $linha){
        $p["dados"][]=$linha;
    }
    $p["nome"] = "usuario";
?>