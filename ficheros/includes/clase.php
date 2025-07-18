<?php
class fitexto {

    private $nombre;
    private $cadena;
    private $array;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function setnombre($nombre) {
        $this->nombre = $nombre;
    }

    public function leerfichero() {
        $this->array = file($this->nombre);
        return $this->array;
    }

    public function crearfichero() {
        if (!(file_exists($this->nombre))) {
            fopen($this->nombre, "w");
        }
    }

    public function agregardatos($cadena) {
        if (file_exists($this->nombre)) {
            $cadena = $cadena . "\n"; //cada cadena es una linea
            file_put_contents($this->nombre, $cadena, FILE_APPEND);
        }
    }

    public function buscar($nombre, $pass) {
        $this->leerfichero();
        $salida = false;
        foreach ($this->array as $value) {
            $temporal = explode(" ", $value);
            //echo "<p> Primer valor: " . $temporal[0] . "</p>";
            //echo "<p> Segundo valor: " . $temporal[1] . "</p>";
            if (($nombre == $temporal[0])&&($pass == $temporal[1])){
                $salida = true;
            }
        }
        return $salida;
    }
}