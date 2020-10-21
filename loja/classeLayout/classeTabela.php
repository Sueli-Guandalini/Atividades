<?php
    //                0    1      2
    //  $cabecalho [nome,cidade,estado]

    class Tabela{

        private $cabecalho;
        private $dados;
        private $nome;

        public function __construct($parametros){
            $this->cabecalho = $parametros["cabecalho"];
            if(isset($parametros["dados"])){
                $this->dados = $parametros["dados"];
                $this->nome = $parametros["nome"];
            }

        }


        public function exibe(){
            echo '
            <div class="table-responsive">
            <div id="msg" style="color:green;font-weight:bold;"></div>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>';
            
            foreach($this->cabecalho as $i=>$c){
                echo "<th>$c</th>";
            }                    
            
            if((basename($_SERVER['PHP_SELF'],'.php') != "venda")){
            echo'
                <th>Ação</th>';
            }

            echo '</tr>
                </thead>
                <tbody>';
            if($this->dados != ""){    
                foreach($this->dados as $i=>$linha){
                    echo "<tr class='dados'  id='tr".$linha[0]."'>";

                    foreach($linha as $j=>$td){
                        if(!is_numeric($j)){
                            if($j[0].$j[1].@$j[2]!="id_"){                            
                                echo "<td>".$td."</td>";
                            }
                        }
                    }
                    if((basename($_SERVER['PHP_SELF'],'.php') != "venda")){
                    echo '
                        <td>
                            <button class="alterar" type="button" style="border:none;background-color:none;" value="'.$linha[0].'" name="'.$this->nome.'"
                                data-toggle="modal" data-target="#novo'.ucfirst($this->nome).'">
                                <i class="material-icons text-warning">create</i>
                            </button>

                            <button class="remover" type="button" style="border:none;background-color:none;" value="'.$linha[0].'" name="'.$this->nome.'">
                            <i class="material-icons text-danger">delete</i>
                            </button>
                        </td>';
                    }  
                        
                    echo '</tr>';
                }  
            }
            else{
                $qtd=sizeof($this->cabecalho) + 1;
                echo "<tr><td colspan='$qtd'>Não há dados cadastrados</td></tr>";
            }

            echo '
               </tbody>
            </table>
        </div>
            ';
        }

    }


?>