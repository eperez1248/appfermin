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
        if (!(file_exists($this->nombre))){
            fopen($this->nombre, "w");
        }   
    }
    public function agregardatos($cadena){
        if (file_exists($this->nombre)){
            file_put_contentes($this->nombre,$cadena);
        }
    }
}

$mifichero = new fitexto('dos.txt');
$mifichero->crearfichero();

//$dato = $mifichero->leerfichero();
//var_dump($dato);
