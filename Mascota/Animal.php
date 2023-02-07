<?php

abstract class Animal
{

    public $nombres;
    public $dueños = new Persona("Isaac ", "Gomez");

    public function __construct($nombres, $dueños)
    {
        $this->nombres = $nombres;
        $this->dueños = $dueños;
    }
    abstract public function comer();
    abstract public function caminar();
    abstract public function nombreDueño();
}
    class Perro extends Animal{
        public function comer(){
            return "El perro ". $this->nombres. " está comiendo";
        }
        public function caminar(){
            return "El perro ". $this->nombres. " está caminando";
        }
        public function nombreDueño(){
            return "El dueño del perro es: ". $this->nombres;
        }
    }
    class Gato extends Animal{
        public function comer(){
            return "El gato". $this->nombres. "está comiendo";
        }

        public function caminar(){
            return "El gato". $this->nombres. "está caminando";
        }
        public function nombreDueño(){
            return "El dueño del gato es: ". $this->nombres;
        }
}
    
    
?>



