<?php
    include "validacaoUsuario.php";

    if($_SESSION["usuario"]["permissao"]!="2"){

    include "conexao.php";

    header("Content-Type: Application/json");

    $tipo = $_POST["tipo"];

    $insert = "INSERT INTO categoria(tipo) 
                    VALUES ('$tipo')";


    $conexao->query($insert);

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