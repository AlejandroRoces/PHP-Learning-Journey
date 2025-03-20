<?php
class Direccion
{
    public string $ciudad;

    function __construct(string $ciudad)
    {
        $this->ciudad = $ciudad;
    }
}

class Usuario
{
    private ?Direccion $direccion;

    function __construct(?Direccion $direccion)
    {
        $this->direccion = $direccion;
    }

    public function getDireccion(): ?Direccion
    {
        return $this->direccion;
    }
}

$direccion = new Direccion("Madrid");
$usuario = new Usuario($direccion);

$ciudad = $usuario->getDireccion()?->ciudad;

echo "Ciudad: " . ($ciudad ?? "No disponible");
