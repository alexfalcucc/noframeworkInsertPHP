<?php


	class Banco {
		private $sql;
		private $query;
		private $result;
		private $host;
		private $usuario;
		private $senha;
		private $banco;
		public $tabela;
		public $campos; // array
		public $valores; // array
		private $linhas;
		private $camposQuery = null;
		private $valoresQuery = null;
	
		public function __construct() {
			$this->conexao();
		}
		
		private function conexao() {
			$this->host    = "localhost";
			$this->usuario = "root";
			$this->senha   = "";
			$this->banco   = "oo";
			
			mysql_connect($this->host, $this->usuario, $this->senha);
			mysql_select_db($this->banco);
		}
		
		private function montaQuery($tipo) {
			$cont  = count($this->campos);
			for($i = 0; $i < $cont; $i++) {
				if($i < $cont - 1) {
					if($tipo == 1) {
						$this->camposQuery  .= $this->campos[$i] .", ";
						$this->valoresQuery .= "'" .$this->valores[$i] ."', ";
					} 
				} else {
					if($tipo == 1) {
						$this->camposQuery  .= $this->campos[$i];
						$this->valoresQuery .= "'" . $this->valores[$i] ."'";
					}
				}
			}
		}
		
		public function inserirRegistro() {
			$this->montaQuery(1);
			$this->sql    = "INSERT INTO ".$this->tabela." (".$this->camposQuery.") VALUES (".$this->valoresQuery.")";
			$this->query  = mysql_query($this->sql);
			$this->result = mysql_affected_rows();

			return $this->result;
		}
	}
?>
