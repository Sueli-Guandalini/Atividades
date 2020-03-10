<?php

class Jogador{
		//Lista de Atributos
		private $nome;
		private $opcao;
		
		public function __construct($nome, $opcao){
			$this->nome = $nome;
			$this->opcao = $opcao;
		}
		
		public function set_nome($valor){
			$this->nome = $valor;
		}
		
		public function set_opcao($valor){
			$this->opcao = $valor;
		}
		
		public function get_nome(){
			return($this->nome);
		}
		
		public function get_opcao(){
			return($this->opcao);
		}
	
}
	//Lista de Métodos
		
?>