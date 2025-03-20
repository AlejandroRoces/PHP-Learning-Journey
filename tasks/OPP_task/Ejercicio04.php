<?php
class Configuracion
{
    public readonly string $nombreApp;
    public readonly string $version;

    function __construct(string $nombreApp, string $version)
    {
        $this->nombreApp = $nombreApp;
        $this->version = $version;
    }
}

$config = new Configuracion("MiApp", "1.0");

// $config->nombreApp = "OtraApp";  // ERROR EXPERADO
// $config->version = "2.0";        //ERROR EXPERADO
