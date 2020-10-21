<?php
    require_once "classeEntrada.php";

    class Textarea extends Entrada{
        
        public $rows;
        public $cols;
        
        function __construct($valores){
            $this->name = $valores["name"];
            if(isset($valores["rows"])){
                $this->rows = $valores["rows"];
            }
            if(isset($valores["cols"])){
                $this->cols = $valores["cols"];
            }
            if(isset($valores["placeholder"])){
                $this->placeholder = $valores["placeholder"];
            }            
        }

        function exibir(){
            echo "<textarea name='$this->name' ";
            
            if($this->rows!=null){
                echo "rows='$this->rows' ";
            }
            if($this->cols!=null){
              echo "cols='$this->cols' ";
            }
            if($this->placeholder!=null){
                echo "placeholder='$this->placeholder'";
            }

            if($this->required!=null){
                echo "required";
            }
            
            echo ">";

            if($this->value!=null){
                echo $this->value;
            }
            echo "</textarea>";
        }
    }
?>