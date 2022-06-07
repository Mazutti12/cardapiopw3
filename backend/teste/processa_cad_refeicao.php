<?php
	include_once("conexao.php");
	$nome = $_POST['nome'];
	$data_refeicao = $_POST['data_refeicao'];
	$tipo_refeicao =$_POST['tipo_refeicao'];
	$select_ingredientes = $_POST['select_ingredientes'];

	
	
	$result_refeicao = "INSERT INTO refeicao(nome,data_refeicao,tipo_refeicao,id_ingredientes) VALUES ('$nome','$data_refeicao','$tipo_refeicao','$select_ingredientes')";
	$resultado_refeicao = mysqli_query($conn, $result_refeicao);
	
	if(mysqli_affected_rows($conn) != 0){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/cardapio/cardapiopw3/backend/teste/cadastro.php'>
					<script type=\"text/javascript\">
						alert(\"Refeição cadastrada com Sucesso.\");
					</script>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/cardapio/cardapiopw3/backend/teste/cadastro.php'>
					<script type=\"text/javascript\">
						alert(\"A refeição não foi cadastrada com Sucesso.\");
					</script>
				";	
			} 
?>