<?php

    include "classeLayout/classeLayout.php";

    $c = new Cabecalho();
    $c->exibe();

    include "classeLayout/classeProduto.php";
    include "classeLayout/classeLinhaProduto.php";
?>


                    <h3>CARRINHO</h3>
                    <p>
                        
                        <div id="team-area">
                            <div class="container">
                                <?php 
                                
                                include "conexao.php";

                                $select = "SELECT * FROM view_carrinho_produto 
                                WHERE id_usuario=".$_SESSION["usuario"]["id_usuario"]." AND id_carrinho 
                                    in (SELECT max(id_carrinho) as cod_carrinho FROM carrinho
                                    WHERE cod_usuario=".$_SESSION["usuario"]["id_usuario"].")";

                                   
                                $resultado = $conexao->query($select);                                                               

                                
                                $l = new LinhaProduto();
                                
                                foreach($resultado as $linha){
                                    $cod_carrinho = $linha["id_carrinho"];
                                    //provisório (não é pra sempre.)
                                    //$linha["imagem"]='img/blusa.jpg';
                                   // print_r($linha);
                                    $p = new Produto($linha);
                                    $l->add_produto($p);
                                }
                                
                                
                                $l->exibe();

                                ?>
                            </div>
                        </div>
                    </p>

                    <form action="finalizar_venda.php" method="POST">
                        <input type="hidden" name="carrinho" value="<?php echo $cod_carrinho;?>" />
                        <button id="finalizar">Finalizar Compra</button>
                    </form>
<?php
    $r = new Rodape();
    $r->exibe();  
?>       