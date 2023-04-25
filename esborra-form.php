<html>
<head>
	<title>Borrar usuari LDAP</title>
</head>
<body>
	<h1>Borrar usuari LDAP</h1>
	<form method="POST" action="esborra.php">
		<label>Nom del Usuari:</label>
		<input type="text" name="uid" required><br>

		<label for="ou">Selecciona una unitat organitzativa:</label>
  		<select id="ou" name="ou">
    	<option value="usuaris">Usuaris</option>
   		<option value="desenvolupadors">Desenvolupadors</option>
		<option value="administradors">Administradors</option>
  		</select><br>

		<input type="submit" value="Borrar usuari">
	</form>
</body>
</html>