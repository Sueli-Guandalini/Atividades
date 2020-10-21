<?php
    $p = null;
    $p["cabecalho"] = array("Imagem","Nome","Descrição","Tamanho","Cor","Tipo","Valor Unitario","Estoque");

    include "conexao.php";

    $sql = "SELECT id_produto, CONCAT(\"<img src='\",imagem,\"' class='foto' />\") AS img, nome_produto, descricao, tamanho, cor, tipo, valor_unitario, estoque 
        FROM view_produto ";

    $resultado = $conexao->query($sql);

    foreach($resultado as $linha){
        $p["dados"][]=$linha;
    }
    $p["nome"] = "produto";
?>