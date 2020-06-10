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
		<h1 class="titulo-principal">Controle Financeiro</h1>

		<h4 class="titulo-principal">Bem vindo - <?=$_SESSION['nome']?></h4>

		

		<br><br>

	</header>

	<main>
		<div class="row form-center">
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
		<button class="btn waves-effect waves-light botao center" type="submit" name="action">Calcular</button>
		<div class="row form-center">
			<div class="input-field col s12 m6 l3 enviar">
				<input disabled value="Restante" id="disabled" type="text" class="validate">
				<label style="text-align: center;" for="disable">Salário Restante</label>
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
			var instances = M.FormSelect.init(elems, options);
		});
		$(document).ready(function(){
			$('select').formSelect();

			$(".ValoresItens").maskMoney({
				prefix: "R$",
				decimal: ",",
				thousands: "."
			});

		});    
	</script>
</body>
</html>
