<?php

class Jogador{
		//Lista de Atributos
		private $jogador;
		private $opcao;
		
		public function __construct($n){
			$this->nome = $n;
			$this->opcao1 = X;
			$this->opcao2 = 0;
		}
		
		public function get_nome(){
			return($this->nome);
		}
		
		//lista de Métodos
		public function jogar($opcao, $tempo){
			$this->velocidade_atual = 
				$this->velocidade_atual + $valor_aceleracao*$tempo;
				
			if($this->velocidade_atual > $this->velocidade_maxima){
				$this->velocidade_atual = $this->velocidade_maxima;
			}
		}
		
		public function frear($valor_frenagem, $tempo){
			$this->velocidade_atual = 
				$this->velocidade_atual - $valor_frenagem*$tempo;
				
			if($this->velocidade_atual < 0){
				$this->velocidade_atual = 0;
			}		
		}
		
		
	}
?>