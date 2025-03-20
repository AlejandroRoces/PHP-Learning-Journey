<?php
class Libro
{
    public $titulo;
    public $autor;
    public $anio_publicacion;


    function __construct($titulo, $autor, $anio_publicacion)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anio_publicacion = $anio_publicacion;
    }

    function mostrarInfo()
    {
        echo "Título: " . $this->titulo . "<br>";
        echo "Autor: " . $this->autor . "<br>";
        echo "Año de Publicación: " . $this->anio_publicacion . "<br><br>";
    }
}

$libro1 = new Libro("1984", "George Orwell", 1949);
$libro2 = new Libro("El Gran Gatsby", "F. Scott Fitzgerald", 1925);

$libro1->mostrarInfo();
$libro2->mostrarInfo();
