<?php
    /**
     * LA CLASE TRATA DE LOS PAISES
     */ 
    class paises
    {
        private $id_pais;
        private $nombre;

        function __construct()
        {
            
        }

        public function editar()
        {

        }

        public function consultar()
        {

        }

        public function setIdpais($id_pais)
        {
            $this->id_pais=$id_pais;
        }

        public function getIdpais()
        {
            return $this->id_pais;
        }

        public function setNombre($nombre)
        {
            $this->nombre=$nombre;
        }

        public function getNombre()
        {
            return $this->nombre;
        }
    }