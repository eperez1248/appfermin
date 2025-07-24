<?php

class fitexto {

    private $nombre;
    private $array;

    public function __construct($nombre) {
        $this->nombre = $nombre;
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

    public function leerfichero() {
        $this->array = file($this->nombre);
        return $this->array;
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
     public function perfil($nombre) {
        $this->leerfichero();
        $salida="";
        foreach ($this->array as $value) {
            $temporal = explode(" ", $value);
            if (($nombre == $temporal[0])) {
                $salida = $temporal[2];
            }
        }
        return $salida;
    }
    
         public function datosusuario($usuario) {
        $this->leerfichero();
        $salida[0] = "";
        
        foreach ($this->array as $value) {
            $temporal = explode(" ", $value);
            if (($usuario == $temporal[0])) {
                $salida[] = $temporal[1]." ".$temporal[2] ;
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
