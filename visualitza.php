<head>
    <title>MOSTRANT DADES D'USUARIS DE LA BASE DE DADES LDAP</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   
</head>

<?php
require 'vendor/autoload.php';
use Laminas\Ldap\Ldap;
ini_set('display_errors',0);
if (isset($_GET['uid']) && isset($_GET['ou'])){ //verificamos si se han enviado los datos del formulario
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
    $entrada='uid='.$_GET['uid'].',ou='.$_GET['ou'].',dc=fjeclot,dc=net';
    $usuari=$ldap->getEntry($entrada);
    echo "<div class='container'><div class='row'><div class='col-sm-8 col-sm-offset-2'><div class='panel panel-default'><div class='panel-heading'><h3 class='panel-title'><b><u>".$usuari["dn"]."</b></u></h3></div><div class='panel-body'>";
    foreach ($usuari as $atribut => $dada) {
        if ($atribut != "dn") echo "<p><strong>".$atribut.": </strong>".$dada[0].'</p>';
    }
    echo '<a href="http://zend-masepe.fjeclot.net/proj_m08uf23/menu.php" class="btn btn-primary">Torna al menu</a></div></div></div></div></div>';
} else {
    header("Location: visualitza-form.php"); 
    exit();
}
?>

