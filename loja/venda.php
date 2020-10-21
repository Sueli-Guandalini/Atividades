<?php
    include "classeLayout/classeLayout.php";

    //include "configuracaoCabecalho.php";                                       
    $cabecalho = new Cabecalho($p);
    $cabecalho->exibe();

    $titulo = "Venda";
    $id = "Venda";
    
    include "configuracaoRowCabecalho.php";
    $rowCabecalho = new RowCabecalho($p);
    $rowCabecalho->exibe();

    include "configuracaoTabela$id.php";
    $tabela = new Tabela($p);
    $tabela->exibe();

    $rodape = new Rodape();
    $rodape->exibe();

?>