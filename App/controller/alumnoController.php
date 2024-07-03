<?php
    //incluir en mi archivo la informacion o el documento de alumnoModel
    include_once("app/model/alumnoModel.php");
    class alumnoController{
        //creamos un atributo que posteriormente instanciaremso como modelo de un alumno
        private $alumnomodel;

        //creamos nuestro metodo index 
        public function index(){
            //inicializamos el alumno model
            $this->alumnomodel=new alumnoModel();
            //declaramos un variable que me permita alamacenar todos los datos de un elemnto de
            //la tabla alumnos 
            $datos=$this->alumnomodel->getAll();
            //pasamos esos datos a la vista, es decir a la pagina que va a visualizar el usuario final 
            $vista="app/view/admin/alumnos/alumnoIndexView.php";
            include_once("app/view/admin/plantillaView.php");
        }

        public function delete($id){

        }
    }
?>