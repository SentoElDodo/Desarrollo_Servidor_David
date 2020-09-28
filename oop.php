<?php
    class coche{
        public $color="rojo";
        public $marca="ford";
        public $modelo="fiesta";

        public function __construct($color,$marca,$modelo=""){
            $this->color=$color;
            $this->marca=$marca;
            $this->modelo=$modelo;
        }

        public function setColor($color){
            if($color!="amarillo"){
                $this->color=$color;
            }else{
                $this->color="No valido";
            }
        }

        public function getColor(){
            return $this->color;
        }

        public function mostrar(){
            return $this->modelo." ".$this->marca." ".$this->color;
        }

    }

    $var=new coche("azul", "opel");
    $var->setColor("naranja");
    echo $var->mostrar();

    echo "<br>";

    $var2=new coche("verde", "citroen", "c3");
    echo $var2->mostrar();

    echo "<br>";

    echo $var->color;

?>