<html>
<head>
	<title>Borrar usuari LDAP</title>
</head>
<body>
	<h1>Borrar usuari LDAP</h1>
	<form method="POST" action="esborra.php">
		<label>UID:</label>
		<input type="text" name="cn" required><br>

		<label>Unitat organitzativa:</label>
		<input type="text" name="ou" required><br>

		<input type="submit" value="Borrar usuari">
	</form>
</body>
</html>