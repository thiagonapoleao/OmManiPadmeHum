<?php
require_once 'init.php';

// abre a conexão
$PDO = db_connect();

// SQL para contar o total de registros
// A biblioteca PDO possui o método rowCount(), mas ele pode ser impreciso.
// É recomendável usar a função COUNT da SQL
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>INSTITUTO XAMÂNICO OM MANI PADME HUM </title>
	<link rel="stylesheet" type="text/css" href="css/stilo.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<meta name="author" content="">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width" scale="1">
	<!-- transforma a pagina em  responsivel-->
</head>

<body style="background-image:  url('./img/index-2.jpg'); background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%; ">
	<div class=" card" style="width: 20%; height: 320px; margin-top: 110px; margin-left: 35%; background-image: url(img/login.png);background-repeat: no-repeat;background-size: 100% 100%;">
		<div class="card-body">
			<form action="acesso.php" method="post">
				<div class="form-group" align="center">
					<div class="col-md-10 mb-3">
						<label style="color: rgba(255,255,0);" for="exampleInputUser">Usuário</label>
						<input type="text" name="user" id="user" class="form-control" autofocus autocomplete="off" readonly onfocus="this.removeAttribute('readonly');this.select();">
					</div>
				</div>
				<div class="form-group" align="center">
					<div class="col-md-10 mb-3">
						<label style="color: rgba(255,255,0);" for="exampleInputPassword">Senha</label>
						<input type="password" name="password" id="password" class="form-control" autofocus autocomplete="off" readonly onfocus="this.removeAttribute('readonly');this.select();">
					</div>
				</div>
				<div align="center">
					<button type="submit" class="btn btn-outline-warning" style="color: rgba(255,255,0);">Acessar</button>
				</div>
			</form>
		</div>
	</div>
</body>

</html>