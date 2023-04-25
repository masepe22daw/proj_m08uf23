<html>
<head>
	<title>Borrar usuari LDAP</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
	<div class="container mt-5">
		<h1 class="mb-3">Borrar usuari LDAP</h1>
		<form method="POST" action="esborra.php">
			<div class="form-group">
				<label for="uid">Nom del Usuari(UID):</label>
				<input type="text" class="form-control" id="uid" name="uid" required>
			</div>
			<div class="form-group">
				<label for="ou">Selecciona una unitat organitzativa:</label>
		  		<select class="form-control" id="ou" name="ou">
		    		<option value="usuaris">Usuaris</option>
		   			<option value="desenvolupadors">Desenvolupadors</option>
					<option value="administradors">Administradors</option>
		  		</select>
	  		</div><br>
	  		<button type="submit" class="btn btn-primary">Borrar usuari</button>
		</form>
	</div>
</body>
</html>