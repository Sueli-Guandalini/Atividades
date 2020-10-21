<?php
    
        include("validacaoUsuario.php");

        if($_SESSION["usuario"]["permissao"]!="2" && $_SESSION["usuario"]["permissao"]!="2"){

        include "conexao.php";

        $tabela = $_POST["tabela"];
        $valor = $_POST["id"];
                   
        $delete = "DELETE FROM $tabela WHERE id_$tabela='$valor'";

        $conexao->query($delete);

        echo "1";

        }
        else{
            header("location: login.php");
        }
?>