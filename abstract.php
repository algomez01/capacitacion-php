<?php

abstract class Animal 
{
    public $nombres;
    public $dueños = new Persona("Luis","Sarmiento");

   public function __construct($nombres, $dueños)
   {
     $this->nombres = $nombres;
     $this->dueños = $dueños;
   }

    abstract public function comer();
    abstract public function andar();
    abstract public function presentaNombreDueño();
}

class Perro extends Animal{
    public function comer()
    {
        return "El perro" . $this->nombres . "come";
    }

    public function andar(){
        return "El perro" . $this->nombres . "camina";
    }

    public function presentaNombreDueño()
    {
        return "El dueño del perro es:" . $this->dueños;
    }
}

class Gato extends Animal
{
    public function comer()
    {
        return "El gato" . $this->nombres . "come";
    }

    public function andar(){
        return "El gato" . $this->nombres . "camina";
    }

    public function presentaNombreDueño()
    {
        return "El dueño del gato es:" . $this->dueños;
    }
}

$perro = new Perro("Toby", $dueños);
echo $perro->comer(); 
echo "<br>";
echo $perro->andar();
echo "<br>";
echo $perro->presentaNombreDueño();
echo "<br>";

$gato = new Gato("Cleo", $dueños);
echo $gato->comer();
echo "<br>";
echo $gato->andar();
echo "<br>";
echo $gato->presentaNombreDueño();
echo "<br>";

?>