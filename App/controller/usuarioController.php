<?php
    include_once("app/model/usuarioModel.php");
    class usuarioController{
        private $usuario;

        public function callFormLogin(){
            $vista="app/view/admin/usuarios/formLoginView.php";
            session_start();
            if(isset($_SESSION['logedin']) && $_SESSION['logedin']==true){
                include_once("app/view/admin/plantillaView.php");
            }else{
                include_once("app/view/admin/plantilla2View.php");
            }
            
        }

        public function logedOut(){
            session_start();
            $_SESSION['logedin']=false;
            header("location:http://localhost/php-3a");
        }

        public function login(){
            
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $user=$_POST['correo'];
                $password=$_POST['password'];
                $this->usuario=new usuarioModel();
                $respuesta=$this->usuario->getCredentials($user,$password);
                include_once('app/controller/alumnoController.php');
                $alumno=new alumnoController();
                if($respuesta){
                    session_start();
                    $_SESSION['logedin']=true;
                    $_SESSION['nombre']=$respuesta['nombre']. " " . $respuesta['apellido'];
                    $alumno->index();
                }else{
                    $vista="app/view/admin/errorLoginView.php";
                    include_once("app/view/admin/plantilla2View.php");
                }
            }
            
        }

    }
?>