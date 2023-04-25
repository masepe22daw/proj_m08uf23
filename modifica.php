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
	$dn = 'cn='.$_POST['uid'].',ou='.$_POST['ou'].',dc=fjeclot,dc=net';

	// Eliminació de l'entrada LDAP per a l'usuari
	try {
		$ldap->delete($dn);
		echo "Usuari eliminat correctament de LDAP.";
		echo '<a href="http://zend-masepe.fjeclot.net/proj_m08uf23/menu.php">Torna al menu</a>';
	} catch (Exception $e){
		echo "Error al eliminar l'usuari de LDAP: " . $e->getMessage();
	}
}
?>
