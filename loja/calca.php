<?php

    include "classeLayout/classeLayout.php";
    $c = new Cabecalho();
    $c->exibe();

    include "classeLayout/classeProduto.php";
    include "classeLayout/classeLinhaProduto.php";
?>


                    <h3>CALÇA</h3>
                    <p>
                        <!--foto da nossa vendas -->
                        <div id="team-area">
                            <div class="container">
                                <?php 
                                
                                include "conexao.php";

                                $select = "SELECT * FROM view_produto WHERE tipo LIKE '%Calça%'";

                                $resultado = $conexao->query($select);                                                               

                                $l = new LinhaProduto();
                                
                                foreach($resultado as $linha){
                                    
                                    //provisório (não é pra sempre.)
                                   // $linha["imagem"]='img/calca.jpg';
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

                    