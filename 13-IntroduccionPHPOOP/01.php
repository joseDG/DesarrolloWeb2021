<?php
declare( strict_types = 1); 
include 'includes/header.php';

//Esta parte es conocida como la abstraccion

//Definir una clase
class Producto{
    /* Forma tradicional
    //Definir los atributos
    public $nombre;
    public $precio;
    public $disponible;

    //Creacion del constructor de forma tradicional
    public function __construct($nombre, $precio, $disponible)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->disponible = $disponible;
        
    }*/

    //Forma actual
    public function __construct(public string $nombre, public int $precio, public bool $disponible)
    {
        
    }

    //Creacion de un metodo o conocido como funcion
    public function mostrarProducto(){
        echo "El Producto es: " . $this->nombre . " y su precio es de: " . $this->precio;
    }
}

//Instanciar mi clase
$producto = new Producto('Table', 200, true);

//LLamo al metodo
$producto->mostrarProducto();

/*$producto->nombre = 'Tablet';
$producto->precio = 200;
$producto->disponible = true;*/

echo "<pre>";
var_dump($producto);
echo "</pre>";

//Instanciar mi clase
$producto2 = new Producto('Monitor Curvo', 300, true);
$producto2->mostrarProducto();

/*$producto2->nombre = 'Monitor Curvo';
$producto2->precio = 500;
$producto2->disponible = true;*/

echo "<pre>";
var_dump($producto2);
echo "</pre>";

include 'includes/footer.php';