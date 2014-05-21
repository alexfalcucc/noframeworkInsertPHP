<?php
	/*	
	*	AUTOR	:	Edimilson Sousa Quelipe
	*	E-MAIL	:	quelipe_@hotmail.com
	*	SITE	:	www.quelipe.com.br
	*	DATA	:	23/03/2011
	*/
	

	require_once("../model/Cadastro.php");
	class CadastroController {
	
		private $cadastro;
		
		public function __construct() {
			$this->cadastro = new Cadastro();
			
			$acao = $_POST['acao'];
			if($acao == "incluir") {
				$this->incluir();
			}
		}
		
		private function incluir() {
			$this->cadastro->setNome($_POST['nome']);
			$this->cadastro->setIdade($_POST['idade']);
			$this->cadastro->setTelefone($_POST['telefone']);
			$result = $this->cadastro->incluir();
			if($result >=1) {
				echo "<script>alert('Registro incluído com sucesso!');document.location='../view/cad_cadastro.php'</script>";
			} else {
				echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
			}
		}
	}
	new CadastroController();
?>
