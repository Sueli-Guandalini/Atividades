<?php

    include "classeLayout/classeLayout.php";

    $c = new Cabecalho();
    $c->exibe();

    include "classeLayout/classeProduto.php";
    include "classeLayout/classeLinhaProduto.php";
?>


                    <h3>Venda Finalizada</h3>
                    <p>
                        
                        <div id="team-area">
                            <div class="container">
                                <?php 
                                $carrinho = $_POST["carrinho"];
                                include "conexao.php";

                                $select = "SELECT SUM(produto.valor_unitario * carrinho_produto.qtde) AS total
                                 FROM produto INNER JOIN carrinho_produto ON produto.id_produto = carrinho_produto.cod_produto
                                 INNER JOIN carrinho ON carrinho_produto.cod_carrinho = carrinho.id_carrinho 
                                 AND carrinho.cod_usuario = ".$_SESSION["usuario"]["id_usuario"];

                                $resultado = $conexao->query($select);  

                                
                                foreach($resultado as $linha){
                                    $total = $linha["total"];
                                }

                                $insert = "INSERT INTO venda(cod_carrinho, horario, data, status, valor) 
                                VALUES('$carrinho', '".@date("His")."', '".@date("Ymd")."','Finalizada','$total')";

                                $conexao->query($insert);  

                                $insert = "INSERT INTO carrinho(cod_usuario) VALUES ('".$_SESSION['usuario']['id_usuario']."')";

                                $conexao->query($insert);


                                ?>
                            </div>
                        </div>
                    </p>

                <h1>Venda concluida com sucesso</h1>
<?php
    $r = new Rodape();
    $r->exibe();  
?>       