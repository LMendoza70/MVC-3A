<?php
    class usuarioModel{

        private $DBConecction;

        //creamos nuestro metodo contructor, en el vamos a conectar con la base de datos 
        public function __construct()
        {
            //solicito a la clase coneccion 
            require_once("app/config/BDConecction.php");
            //creamos un objeto de la base de datos utilizando nuestro atributo dbconnection
            $this->DBConecction=new BDConecction();
        }

        public function getCredentials($usuario, $password){
            $consulta="SELECT * FROM usuarios WHERE correo_electronico='$usuario' 
            AND contrasena='$password'";
               $coneccion= $this->DBConecction->getConeccion();
            $resultado= $coneccion->query($consulta);
            $respuesta= $resultado->num_rows==1?$resultado->fetch_assoc():false;
            $this->DBConecction->closeConeccion();
            return $respuesta;
        }

    }
?>