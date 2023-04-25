<html>
<head>
	<title>MOSTRANT DADES D'USUARIS DE LA BASE DE DADES LDAP</title>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
	<div class="container mt-5">
		<h1 class="mb-3">Formulari de selecció d'usuari</h1>
		<form action="visualitza.php" method="GET">

			<div class="form-group">
				<label>Nom del Usuari(UID):</label>
				<input type="text" class="form-control" name="uid" required>
			</div>

			<div class="form-group">
				<label for="ou">Selecciona una unitat organitzativa:</label>
  				<select id="ou" class="form-control" name="ou">
    				<option value="usuaris">Usuaris</option>
   					<option value="desenvolupadors">Desenvolupadors</option>
					<option value="administradors">Administradors</option>
  				</select>
			</div>
			<input type="submit" class="btn btn-primary" value="Envia"/>
		</form>
	</div>

</body>
</html>
