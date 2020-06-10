<?php
	require("../php/session.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sistema Financeiro</title>

	<!-- css -->
	<link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<!--<link rel="stylesheet" type="text/css" href="css/reset.css"> -->
	<link rel="stylesheet" type="text/css" href="../css/style.css">

</head>

<body class="container">

	<header class="cabecalho">
		<h1 class="titulo-principal">Controle Financeiro</h1>

		<h4>Bem vindo - <?=$_SESSION['nome']?></h4>

		<br>

		<a href="../php/deslogar.php">Desconectar</a>

		<br><br>


		<div class="input-field col s12">
			<select id="mes" >
				<option value="0" selected>Selecione o mês desejado</option>
				<option value="1">Janeiro</option>
				<option value="2">Fevereiro</option>
				<option value="3">Março</option>
				<option value="4">Abril</option>
				<option value="5">Maio</option>
				<option value="6">Junho</option>
				<option value="7">Julho</option>
				<option value="8">Agosto</option>
				<option value="9">Setembro</option>
				<option value="10">Outubro</option>
				<option value="11">Novembro</option>
				<option value="12">Dezembro</option>
			</select>			
		</div>
	</header>

	<main>
		<form id="form">
			<div class="row">
				<div class="input-field col s12 m6 l3">
					<input id="salario" type="text" class="validate ValoresItens">
					<label for="salario">Salário</label>
				</div>
				<div class="input-field col s12 m6 l3">
					<input id="fixos" type="text" class="validate ValoresItens">
					<label for="fixos">Gastos Fixos</label>
				</div>
				<div class="input-field col s12 m6 l3">
					<input id="temporarios" type="text" class="validate ValoresItens">
					<label for="temporarios">Gastos Temporários</label>
				</div>
			</div>
		</form>
	</main>


	<!-- JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
	<script type="text/javascript">
		document.addEventListener('DOMContentLoaded', function() {
			var elems = document.querySelectorAll('select');
			var instances = M.FormSelect.init(elems);
		});
		 
	</script>
	<script src="../js/script.js"></script>
</body>
</html>
