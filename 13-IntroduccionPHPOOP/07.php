<?php include 'includes/header.php';

//POLIMORFISMO | CUANDO SON MULTIPLES OBJETOS | CUANDO UNA INTERFAZ ESTA AGREGADO EN VARIAS CLASES
interface TrasnsporteInterfaz {
    public function getInfo() : string;
    public function getRuedas() : int;
}

class Transporte implements TrasnsporteInterfaz {
    public function __construct(protected int $ruedas, protected int $capacidad)
    {
        
    }

    public function getInfo() : string {
        return " El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " .$this->capacidad . " personas ";
    }

    public function getRuedas() : int {
        return $this->ruedas;
    }
}

class Automovil extends Transporte implements TrasnsporteInterfaz {
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $color)
    {
        
    }

    public function getInfo() : string {
        return " El transporte AUTO tiene " . $this->ruedas . " ruedas y una capacidad de " .$this->capacidad . " personas y tiene el color" .$this->color;
    }

    //No es necesario agregarlo a TransporteInterfaz.
    //Puede terner sus metodos o funciones independientemente.
    public function getColor() : string {
        return "El color es " . $this->color;
    }
}

echo "<pre>";
var_dump($transporte = new Transporte(8, 20));
var_dump($automovil = new Automovil(4, 5, 'Azul'));

echo $transporte->getInfo();
echo "<br>";
echo $automovil->getInfo();

echo $automovil->getColor();

echo "</pre>";

include 'includes/footer.php';