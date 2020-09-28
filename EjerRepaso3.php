<?php
    class CuentaBancaria{
        public $titular;
        public $cantidad;
        public $añadir;

        public function __construct($titular,$cantidad=0){
            $this->titular=$titular;
            $this->cantidad=$cantidad;
        }
        
        public function ingreso($dineroIngresado){
            if($dineroIngresado<=0){
                $this->muestra("No se permite el ingreso");
            }else{
                $this->cantidad=$this->cantidad+$dineroIngresado;
                $this->muestra("La cantidad es ".$this->cantidad);
            }
        }

        public function muestra($mensaje){
            echo "La cuenta de ".$this->titular.":   tiene ".$mensaje;
        }

        public function retirar($dineroRetirado){
            $this->cantidad=$this->cantidad+$dineroRetirado;
            if($this->cantidad<="0"){
                $this->muestra("La cuenta se queda a 0");
            }else{
                $this->cantidad=$this->cantidad+$dineroRetirado;
                $this->muestra("La cantidad es ".$this->cantidad);
            }
        }
                //Falta retirar hacer la operacion primero para quitar el dinero y luego el If
        
    }

        

    

    $cuenta=new CuentaBancaria("Pepe");
    echo $cuenta->ingreso("100");
    echo "<br>";
    echo "<br>";
    echo $cuenta->ingreso("100");
    echo "<br>";
    echo "<br>";
    echo $cuenta->retirar("-1000");

    
?>