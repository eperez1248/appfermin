<?php

class Producto {

    protected $id;
    private $titulo;
    private $precio;
    private $nombreAutor;
    private $apellidosAutor;

    function __construct($id, $titulo, $precio, $nombreAutor, $apellidosAutor) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->precio = $precio;
        $this->nombreAutor = $nombreAutor;
        $this->apellidosAutor = $apellidosAutor;
    }

    public function getnombreAutor() {
        return $this->nombreAutor;
    }

    public function gettitulo() {
        return $this->titulo;
    }

    public function getprecio() {
        return $this->precio;
    }
    public function getResumen() {
        $resumen = "<p> Titulo: ".$this->gettitulo().", precio:".$this->getprecio();
        $resumen = $resumen.", Nombre Autor :". $this->nombreAutor.", Apellido autor: ".$this->apellidosAutor;
        return $resumen;
    }
}

class libro extends Producto {

    private $numpaginas;

    function __construct($id, $titulo, $precio, $nombreAutor, $apellidosAutor, $numpaginas) {
        parent::__construct($id, $titulo, $precio, $nombreAutor, $apellidosAutor, $numpaginas);
        $this->numpaginas = $numpaginas;
    }
    public function getNumpaginas() {
        return $this->numpaginas; 
    }
    public function getResumen() {
        $resumen = parent::getResumen();
        $resumen = $resumen.", Num paginas ". $this->getNumpaginas();
        return $resumen;
    }
}
$libro1 = new libro(1, "Don Quijote", 30, "Miguel", "de Cervantes Saavedra", 300);
//echo $libro1->getNumpaginas();
echo $libro1->getResumen();
