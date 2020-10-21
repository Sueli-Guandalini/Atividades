<?php

include "classeInput.php";
include "classeInputOpcoes.php";
include "classeTextarea.php";
include "classeSelect.php";
include "classeOption.php";


class Form{
    public $method;
    public $action;
    public $entradas;

    public function __construct($valores){
        if(isset($valores["method"])){
            $this->method = $valores["method"];
        }
        if(isset($valores["action"])){
            $this->action = $valores["action"];
        }
    }

    public function adiciona_entrada($e){
        $this->entradas[]=$e;
    }


    public function exibir(){
        echo "<form ";
        if($this->method!=null){
            echo "method='$this->method' ";
        }
        if($this->action!=null){
            echo "action='$this->action' ";
        }
        echo ">";

        //for ->para; each ->cada --- valor dentro do vetor $this->entradas, 
        //coloque na variavel $i o indice do vetor e na variavel
        //$e o valor dentro deste indice.
        //teremos a exibição dos objetos que farão parte do objeto FORM aqui criado.
        foreach($this->entradas as $i=>$e){
            $e->exibir();
            echo "<br />";
        }    

        echo "</form>";
    }


}


?>