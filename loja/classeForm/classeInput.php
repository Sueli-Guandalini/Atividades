<?php
    require_once "classeEntrada.php";

    class Input extends Entrada{
        public $type; //null

        function __construct($valores){

            $this->type = $valores["type"];
            // is set -> Está "setado" ou preenchido, ou existe a variavel.
            if(isset($valores["name"])){
                $this->name = $valores["name"];
            }
            if(isset($valores["placeholder"])){
                $this->placeholder = $valores["placeholder"];
            }
            if(isset($valores["value"])){
                $this->value = $valores["value"];
            }
            if(isset($valores["required"])){
                $this->required = $valores["required"];
            }  
            if(isset($valores["class"])){
                $this->class = $valores["class"];
            }
            if(isset($valores["label"])){
                $this->label = $valores["label"];
            }
        }

        function exibir(){
            if($this->label!=null){
                echo "<label>$this->label</label>: ";
            }

            echo "<input type='$this->type' ";
            
            if($this->name!=null){
                echo "name='$this->name' ";
            }

            if($this->placeholder!=null){
                echo "placeholder='$this->placeholder' ";
            }

            if($this->value!=null){
                echo "value='$this->value' ";
            }

            if($this->class!=null){
                echo "class='$this->class' ";
            }

            if($this->required!=null){
                echo "required";
            }

            echo "/>";
        }
    }
?>