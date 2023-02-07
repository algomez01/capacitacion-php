<?php

class Persona
{
    public $nombres;
    public $apellidos;


    public function __construct($nombres, $apellidos)
    {
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
    }

    public function toString(): string
    {
        return "Nombre: " . $this->nombres . $this->apellidos;
    }
}

    $personas = new Persona("Isaac", "Gomez");
    echo $personas->toString();


?>