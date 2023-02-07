<?php
    interface IntMascota{
    public function saluda();
    }

    class Perro implements IntMascota{
        public function saluda()
        {
         echo "Mueve la cola";
        }
    }

    class Gato implements IntMascota{
        public function saluda()
        {
         echo "Se frota en la pierna";
        }
    }

    $perro = new Perro("Toby", $dueños);
    echo $perro->saluda();
    echo "<br>";

    $gato = new Gato("Cleo", $dueños);
    echo $gato->saluda();
    echo "<br>";

?>