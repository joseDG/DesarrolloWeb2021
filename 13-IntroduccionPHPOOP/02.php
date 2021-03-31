<?php
declare( strict_types = 1); 
include 'includes/header.php';

//ENCAPSULACION
class Producto{

    //Public - Se puede acceder y modificar en cualquier lugar (clase y objeto)
    //Protected - Se puede acceder / modificar unicamente en la clase
    //Private - Solo miembros de la misma clase pueden acceder a el (se lo aplica en la herencia).

    //Forma actual
    public function __construct(protected string $nombre, public int $precio, public bool $disponible)
    { 
    }
    //Creacion de un metodo o conocido como funcion | el void no retorna nada
    public function mostrarProducto() : void{
        echo "El Producto es: " . $this->nombre . " y su precio es de: " . $this->precio;
    }
    //Metodo para acceder a datos protected
    public function getNombre() : string{
        return $this->nombre;
    }

    public function setNombre(string $nombre){
        $this->nombre = $nombre;
    }
}

//Instanciar mi clase
$producto = new Producto('Table', 200, true);
//$producto->mostrarProducto();//LLamo al metodo
 echo $producto->getNombre();
 $producto->setNombre('Nuevo Nombre');

/*echo "<pre>";
var_dump($producto);
echo "</pre>";*/

//Instanciar mi clase
$producto2 = new Producto('Monitor Curvo', 300, true);
//$producto2->mostrarProducto();
echo $producto2->getNombre();

/*echo "<pre>";
var_dump($producto2);
echo "</pre>";*/

include 'includes/footer.php';