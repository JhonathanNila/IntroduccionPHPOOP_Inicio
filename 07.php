<?php

use Transporte as GlobalTransporte;
use TransporteInterfaz as GlobalTransporteInterfaz;

 include 'includes/header.php';

interface TransporteInterfaz {
    public function getInfo() : string;
    public function getRuedas() : int;
}

class Transporte implements TransporteInterfaz {
    public function __construct(protected int $ruedas, protected int $capacidad)
    {
        
    }

    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas "; 
    }

    public function getRuedas() : int {
        return $this -> ruedas;
    }
}

class Automovil extends Transporte implements TransporteInterfaz {
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $color)
    {
        
    }

    public function getInfo() : string {
        return "El transporte Automóvil tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas y es de color " . $this->color; 
    }

    public function getColor() : string {
        return "El color del Auto es " . $this->color;
    }
}

echo "<pre>";
var_dump($transporte = new Transporte(8, 20));
var_dump($auto = new Automovil(4, 7, 'Blanco'));
echo "</pre>";

echo $transporte -> getInfo();
echo "<br>";
echo $auto -> getInfo();
echo "<br>";
echo $auto -> getColor();




include 'includes/footer.php';