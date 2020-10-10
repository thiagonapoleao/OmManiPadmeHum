<?php
require_once 'init.php';

// abre a conexão
$PDO = db_connect();

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>INSTITUTO XAMÂNICO OM MANI PADME HUM</title>
	<link rel="stylesheet" type="text/css" href="stilo.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta name="author" content="">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width" scale="1">

	<!-- Adicionando JQuery -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

	<!-- transforma a pagina em  responsivel-->
</head>

<body style="background-image:  url('./img/index-2.jpg'); background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%; ">
	<!--Importando Script Jquery-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<header>
		<nav class="navbar navbar-light" style="background-color: rgba(215, 215, 215, .3);">
			<a class="navbar-brand" href="#"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="inicial.php">Home </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="participacao/consulta_participacao.php">Lista de Participações</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="cadastro/lista_cadastro.php">Lista de Cadastro</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="cadastro/cadastro.php">Formulario de Cadstro</a>
					</li>

				</ul>
			</div>
		</nav>
	</header>

	<div class="container" id="campocpf" style="background-image: url('img/logo-3.png'); background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%; margin-top: 80px; width: 50%; box-shadow: 0px 0px 10px rgba(0, 0, 0, .5);  ">

		<div class="container" style="margin-left: 10px">
			<form action="participacao/participacao.php" method="get" class="needs-validation" id="formSearch" novalidate>
				<div align="center" style="color: rgba(236, 173, 33);">
					<div class="form-row">
						<div class="col-sm-1 mb-1">
							<img src="img/logo-1.png" alt="" style="margin-left: -35px;">
						</div>
					</div>
					<div class="form-container">
						<div class="col-sm-8 mb-1">
							<label for="validationServer01">Digite o CPF</label>
							<input align="center" type="text" name="cpf" id="cpf" class="form-control" autofocus>
						</div>
					</div>
					<br>
					<div class="container">
						<button type="submit" class="btn btn-outline-warning" style="color: rgba(236, 173, 33);">Consulta</button>
					</div>
					<br>
				</div>
			</form>

		</div>
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<!-- Adicionando JQuery -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
	</div>


</body>

</html>