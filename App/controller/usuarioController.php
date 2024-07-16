<?php
    include_once("app/model/usuarioModel.php");
    class usuarioController{
        private $usuario;

        public function callFormLogin(){
            $vista="app/view/admin/usuarios/formLoginView.php";
            include_once("app/view/admin/plantillaView.php");
        }

        public function login(){
            
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $user=$_POST['correo'];
                $password=$_POST['password'];
                echo "entro ". $user ."  ". $password;
                $this->usuario=new usuarioModel();
                $respuesta=$this->usuario->getCredentials($user,$password);
                if($respuesta){
                    $vista="app/view/admin/alumnos/alumnoIndexView.php";
                    include_once("app/view/admin/plantillaView.php");
                }else{
                    $vista="app/view/admin/errorLoginView.php";
                    include_once("app/view/admin/plantilla2View.php");
                }
            }
            
        }

    }
?>