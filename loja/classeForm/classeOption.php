<?php
require_once "classeEntrada.php";

class Option extends Entrada{

    public $label;
    public $hidden;
    public function __construct($valores){
        $this->value=$valores["value"];
        $this->label=$valores["label"];
        
        if(isset($valores["hidden"])){
            $this->hidden = $valores["hidden"];
        }

    }

    public function exibir(){
        echo "<option value='$this->value'";
        
        if($this->hidden!=null){
            echo " hidden";
        }

        echo ">$this->label</option>";
    }

}

?>