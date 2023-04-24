<html>
<head>
	<title>Afegir Usuari</title>
</head>
<body>
	<h1>Afegir Usuari</h1>
	<form method="POST" action="afegir.php">
		<label>Nom d'usuari:</label>
		<input type="text" name="username"><br>
		<form method="post">
  		<label for="ou">Selecciona una opción:</label>
  		<select id="ou" name="opcion">
    		<option value="ou1">Opción 1</option>
   	 		<option value="ou2">Opción 2</option>
    		<option value="ou3">Opción 3</option>
  		</select>
 		<button type="submit" name="submit">Enviar</button>
		<label>uid:</label>
		<input type="text" name="uid"><br>
		<label>uidNumber:</label>
		<input type="text" name="uidNumber"><br>
		<label>gidNumber:</label>
		<input type="text" name="gidNumber"><br>
		<label>Directori personal:</label>
		<input type="text" name="homeDirectory"><br>
		<label>Shell:</label>
		<input type="text" name="loginShell"><br>
		<label>cn:</label>
		<input type="text" name="cn"><br>
		<label>sn:</label>
		<input type="text" name="sn"><br>
		<label>Nom complet:</label>
		<input type="text" name="givenName"><br>
		<label>Adreça:</label>
		<input type="text" name="postalAddress"><br>
		<label>Telèfon mòbil:</label>
		<input type="text" name="mobile"><br>
		<label>Telèfon fix:</label>
		<input type="text" name="telephoneNumber"><br>
		<label>Títol:</label>
		<input type="text" name="title"><br>
		<label>Descripció:</label>
		<input type="text" name="description"><br>
		<input type="submit" value="Afegir">
	</form>
</body>
</html>