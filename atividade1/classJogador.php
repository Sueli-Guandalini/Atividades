<?php

class Jogador{
		//Lista de Atributos
		private $nome;
		private $opcao;
		
		public function __construct($n){
			$this->nome = $nome;
			$this->opcao = $opcao;
		}
		
		public function get_nome(){
			return($this->nome);
		}
		
		public function get_opcao(){
			return($this->opcao);
		}
		
?>