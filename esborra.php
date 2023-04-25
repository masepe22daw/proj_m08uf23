<head>
    <title>MOSTRANT DADES D'USUARIS DE LA BASE DE DADES LDAP</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   
</head>
<?php
		require 'vendor/autoload.php';
		use Laminas\Ldap\Ldap;

		// Configuració de la connexió LDAP
		$opcions = [
			'host' => 'zend-masepe.fjeclot.net',
			 'username' => "cn=admin,dc=fjeclot,dc=net",
			'password' => 'fjeclot',
			'bindRequiresDn' => true,
			'accountDomainName' => 'fjeclot.net',
			'baseDn' => 'dc=fjeclot,dc=net',
		];
		$ldap = new Ldap($opcions);

		// Processament del formulari
		if ($_POST['uid'] && $_POST['ou']){
			// Generació del DN de l'usuari
			$dn = 'uid='.$_POST['uid'].',ou='.$_POST['ou'].',dc=fjeclot,dc=net';

			// Eliminació de l'entrada LDAP per a l'usuari
			try {
				$ldap->delete($dn);
				echo '<div class="alert alert-success mt-3" role="alert">Usuari eliminat correctament de LDAP.</div>';
				echo '<a href="http://zend-masepe.fjeclot.net/proj_m08uf23/menu.php" class="btn btn-primary mt-3">Torna al menu</a>';
			} catch (Exception $e){
				echo '<div class="alert alert-danger mt-3" role="alert">Error al eliminar l\'usuari de LDAP: ' . $e->getMessage() . '</div>';
			}
		}
		?>