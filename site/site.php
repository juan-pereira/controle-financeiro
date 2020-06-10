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
	<link rel="stylesheet" type="text/css" href="../css/style.css">

</head>

<body class="container body">
	<nav class="nav">
		<div class="nav-wrapper">
			<a href="#" class="brand-logo"><img class="img-nav" src="../controlefinanceiro.png"></a>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li><a href="help.html">Ajuda</a></li>
				<li><a href="../php/deslogar.php">Desconectar</a></li>
			</ul>
		</div>
	</nav>

	<header class="cabecalho">
		<h2 class="titulo-principal">Controle Financeiro</h2>

		<h5 class="titulo-principal">Bem vindo - <?=$_SESSION['nome']?></h5>		

		<br><br>

	</header>

	<main>
	

		<div class="col s12">
			<select id="mes">
				<option value="0" selected>Selecione o mês desejado</option>
				<option value="01">Janeiro</option>
				<option value="02">Fevereiro</option>
				<option value="03">Março</option>
				<option value="04">Abril</option>
				<option value="05">Maio</option>
				<option value="06">Junho</option>
				<option value="07">Julho</option>
				<option value="08">Agosto</option>
				<option value="09">Setembro</option>
				<option value="10">Outubro</option>
				<option value="11">Novembro</option>
				<option value="12">Dezembro</option>
			</select>			
		</div>		

		<form id="form">

		<div class="row">
			<div class="input-field col s12 m6 l3">
				<input id="salario" type="text" class="validate invalid ValoresItens" required>
				<label for="salario">Salário</label>
			</div>
			<div class="input-field col s12 m6 l3">
				<input id="fixos" type="text" class="validate invalid ValoresItens" required>
				<label for="fixos">Gastos Fixos</label>
			</div>
			<div class="input-field col s12 m6 l3">
				<input id="temporarios" type="text" class="validate invalid ValoresItens" required>
				<label for="temporarios">Gastos Temporários</label>
			</div>
			<div class="input-field col s12 m6 l3">
				<button type='submit' class="waves-effect waves-light btn">Gravar</button>
			</div>
		</div>
		
		</form>


		<div class="row esconde" id="calculos">
			<div>
				<h5 class="center-align">Referente ao mês de <i id="nomeMes"></i></h5>
			</div>
			<div class="row">
				<div class="col l6">
					<div id="piechart"></div>
				</div>			
				<div class="col l6">
					<div class="row">
						<p>Salario : <i id="salario_resultado"></i></p>
					</div>
					<div class="row">
						<p>Gastos Fixos : <i id="fixo_resultado"></i></p>
					</div>
					<div class="row">
						<p>Gasto Temporarios : <i id="temporario_resultado"></i></p>
					</div>
					<div class="row">
						<p>Sobrou : <i id="sobras_resultado"></i></p>
					</div>
				</div>
			</div>
			
		</div>
		

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
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</body>
</html>
