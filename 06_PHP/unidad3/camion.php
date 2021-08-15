<?php

    require_once('vehiculo.php');

    class camion extends vehiculo {
        private $capacidadCarga;
        
        function __construct($marca, $modelo, $patente, $ejes, $capacidadCarga){
            parent::__construct($marca, $modelo, $patente, $ejes);
            $this->capacidadCarga = $capacidadCarga;

        }

        
        public function cuantoCarga(){
            echo "<p>Este vehiculo tiene una capacidad de ". $this->capacidadCarga . " toneladas</p>";       
        }
    }

?>