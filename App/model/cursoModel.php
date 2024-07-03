<?php
    class cursoModel{
        private $DBConeccion;

        public function __construct()
        {
            require_once("app/config/BDConecction.php");
            $this->DBConeccion=new BDConecction();
        }

        public function getAll(){
            $consulta="SELECT * FROM cursos";
            $coneccion=$this->DBConeccion->getConeccion();
            $resultado=$coneccion->query($consulta);
            $cursos=array();
            while($curso=$resultado->fetch_assoc()){
                $cursos[]=$curso;
            }
            $this->DBConeccion->closeConeccion();
            return $cursos;
        }
    }
?>