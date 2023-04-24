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
if ($_POST['username']){
	// Generació del DN del nou usuari
	$dn = 'cn='.$_POST['username'].',ou='.$_POST['ou'].',dc=fjeclot,dc=net';

	// Creació de l'array d'atributs de l'usuari
	$entrada = [
		'objectclass' => ['top', 'person', 'organizationalPerson', 'inetOrgPerson', 'posixAccount', 'shadowAccount'],
		'cn' => $_POST['cn'],
		'sn' => $_POST['sn'],
		'givenName' => $_POST['givenName'],
		'uid' => $_POST['uid'],
		'uidNumber' => $_POST['uidNumber'],
		'gidNumber' => $_POST['gidNumber'],
		'homeDirectory' => $_POST['homeDirectory'],
		'loginShell' => $_POST['loginShell'],
		'postalAddress' => $_POST['postalAddress'],
		'mobile' => $_POST['mobile'],
		'telephoneNumber' => $_POST['telephoneNumber'],
		'title' => $_POST['title'],
		'description' => $_POST['description'],
	];

	// Afegir l'entrada LDAP per al nou usuari
	try {
		$ldap->add($dn, $entrada);
		echo "Usuari afegit correctament a LDAP.";
		echo '<a href="http://zend-masepe.fjeclot.net/proj_m08uf23/menu.php">Torna a la pàgina inicial</a>';
	} catch (Exception $e){
		echo "Error al afegir l'usuari a LDAP: " . $e->getMessage();
	}
}
?>
