<?php
require 'vendor/autoload.php';
use Laminas\Ldap\Ldap;
ini_set('display_errors', 0);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["ou"]) && !empty($_POST["uid"]) && !empty($_POST["atribut"]) && !empty($_POST["nou_valor"])) {

        $domini = 'dc=fjeclot,dc=net';
        $opcions = [
            'host' => 'zend-masepe.fjeclot.net',
            'username' => "cn=admin,$domini",
            'password' => 'fjeclot',
            'bindRequiresDn' => true,
            'accountDomainName' => 'fjeclot.net',
            'baseDn' => 'dc=fjeclot,dc=net',
        ];

        $ldap = new Ldap($opcions);
        $ldap->bind();

        $entrada = 'uid=' . $_POST["uid"] . ',ou=' . $_POST["ou"] . ',dc=fjeclot,dc=net';
        $modificacions = [$_POST["atribut"] => $_POST["nou_valor"]];

        try {
            $ldap->update($entrada, $modificacions);
            echo "Atribut actualitzat correctament<br>";
            echo '<a href="http://zend-masepe.fjeclot.net/proj_m08uf23/menu.php">Torna al menu</a>';
        } catch (\Laminas\Ldap\Exception $e) {
            echo "Error al actualitzar l'atribut: " . $e->getMessage();
        }
    } else {
        echo "Si us plau, ompli tots els camps del formulari.";
    }
}
?>
