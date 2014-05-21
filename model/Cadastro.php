<?php
	/*	
	*	AUTOR	:	Edimilson Sousa Quelipe
	*	E-MAIL	:	quelipe_@hotmail.com
	*	SITE	:	www.quelipe.com.br
	*	DATA	:	23/03/2011
	*/

	require_once("Banco.php");
	
	class Cadastro extends Banco {
		private $nome;
		private $idade;
		private $telefone;
		
		public function setNome($string) {
			$this->nome = $string;
		}
		
		public function setIdade($int) {
			$this->idade = $int;
		}
		
		public function setTelefone($string) {
			$this->telefone = $string;
		}
				
		public function getNome() {
			return $this->nome;
		}
		
		public function getIdade() {
			return $this->idade;
		}
		
		public function getTelefone() {
			return $this->telefone;
		}
		
		public function incluir() {
			$this->tabela  = "usuarios";
			$this->campos  = array("nome", "idade", "telefone");
			$this->valores = array($this->getNome(),$this->getIdade(),$this->getTelefone());
			$result = $this->inserirRegistro();
			
			return $result;
		}
	}
?>