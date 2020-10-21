<?php

    class LinhaProduto{

        public $produto;

        public function add_produto(Produto $p){
            $this->produto[] = $p;
        }

        public function exibe(){
            echo'<div class="row" id="mensagem"></div>';
            
            echo '<div class="row linhaProduto">';

            foreach($this->produto as $i=>$p){

                $p->exibe();
                if($i%4==3){
                    echo "</div>";
                    echo '<div class="row linhaProduto">';
                }
            }

            echo'</div>';
        }


    }


?>