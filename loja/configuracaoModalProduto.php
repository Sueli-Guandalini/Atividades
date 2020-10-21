<?php

$p["id"] = "Produto";
$p["titulo"] = "Produto";

$p["divRow"][0] = '
<div class="row">
    Carregar Foto:
    <div class="form-group col-sm-12 col-12">	                            
        <input type="file" name="imagem" 
        id="imagem" class="form-control"  />
    </div>
</div>';



$p["divRow"][1] = '
<div class="row">
    <div class="form-group col-sm-12 col-12">	                            
        <input type="text" name="nome_produto" 
        id="nome_produto" class="form-control" placeholder= "Nome Produto..." />
    </div>
</div>';


$p["divRow"][2] = '
<div class="row">
    <div class="form-group col-sm-12 col-12">	                            
        <input type="text" name="descricao" 
        id="descricao" class="form-control" placeholder= "Descrição..."/>
    </div>
</div>';

$p["divRow"][3] = '
<div class="row">
    <div class="form-group col-sm-12 col-12">	                            
        <select name="tamanho" class="form-control">
            <option>::Selecione Tamanho::</option>
            <option value="P">P</option>
            <option value="M">M</option>
            <option value="G">G</option>
            <option value="GG">GG</option>
            <option value="XG">XG</option>    
        </select>
    </div>
</div>';

$p["divRow"][4] = '
<div class="row">
    <div class="form-group col-sm-6 col-6">	                            
        <input type="color" name="cor" 
        id="cor" class="form-control" placeholder= "Cor..."/>
    </div>
    <div class="form-group col-sm-6 col-6">	                            
        <select name="cod_categoria" class="form-control">
            <option>::Selecione Tipo::</option>';
        require_once "conexao.php";

        $select = "SELECT id_categoria, tipo FROM categoria ORDER BY tipo";
        $resultado = $conexao->query($select);
        foreach($resultado as $linha){
            $p["divRow"][4] .= '<option value="'.$linha["id_categoria"].'">'.$linha["tipo"].'</option>'; 
        }
            
$p["divRow"][4] .= '
        </select>
    </div>
</div>';

$p["divRow"][5] = '
<div class="row">
    <div class="form-group col-sm-6 col-6">	                            
        <input type="number" name="valor_unitario" 
        id="valor_unitario" class="form-control" min="1" step="0.01" placeholder= "Valor Unitario..."/>
    </div>
    <div class="form-group col-sm-6 col-6">	                            
        <input type="number" name="estoque" 
        id="estoque" class="form-control" min="0" step="1" placeholder= "Estoque..."/>
    </div>
</div>';


?>