<?php

    /* Crear una clase que tenga 5 atributos y 3 métodos */
    class vehiculo{
        private $marca;
        private $modelo;
        private $patente;
        private $ejes;
        private $enMarcha;

        /* 
        CONSTRUCTOR
        */

        function __construct($marca, $modelo, $patente, $ejes){
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->patente = $patente;
            $this->ejes = $ejes;
            $this->enMarcha = false;
        }

        /*
        GETTERS Y SETTERS
        */ 

        /**
         * Get the value of marca
         */ 
        public function getMarca()
        {
                return $this->marca;
        }

        /**
         * Set the value of marca
         *
         * @return  self
         */ 
        public function setMarca($marca)
        {
                $this->marca = $marca;

                return $this;
        }

        /**
         * Get the value of modelo
         */ 
        public function getModelo()
        {
                return $this->modelo;
        }

        /**
         * Set the value of modelo
         *
         * @return  self
         */ 
        public function setModelo($modelo)
        {
                $this->modelo = $modelo;

                return $this;
        }

        /**
         * Get the value of patente
         */ 
        public function getPatente()
        {
                return $this->patente;
        }

        /**
         * Set the value of patente
         *
         * @return  self
         */ 
        public function setPatente($patente)
        {
                $this->patente = $patente;

                return $this;
        }


        /**
         * Get the value of ejes
         */ 
        public function getEjes()
        {
                return $this->ejes;
        }

        /**
         * Set the value of ejes
         *
         * @return  self
         */ 
        public function setEjes($ejes)
        {
                $this->ejes = $ejes;

                return $this;
        }


                
        /* METODOS DE LA CLASE*/
        
        public function arrancar(){
                $this->enMarcha = true;
                echo "<p>El vehículo arrancó</p>";
            }

        public function detener(){
                $this->enMarcha = false;
                echo "<p>El vehículo se detuvo</p>";
        }

        public function cambiarPatente($nuevaPatente){
                $this->setPatente($nuevaPatente);
                echo "<p>La nueva patente es ". $this->getPatente() ."</p>";
        }
    
    }


?>