<?php
class Vehiculo
{
    public $marca;
    public $modelo;

    function __construct($marca, $modelo)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    function describir()
    {
        echo "Marca: " . $this->marca . "<br>";
        echo "Modelo: " . $this->modelo . "<br>";
    }
}

class Coche extends Vehiculo
{
    public $num_puertas;

    function __construct($marca, $modelo, $num_puertas)
    {
        parent::__construct($marca, $modelo);
        $this->num_puertas = $num_puertas;
    }

    function describir()
    {
        parent::describir();
        echo "Número de puertas: " . $this->num_puertas . "<br>";
    }
}

$miCoche = new Coche("Toyota", "Corolla", 4);
$miCoche->describir();
