<!DOCTYPE html>
<html>
	<head>
		<title>Afegir Usuari</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	</head>
	<body>
		<div class="container mt-5">
			<h1 class="mb-3" >Afegir Usuari</h1>
			<form method="POST" action="afegir.php">
				<div class="form-group col-sm-4">
					<label for="uid">Nom del Usuari(UID):</label>
					<input type="text" class="form-control" id="uid" name="uid">
				</div><br><br>
				<div class="form-group col-sm-4">
					<label for="ou">Selecciona una unitat organitzativa:</label>
					<select class="form-control" id="ou" name="ou">
						<option value="usuaris">Usuaris</option>
						<option value="desenvolupadors">Desenvolupadors</option>
						<option value="administradors">Administradors</option>
					</select>
				</div><br><br>
				<div class="form-group col-sm-4">
					<label for="uidNumber">uidNumber:</label>
					<input type="number" class="form-control" id="uidNumber" name="uidNumber">
				</div><br><br>
				<div class="form-group col-sm-4">
					<label for="gidNumber">gidNumber:</label>
					<input type="number" class="form-control" id="gidNumber" name="gidNumber">
				</div><br><br>
				<div class="form-group col-sm-4">
					<label for="homeDirectory">Directori personal:</label>
					<input type="text" class="form-control" id="homeDirectory" name="homeDirectory">
				</div><br><br>
				<div class="form-group col-sm-4">
					<label for="loginShell">Shell:</label>
					<input type="text" class="form-control" id="loginShell" name="loginShell" placeholder="/bin/bash">
				</div><br><br>
				<div class="form-group col-sm-4">
					<label for="cn">cn:</label>
					<input type="text" class="form-control" id="cn" name="cn">
				</div><br><br>
				<div class="form-group col-sm-4">
					<label for="sn">sn:</label>
					<input type="text" class="form-control" id="sn" name="sn">
				</div><br><br>
				<div class="form-group col-sm-4">
					<label for="givenName">Nom complet:</label>
					<input type="text" class="form-control" id="givenName" name="givenName">
				</div><br><br>
				<div class="form-group col-sm-4">
					<label for="postalAddress">Adreça:</label>
					<input type="text" class="form-control" id="postalAddress" name="postalAddress">
				</div><br><br>
				<div class="form-group col-sm-4">
					<label for="mobile">Telèfon mòbil:</label>
					<input type="number" class="form-control" id="mobile" name="mobile">
				</div><br><br>
				<div class="form-group col-sm-4">
					<label for="title">Títol:</label>
					<input type="text" class="form-control" id="title" name="title">
				</div><br><br>
				<div class="form-group col-sm-4">
					<label for="description">Descripció:</label>
					<input type="text" class="form-control" id="description" name="description">
				</div><br><br>

				<input type="submit" class="btn btn-primary" value="Afegir"><br><br><br>
	</form>
	</div>
</body>
</html>