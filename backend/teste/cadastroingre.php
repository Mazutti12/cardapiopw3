<?php
	include_once("conexao.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Cadastro ingredientes</title>
		<meta charset="utf-8">
	</head>
	</body>
		<form method="POST" action="form.php">
			<input type="text" name="nome" placeholder="Digite o nome do ingrediente: "><br><br>
			<input type="number" name="calorias" placeholder="Digite as calorias:"><br><br>
			<input type="submit" value="Cadastrar">
		</form>
	</body>
</html>