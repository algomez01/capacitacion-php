<?php
   
   class Persona{
    public $nombre;
    public $apellidos;
    public function __construct($nombre,$apellidos){
     $this->nombre=$nombre;
     $this->apellidos=$apellidos;

    }
    public function datos(){
     echo "<br>";
     return "El nombre del dueño es: ".$this->nombre." ".$this->apellidos;
     }
}
$persona1 = new Persona("Paola ","Barros");
echo $persona1->datos();





   abstract class animal{
        public $nom;
        public function __construct($nom)
        {
            $this->nom=$nom;
           
        }

        abstract public function caminar();
        abstract public function andar();
       
    }


    
    class Perro extends animal{
        public function caminar(){
            return "El perro {$this->nom} caminó ";
        }
        public function andar(){
            return "El perro {$this->nom} anda por el parque ";
        }
       
    }
    class Gato extends animal{    
        public function caminar(){
            return "El gato {$this->nom} caminó ";
        }
        public function andar(){
            return "El gato {$this->nom} anda por el parque ";
        }

    }
    echo "<br>";
    $perro= new Perro("pinky");
    echo $perro->caminar();
    echo "<br>";
    $gato= new Gato("Blanca");
    echo $gato->caminar();
    ?>