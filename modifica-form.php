<html>
<head>
<title>
MODIFICACIÓ D'ATRIBUTS D'USUARIS DE LA BASE DE DADES LDAP
</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
	<div class="container mt-5">
		
<h1 class="mb-3">Formulari de modificació d'atributs d'usuari</h1>
<form action="modifica.php" method="POST">
Nom del Usuari(UID) <input class="form-input" type="text" name="uid"><br>
<label for="ou">Selecciona una unitat organitzativa:</label>
  	<select class="form-control" id="ou" name="ou">
    	<option value="usuaris">Usuaris</option>
   		<option value="desenvolupadors">Desenvolupadors</option>
		<option value="administradors">Administradors</option>
  	</select><br>

Atribut a modificar:<br>
<div class="form-check">
	<input type="radio" class="form-check-input" name="atribut" value="uidNumber"> uidNumber<br>
</div>
<div class="form-check">
	<input type="radio" class="form-check-input" name="atribut" value="gidNumber"> gidNumber<br>
</div>
<div class="form-check">
	<input type="radio" class="form-check-input" name="atribut" value="homeDirectory"> Home Directory<br>
</div>
<div class="form-check">
	<input type="radio" class="form-check-input" name="atribut" value="loginShell"> Login Shell<br>
</div>
<div class="form-check">
	<input type="radio" class="form-check-input" name="atribut" value="cn"> Common Name (CN)<br>
</div>
<div class="form-check">
	<input type="radio" class="form-check-input" name="atribut" value="sn"> Surname (SN)<br>
</div>
<div class="form-check">
	<input type="radio" class="form-check-input" name="atribut" value="givenName"> Given Name<br>
</div>
<div class="form-check">
	<input type="radio" class="form-check-input" name="atribut" value="postalAddress"> Postal Address<br>
</div>
<div class="form-check">
	<input type="radio" class="form-check-input" name="atribut" value="mobile"> Mobile Phone Number<br>
</div>
<div class="form-check">
	<input type="radio" class="form-check-input" name="atribut" value="telephoneNumber"> Telephone Number<br>
</div>
<div class="form-check">
	<input type="radio" class="form-check-input" name="atribut" value="title"> Title<br>
</div>
<div class="form-check">
	<input type="radio" class="form-check-input" name="atribut" value="description"> Description<br>
</div>

Nou valor: <input type="text" name="nou_valor"><br><br>
<button class="btn btn-primary"  type="submit">Envia</button>
<button class="btn btn-secondary" type="reset">Neteja</button>
</form>
	</div>
</body>
</html>
