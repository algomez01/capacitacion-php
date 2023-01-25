<?php
 class Persona{
    public $nombres;
    public $apellidos;

    public function __construct($nombres, $apellidos)
    {
        $this->nombres=$nombres;
        $this->apellidos=$apellidos;
    }

    public function toString(){
        return "Yo me llamo: " . $this->nombres . $this->apellidos;
    }

 }

$personas = new Persona("Luis", "Sarmiento");
  echo $personas->toString(); 
?>