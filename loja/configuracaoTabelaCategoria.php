<?php
    $p = null;
    $p["cabecalho"] = array("Tipo");

    include "conexao.php";

    $sql = "SELECT * FROM categoria ORDER BY tipo";

    $resultado = $conexao->query($sql);

    foreach($resultado as $linha){
        $p["dados"][]=$linha;
        
    }
    $p["nome"] = "categoria";
    ?>