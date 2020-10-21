<?php
    $p = null;
    $p["cabecalho"] = array("Nome Sobrenome", "Produto / Tamanho","Horario","Data","Status","Valor");

    include "conexao.php";

    $sql = "SELECT * FROM view_venda";

    $resultado = $conexao->query($sql);

    foreach($resultado as $linha){
        
        $p["dados"][]=$linha;
    }
    $p["nome"] = "venda";
?>