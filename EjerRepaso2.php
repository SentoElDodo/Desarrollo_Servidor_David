<?php
    class ciudad{
        public $nombre="Xativa";
        public $provincia="Valencia";
        
        public function __construct($nombre,$provincia){
            $this->nombre=$nombre;
            $this->provincia=$provincia;
        }

        public function mostrar(){
            return "La ciudad ".$this->nombre." esta en la provincia ".$this->provincia;
        }

    }

    /* public function mostrar(){
        return $this->autor;
    } */


    /* MANERA BASICA */
    $var=new ciudad("Catarroja","Valencia");
    echo $var->mostrar();
    echo "<br>";
    echo "<br>";

    $var2=new ciudad("Carcaixent","Valencia");
    echo $var2->mostrar();
    echo "<br>";
    echo "<br>";

    $var3=new ciudad("Alzira","Valencia");
    echo $var3->mostrar();

    /* MANERA COMPLICADA */
        
    
?>