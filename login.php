<html>
	<head>
		<title>AUTENTICANT AMB LDAP DE L'USUARI admin</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	</head>
	<body>
		<div class="container mt-5 ">
			<h1  class="container mb-3" >AUTENTICA AMB LDAP DE L'USUARI admin</h1>
			<form class="form-horizontal" action="http://zend-masepe.fjeclot.net/proj_m08uf23/auth.php" method="POST">
				<div class="form-group">
					<label class="control-label col-sm-4" for="adm">Usuari amb permisos d'administració LDAP:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="adm" name="adm">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-4" for="cts">Contrasenya de l'usuari:</label>
					<div class="col-sm-8">
						<input type="password" class="form-control" id="cts" name="cts">
					</div>
				</div><br>
				<div class="form-group">
					<div class="col-sm-offset-4 col-sm-8">
						<input type="submit" class="btn btn-primary" value="Envia">
						<input type="reset" class="btn btn-default" value="Neteja">
					</div>
				</div>
			</form>
		</div>
	</body>
</html>