<html>
<head>
	<title>Afegir Usuari</title>
</head>
<body>
	<h1>Afegir Usuari</h1>
	<form method="POST" action="afegir.php">
		
	<label>uid:</label>
		<input type="text" name="uid"><br>

  		<label for="ou">Selecciona una unitat organitzativa:</label>
  		<select id="ou" name="ou">
    		<option value="administradors">Administradors</option>
   	 		<option value="desenvolupadors">Desenvolupadors</option>
    		<option value="usuaris">Usuaris</option>
  		</select><br>

		<label>uidNumber:</label>
		<input type="number" name="uidNumber"><br>

		<label>gidNumber:</label>
		<input type="number" name="gidNumber"><br>

		<label>Directori personal:</label>
		<input type="text" name="homeDirectory"><br>

		<label>Shell:</label>
		<input type="text" name="loginShell" placeholder="/bin/bash"><br>

		<label>cn:</label>
		<input type="text" name="cn"><br>

		<label>sn:</label>
		<input type="text" name="sn"><br>

		<label>Nom complet:</label>
		<input type="text" name="givenName"><br>

		<label>Adreça:</label>
		<input type="text" name="postalAddress"><br>

		<label>Telèfon mòbil:</label>
		<input type="number" name="mobile"><br>

		<label>Telèfon fix:</label>
		<input type="tel" name="telephoneNumber" placeholder="123-45-67-89"><br>

		<label>Títol:</label>
		<input type="text" name="title"><br>

		<label>Descripció:</label>
		<input type="text" name="description"><br>

		<input type="submit" value="Afegir">
	</form>
</body>
</html>