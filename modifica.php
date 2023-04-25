<head>
    <title>MOSTRANT DADES D'USUARIS DE LA BASE DE DADES LDAP</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
</head>

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
        } catch (Exception $e) {
            echo "Error al actualitzar l'atribut: " . $e->getMessage();
        }
    } else {
        echo "Si us plau, ompli tots els camps del formulari.";
    }
}
?>