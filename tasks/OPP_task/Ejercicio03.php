<?php
class Empleado
{
    public string $nombre;
    public float $salario;

    function __construct(string $nombre, float $salario)
    {
        $this->nombre = $nombre;
        $this->salario = $salario;
    }

    function calcularSalarioAnual(): float
    {
        return $this->salario * 12;
    }
}

$empleado = new Empleado("Juan Pérez", 1500.50);
echo "Salario anual de " . $empleado->nombre . ": " . $empleado->calcularSalarioAnual();
