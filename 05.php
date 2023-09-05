<?php include 'includes/header.php';

abstract class Transporte {
    public function __construct(protected int $ruedas, protected int $capacidad,)
    {
        
    }

    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas "; 
    }
}

class Bicicleta extends Transporte {
    public function getInformacion() : string {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas y NO GASTA GASOLINA!"; 
    }
}

class Auto extends Transporte {
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $transmision)
    {
        
    }
    public function getTransmision() : string {
        return $this -> transmision;
    }
}



echo "<hr>";

$bicicleta = new Bicicleta(2, 1);
echo $bicicleta -> getInformacion();
echo "<hr>";

$auto = new Auto(4, 7, 'Autómatico');
echo $auto -> getInfo();
echo $auto -> getTransmision();
echo "<hr>";

include 'includes/footer.php';