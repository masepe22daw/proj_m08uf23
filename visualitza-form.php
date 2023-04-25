<html>
<head>
	<title>MOSTRANT DADES D'USUARIS DE LA BASE DE DADES LDAP</title>
</head>
<body>
<h1>Formulari de selecció d'usuari</h1>
<form action="visualitza.php" method="GET">

<label>UID:</label>
	<input type="text" name="uid" required><br>

	<label for="ou">Selecciona una unitat organitzativa:</label>
  	<select id="ou" name="ou">
    	<option value="usuaris">Usuaris</option>
   		<option value="desenvolupadors">Desenvolupadors</option>
		<option value="administradors">Administradors</option>
  	</select><br>
<input type="submit" value="Envia"/>
</form>
</body>
</html>
