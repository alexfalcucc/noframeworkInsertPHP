<html>
<title>CRUD PHP OO Modelo MVC</title>
</head>

<body>
<form action="../controller/CadastroController.php" method="post">
	<input type="hidden" name="acao" value="incluir">
	Nome: <br /><input type="text" size="30" name="nome"><br />
	Idade: <br /><input type="text" size="5" name="idade"><br />
	Telefone: <br /><input type="text" size="15" name="telefone">
	<p><input type="submit" value="Gravar"> <input type="button" value="Voltar" onClick="document.location='../menu.php'"></p>
</form>

</body>
</html>
