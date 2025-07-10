<?php

class empleado {

    private $nombre;
    private $apellidos;
    private $edad;

    public function __construct($nombre, $apellidos, $edad) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
    }

    public function getnombre() {
        return $this->nombre;
    }

    public function getapellidos() {
        return $this->apellidos;
    }

    public function getedad() {
        return $this->edad;
    }

    public function setnombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setapellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function setedad($edad) {
        $this->edad = $edad;
    }
}   
    $pepe = new empleado("pepe","sanchez","99");
    echo "Este empleado se llama ".$pepe->getnombre();


?>
