<?php include 'includes/header.php';

//Creacion de Interfacez | La interfaz es como una forma que le da a la clase
interface TrasnsporteInterfaz {
    public function getInfo() : string;
    public function getRuedas() : int;
}

class Transporte implements TrasnsporteInterfaz{
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

include 'includes/footer.php';