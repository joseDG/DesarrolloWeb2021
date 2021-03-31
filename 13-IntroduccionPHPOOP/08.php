<?php include 'includes/header.php';

require 'vendor/autoload.php';

//Incluir las otras clases
/*1. Forma de hacer
require 'clases/Cliente.php';
require 'clases/Detalles.php';*/

//Recomendada para importar clases de otra carperta
//function mi_autoload($clase) {
//    require __DIR__ . '/clases/' . $clase . '.php';
//}

//spl_autoload_register('mi_autoload');

//$detalles = new Detalles();
//$clientes = new Clientes();

//Utilizando los NAMESPACE
//sirve para quitar el App
use App\Clientes;
use App\Detalles;
//Se realiza con composer automaticamente
//Los namespace son utilziados como para que las clases no se choquen entre si 
//function mi_autoload($clase) {
//   $partes = explode('\\', $clase);
//   require __DIR__ . '/clases/' . $partes[1] . '.php';
//}

//spl_autoload_register('mi_autoload');

//esta clase es la que se repite
//class Clientes {
//    public function __construct()
//    {
//        echo "Desde 08.php que contiene los clientes";
//    }
//}

$detalles = new Detalles();
$clientes = new Clientes();
//$clientes2 = new Clientes();

include 'includes/footer.php';