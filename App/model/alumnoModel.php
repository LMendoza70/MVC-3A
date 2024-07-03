<?php
    class alumnoModel{
        //atributo para llamar a la base de datos y manipularla 
        private $DBConecction;

        //creamos nuestro metodo contructor, en el vamos a conectar con la base de datos 
        public function __construct()
        {
            //solicito a la clase coneccion 
            require_once("app/config/BDConecction.php");
            //creamos un objeto de la base de datos utilizando nuestro atributo dbconnection
            $this->DBConecction=new BDConecction();
        }

        public function getAll(){
            //creamos la consulta para traer a todos los alumnos
            $consulta="SELECT * FROM alumnos";
            //abrimos la coneccion a la base de datos
            $coneccion=$this->DBConecction->getConeccion();
            //ejecutamos la consulta
            $resultado= $coneccion->query($consulta);
            //preparamos la informacion para arrojarla 
            //creamos un arreglo para guardar los registros de los alumnos
            $alumnos=array();
            //vamos a obtener los registros de uno por uno y guardarlos en una variable
            while($alumno=$resultado->fetch_assoc()){
                $alumnos[]=$alumno;
            }
            //una vez que tenemos los datos de los alumnos vamos a proceder a cerrar la coneccion 
            $this->DBConecction->closeConeccion();
            //retornamos el resultado (lista de alumnos )
            return $alumnos;
        }

        public function getById($id){
            //paso 1: Creamos la consulta
            $consulta="SELECT * FROM alumnos WHERE id_alumno=". $id;
            //paso 2: conectamos con la base de datos
            $coneccion = $this->DBConecction->getConeccion();
            //paso 3: ejecutamos la consulta
            $resultado=$coneccion->query($consulta);
            //paso 4 : Preparamos la respuesta
            //verificamos que el id traiga alguna respuesta
            if($resultado && $resultado->num_rows>0){
                $alumno=$resultado->fetch_assoc();
            }else{
                $alumno=false;
            }
            //paso 5 : Cerramos la coneccion
            $this->DBConecction->closeConeccion();
            //paso 6: enviamos resultados
            return $alumno;
        }

        public function delete($id){
            //paso1 
            $consulta = "DELETE FROM alumnos WHERE id_alumno = ". $id;
            //paso 2
            $coneccion = $this->DBConecction->getConeccion();
            //paso 3
            $resultado = $coneccion->query($consulta);
            //paso 4
            if($resultado){
                $respuesta=true;
            }else{
                $respuesta=false;
            }
            //paso 5
            $this->DBConecction->closeConeccion();
            //paso 6
            return $respuesta;
        }
        
    }
?>