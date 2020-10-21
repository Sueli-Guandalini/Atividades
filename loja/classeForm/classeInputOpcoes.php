<?php

require_once("classeInput.php");

class InputOpcoes extends Input{
    public $labelOpcoes;
    public $valueOpcoes;

    public function __construct($valores){
        $this->type = $valores["type"];
        $this->name = $valores["name"];
        $this->label = $valores["label"];
        $this->valueOpcoes = $valores["valueOpcoes"];
        $this->labelOpcoes = $valores["labelOpcoes"];
        
        if(isset($valores["required"])){
            $this->required = $valores["required"];
        }  
        if(isset($valores["class"])){
            $this->class = $valores["class"];
        }                
    }

    public function exibir(){
        echo "<label>$this->label</label>:";
        foreach($this->valueOpcoes as $i=>$v){
            echo "<input 
                    type='$this->type' 
                    name='$this->name";
                    
            if($this->type=="checkbox"){
                echo"[]";
            }
            
            echo "' 
                    value='".$this->valueOpcoes[$i]."'/>
                    ".$this->labelOpcoes[$i]." ";
        }
    }
}

?>