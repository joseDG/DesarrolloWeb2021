<?php
declare( strict_types = 1); 
include 'includes/header.php';

//MÉTODOS ESTATICOS
class Producto{
    
    public $imagen;
    //Creaciond de un atributo estatico
    public static $imagenPlaceholder = "Imagen.jpg";

    //Forma actual
    public function __construct(protected string $nombre, public int $precio, public bool $disponible, string $imagen)
    { 
        if($imagen){
            self::$imagenPlaceholder = $imagen;
        }
    }
    //Creacion para llamar un atributo estatico
    public static function obtenerImagenProducto(){
        return self::$imagenPlaceholder;
    }
    //Creacion de un metodo o conocido como funcion | el void no retorna nada
    public function mostrarProducto() : void{
        echo "El Producto es: " . $this->nombre . " y su precio es de: " . $this->precio;
    }

    //Creacion de un metodo estatico
    public static function obtenerProducto(){
        echo "Obteniendo datos del Producto";
    }

    //Metodo para acceder a datos protected
    public function getNombre() : string{
        return $this->nombre;
    }

    public function setNombre(string $nombre){
        $this->nombre = $nombre;
    }
}

//Llamar alas funciones estaticas
echo Producto::obtenerProducto();

//Instanciar mi clase
$producto = new Producto('Table', 200, true, '');
 
 echo $producto->obtenerImagenProducto();

 echo $producto->getNombre();
 $producto->setNombre('Nuevo Nombre');

echo "<pre>";
var_dump($producto);
echo "</pre>";

//Instanciar mi clase
$producto2 = new Producto('Monitor Curvo', 300, true, 'MonitorCurvo.jpg');
echo $producto2->getNombre();
echo $producto2->obtenerImagenProducto();

/*echo "<pre>";
var_dump($producto2);
echo "</pre>";*/

include 'includes/footer.php';