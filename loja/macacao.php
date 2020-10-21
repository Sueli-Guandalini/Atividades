<?php

    include "classeLayout/classeLayout.php";

    $c = new Cabecalho();
    $c->exibe();

    include "classeLayout/classeProduto.php";
    include "classeLayout/classeLinhaProduto.php";
?>


                    <h3>MACACÃO</h3>
                    <p>
                        <!--foto da nossa vendas -->
                        <div id="team-area">
                            <div class="container">
                                <?php 
                                
                                include "conexao.php";

                                $select = "SELECT * FROM view_produto WHERE tipo LIKE 'Macacao'";

                                $resultado = $conexao->query($select);                                                               

                                $l = new LinhaProduto();
                                
                                foreach($resultado as $linha){
                                    //provisório (não é pra sempre.)
                                   // $linha["imagem"]='img/macacao.jpg';
                                    $p = new Produto($linha);
                                    $l->add_produto($p);
                                }
                                
                                
                                $l->exibe();

                                ?>
                            </div>
                        </div>
                    </p>
<?php
    $r = new Rodape();
    $r->exibe();  
?>       

                    