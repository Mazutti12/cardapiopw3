<?php
	include_once("conexao.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Cadastro</title>
		<meta charset="utf-8">
	</head>
	</body>
		<form method="POST" action="processa_cad_refeicao.php">
			<input id="nome" type="text" name="nome" placeholder="Digite o nome da refeição "><br><br>
			<input id="data" type="date" name="data_refeicao" placeholder="Digite a data "><br><br>
			<select id="tipo" name="tipo_refeicao">
				<option value="1">Café da manhã</option>
				<option value="2">Almoço</option>
				<option value="3">Janta</option>
			</select>
				<select id="select" name="select_ingredientes">
					<option value="-1">Selecione</option>
					<?php
						$result_ingredientes = "SELECT * FROM ingredientes";
						$resultado_ingredientes = mysqli_query($conn, $result_ingredientes);
						$data = "";
						while($row_ingredientes = mysqli_fetch_assoc($resultado_ingredientes)){ 
								$data .= "{id: '{$row_ingredientes['id']}', nome: '{$row_ingredientes['nome']}'},";
							?>
							 <?php
						}
					?>
				</select><br><br>
				<button type="button" onClick="add()">+</button>
				<ul id="ingredientes"></ul>
			
			<input type="button" onClick="salvar()" value="Cadastrar">
		</form>
		<script>
			const data = [<?php echo $data;  ?>]

			onload = async () => {
				//const response = await  fetch(``)
				//const data = await response.json()
				
			
				data.forEach(d => {
					const option = document.createElement('OPTION')
					option.setAttribute('value', d.id)
					option.innerHTML = d.nome
					console.log(option)
					document.getElementById('select').appendChild(option)
				})

			}
			const ingredientes = []
			const add = () => {
				const v = document.getElementById('select').value
				const ul = document.getElementById('ingredientes')
				const li = document.createElement('LI')
				ingredientes.push(v)
				li.innerHTML = data.find(d => d.id === v).nome
				ul.appendChild(li)
			}

			const salvar = async() => {
				const nome = document.getElementById('nome').value
				const data = document.getElementById('data').value
				const tipo = document.getElementById('tipo').value

				const body = new FormData()
				body.append('nome', nome)
				body.append('data', data)
				body.append('tipo', tipo)
				body.append('ingredientes', ingredientes)
/*
				const response = await fetch(``, {
					method: "POST",
					body
				})

			}
			*/
			</script>
	</body>
</html>