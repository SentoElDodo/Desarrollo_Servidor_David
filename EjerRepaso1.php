<?php
    class Libro{
        public $autor="Pepe";
        public $año_de_plublicacion="2020";
        public $editorial="LosLibros";
        public $titulo="Yo no Leo";
        public $numero_de_paginas="1290";

        public function mostrar(){
            return $this->autor."<br>".$this->año_de_plublicacion."<br>". $this->editorial."<br>".$this->titulo."<br>".$this->numero_de_paginas;
        }

    }

    /* public function mostrar(){
        return $this->autor;
    } */

    $var=new Libro();
    echo $var->mostrar();
    
?>