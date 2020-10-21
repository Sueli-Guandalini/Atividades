<?php

require_once "classeEntrada.php";

class Select extends Entrada{

   public $options; 

    public function __construct($valores){
        $this->name = $valores["name"];

        if(isset($valores["required"])){
            $this->required = $valores["required"];
        }
    }

    public function adiciona_option(Option $o){
        $this->options[] = $o;
    }

    public function exibir(){
        echo "<select name='$this->name'";
        
        if($this->required!=null){
            echo " required";
        }

        echo ">";

        if($this->options!=null){
            foreach($this->options as $i=>$o){
                $o->exibir();
            }
        }

        echo "</select>";
    }

}