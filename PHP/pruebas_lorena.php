<?php
    abstract class animales{
        public $nombre;
       public $dueño;

        public function __construct($nombre,$dueño)
        {
            $this->nombre=$nombre;
            $this->dueño=$dueño;
        }

        abstract public function caminar();

    }


    //Clase hija
    class Perro extends animales{
        public function caminar(){
            return "El perro {$this->nombre} caminó ";
        }
         public function andar(){
            return "El perro {$this->nombre} anda por la casa ";
        }
    }
    class Gato extends animales implements IntMascota{    
        public function caminar(){
            return "El gato {$this->nombre} caminó ";
        }
         public function andar(){
            return "El gato {$this->nombre} anda por la casa ";
        }

        public function saluda(){
            echo "saludo";
        }
    }
    
class Persona{
       public $nombre;
  
       public function __construct($nombre){
        $this->nombre=$nombre;
        

       }
       public function presentacion(){
        echo "<br>";
        return "El dueño es: ".$this->nombre ;
        }
   }
   
interface IntMascota {
        public function saluda();

    }
   




    $persona1 = new Persona("Lorena");
    echo $persona1->presentacion();
   $perro= new Perro("firulais",$persona1);
    echo $perro->caminar();
    echo "<br>";
    $gato= new Gato("Michi",$persona1);
    echo $gato->andar();
    echo "<br>";
    $perro= new Perro("firulais",$persona1);
    echo $perro->andar();

    echo "<br>";
    $gato= new Gato("Michi",$persona1);
    echo $gato->caminar();



 

?>
