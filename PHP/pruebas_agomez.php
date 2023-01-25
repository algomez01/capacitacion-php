<?php

interface IntMascota{
    public function saludar();
}

abstract class Animal{
    protected $nombres;
    protected $duenio;
    abstract public function caminar();
    abstract public function comer();
    abstract public function presentarDuenio();

    public function __construct($nombres,$duenio)
    {
        $this->nombres = $nombres;
        $this->duenio = $duenio;
    }
}

class Persona{
    private $nombres;
    private $apellidos;
    public function __construct($nombres, $apellidos)
    {
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
    }
    public function __toString()
    {
        return $this->nombres . " " . $this->apellidos;
    }
}

class Perro extends Animal implements IntMascota{
    public function caminar(){
        return $this->nombres . " esta caminando";
    }
    public function comer(){
        return $this->nombres . " esta comiendo";
    }
    public function presentarDuenio(){
        return "Mi dueño es " .  $this->duenio->__toString();
    }
    public function saludar()
    {
        return $this->nombres . " mueve la cola y salta";
    }
}

class Gato extends Animal implements IntMascota{
    public function caminar(){
        return $this->nombres . " sale caminando";
    }
    public function comer(){
        return $this->nombres . " empieza a comer";
    }
    public function presentarDuenio(){
        return "Mi dueño es " .  $this->duenio->__toString();
    }
    public function saludar()
    {
        return $this->nombres . " se acerca y ronronea";
    }
}

$alex = new Persona("Alex", "Gómez");
$tom = new Gato("Tom",$alex);
$max = new Perro("Max",$alex);

echo $tom->caminar();
echo "<br>"; 
echo $tom->comer();
echo "<br>"; 
echo $tom->presentarDuenio();
echo "<br>"; 
echo $tom->saludar();

echo "<br>"; echo "<br>"; 

echo $max->caminar();
echo "<br>"; 
echo $max->comer();
echo "<br>"; 
echo $max->presentarDuenio();
echo "<br>"; 
echo $max->saludar();

?>