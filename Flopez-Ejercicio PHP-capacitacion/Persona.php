<?php 
echo "Practica de Herencia - Capacitacion Lopez Freya";
echo "<br>";
echo "<br>";

class Persona{
    public $nombres;
    public $apellidos;

    public function __construct ($nombres, $apellidos){
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
    }
    public function presentaciondueno(){
        return "Nombres:{$this->nombres} -- Apellidos: {$this->apellidos}";
    }
    
}
    abstract class Animal{
    public $nombre;
    public $dueno;

    public function __construct ($nombre, $dueno){
        $this->nombre = $nombre;
        $this->dueno = $dueno; 
    }

    abstract public function comer();
    abstract public function andar();
    abstract public function presentanombrededueno();

}

class Perro extends Animal implements IntMascota{
    public function comer(){
        return "El perrito {$this->nombre} comio su comida 🐶";
    }
    public function andar(){
        return "El perrito {$this->nombre} anduvo 🐶";
    }
    public function saluda(){
        echo "El perrito {$this->nombre} Saluda 🐶";
    }
    public function presentanombrededueno(){
        return "El dueño del perrito : {$this->nombre} 🐶, Se llama: {$this->dueno}";
    }
}

class Gato extends Animal implements IntMascota{
    public function comer(){
        return "El Gatito {$this->nombre} comio su comida 😺";
    }
    public function andar(){
        return "El Gatito {$this->nombre} anduvo😺";
    }
    public function saluda(){
        echo "El Gatito {$this->nombre} Saluda 😺";
    }
    public function presentanombrededueno(){
        return "El dueño del Gatito : {$this->nombre}😺 , Se llama: {$this->dueno}";
    }
    
}
/*Interfaz*/
interface IntMascota{
    public function saluda ();
}
    $persona1 = new Persona("Freya Milena", "Lopez");
    echo $persona1->presentaciondueno();
    echo "<br>";
    echo "<br>";

    $perro1 = new Perro("Mokka", "Freya Lopez");
    echo $perro1->comer();
    echo "<br>";
    echo $perro1->andar();
    echo "<br>";
    echo $perro1->presentanombrededueno();
    echo "<br>";
    echo $perro1->saluda();
    echo "<br>";
    echo "<br>";

    $gato1 = new Gato("Mikka", "Freya Lopez");
    echo $gato1->comer();
    echo "<br>";
    echo $gato1->andar();
    echo "<br>";
    echo $gato1->presentanombrededueno();
    echo "<br>";
    echo $gato1->saluda();
    echo "<br>";
    echo "<br>";

?>
