<?php

    class Produto{

        public $imagem;
        public $nome;
        public $descricao;
        public $preco;
        public $cor;
        public $tamanho;
        public $estoque;
        public $tipo;
        public $id;
        public $quantidade;

        public function __construct($parametros){
            $this->imagem = $parametros["imagem"];
            $this->nome = $parametros["nome_produto"];
            $this->descricao = $parametros["descricao"];
            $this->preco = $parametros["valor_unitario"];
            $this->cor = $parametros["cor"];
            $this->tamanho = $parametros["tamanho"];
            $this->tipo = $parametros["tipo"];
            $this->estoque = $parametros["estoque"];
            $this->id = $parametros["id_produto"];

            if(isset($parametros["quantidade"])){
                $this->quantidade = $parametros["quantidade"];
            }


        }

        public function exibe(){
            echo '<div class="col-md-3">
                    <div class="card">
                        <img src="'.$this->imagem.'" class="card-img-responsiva" alt="Imagem de Perfil 1">
                        <div class="card-body">
                            <div ><h6>'.$this->nome.'</h6></div> </br>
                            <div><h6>Preço: R$ '.$this->preco.'</h6></div> </br>';
                            
                            if($this->quantidade == ""){
                                echo'
                                <!--Botão ver mais -->
                                <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#comprar'.$this->id.'">Ver mais</button>';
                            }else{
                                echo 'Quantidade:'.$this->quantidade.'';
                            }

                            echo'
                            <div class="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="comprar'.$this->id.'">
                            <div class="modal-dialog modal-lg">
                            <button type="button" class="close"  id="close'.$this->id.'"data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                                <div class="modal-content">
                                
                                    <table>
                                    <tr>
                                        <td><img class="imgCompra" src="'.$this->imagem.'"/></td>
                                        
                                        <td >  
                                            <div class="compCompra">
                                                <div ><h6>'.$this->nome.'</h6></div> </br>
                                                <div><h6>Preço: R$ '.$this->preco.'</h6></div> </br>
                                                <div><h6>Cor: <input type="color" name="cor" id="cor" value="'.$this->cor.'" disabled style="width:50px" /></h6></div> </br>
                                                <div><h6>Tamanho: <b>'.$this->tamanho.'</h6></b>
                                                
                                                </div> </br>
                                                <div><h6>Quantidade: 
                                                <form><input type="hidden" name="produto" /></form>
                                                <input type="number" name="quantidade" min="0" max="'.$this->estoque.'" id="qtd'.$this->id.'" style="width:50px" /></h6></div> </br>

                                                
                                                
                                                <div><button type="button" class="btn btn-success comprar" value="'.$this->id.'">Comprar</button></div> 
                                                </br></br></br></br></br>
                                            </div>
                                        </td> 
                                    </tr>                                                        
                                    </table>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>';
            }

    }

?>