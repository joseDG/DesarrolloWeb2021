<?php include 'includes/header.php';

//Clase abstracta no se pueden instanciar solo se lo utilizan en las demas clases
abstract class Transporte {
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

class Bicicleta extends Transporte {
    public function getInfo(): string
    {
        return " El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " .$this->capacidad . " personas y NO GASTA GASOLINA ";
    }
}

class Automovil extends Transporte {
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $transmision)
    {
        
    }

    public function getTransmision() : string {
        return $this->transmision;
    }
}

$bicicleta = new Bicicleta(2, 1);
echo $bicicleta->getInfo();
echo $bicicleta->getRuedas();

echo "<hr>";

$automovil = new Automovil(4, 6, 'Manual');
echo $automovil->getInfo();
echo $automovil->getTransmision();

include 'includes/footer.php';