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

    public function getnombre() {
        return $this->nombre;
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
            if (($nombre == $temporal[0]) && ($pass == $temporal[1])) {
                $salida = true;
            }
        }
        return $salida;
    }
    public function perfil($nombre, $pass) {
        $salida="";
        $this->leerfichero();
        
        foreach ($this->array as $value) {
            $temporal = explode(" ", $value);
            if (($nombre == $temporal[0]) && ($pass == $temporal[1])) {
                $salida = $temporal[2];
            }
        }
        return $salida;
    }
    
}
 function validar_requerido(string $texto) {
        $salida = true;
        if (trim($texto) == '') {
            $salida = false;
        }
        return $salida;
    }

?>