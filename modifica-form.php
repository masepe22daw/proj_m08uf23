<html>
<head>
<title>
MODIFICACIÓ D'ATRIBUTS D'USUARIS DE LA BASE DE DADES LDAP
</title>
</head>
<body>
<h2>Formulari de modificació d'atributs d'usuari</h2>
<form action="modifica.php" method="POST">
Usuari: <input type="text" name="uid"><br>
<label for="ou">Selecciona una unitat organitzativa:</label>
  	<select id="ou" name="ou">
    	<option value="usuaris">Usuaris</option>
   		<option value="desenvolupadors">Desenvolupadors</option>
		<option value="administradors">Administradors</option>
  	</select><br>

Atribut a modificar:<br>
<input type="radio" name="atribut" value="uidNumber"> uidNumber<br>
<input type="radio" name="atribut" value="gidNumber"> gidNumber<br>
<input type="radio" name="atribut" value="homeDirectory"> Home Directory<br>
<input type="radio" name="atribut" value="loginShell"> Login Shell<br>
<input type="radio" name="atribut" value="cn"> Common Name (CN)<br>
<input type="radio" name="atribut" value="sn"> Surname (SN)<br>
<input type="radio" name="atribut" value="givenName"> Given Name<br>
<input type="radio" name="atribut" value="postalAddress"> Postal Address<br>
<input type="radio" name="atribut" value="mobile"> Mobile Phone Number<br>
<input type="radio" name="atribut" value="telephoneNumber"> Telephone Number<br>
<input type="radio" name="atribut" value="title"> Title<br>
<input type="radio" name="atribut" value="description"> Description<br>
Nou valor: <input type="text" name="nou_valor"><br>
<input type="submit"/>
<input type="reset"/>
</form>
</body>
</html>
