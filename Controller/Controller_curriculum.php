<?php
 
include_once("Model/curriculum.php"); //clase para agregar un nuevo curriculum
include_once("Model/ConectarDB.php");
Conectar_Database::crearinstancia();
            


    class ControllerCurriculum{
        public function inicio (){

            $curriculums=curriculum::consultar();
            include_once("View/curriculum/inicio.php");           
        }


        //FUNCIONA PARA CREAR UN NUEVO CURRICULUM
        public function crear (){
            if($_POST){
                print_r($_POST);
                $id = $_POST['id'];
                $nombre = $_POST['nombre'];
                $apellido= $_POST['apellido'];
                $fechnac = $_POST['fechnac'];
                $correo = $_POST['correo'];
                $direccion = $_POST['direccion'];
                $nacionalidad = $_POST['nacionalidad'];
                $deptonac = $_POST['deptonac'];
                $cel = $_POST['cel'];
                $profesion = $_POST['profesion'];
                $pretsalario = $_POST['pretsalario'];
                curriculum::crear($id, $nombre, $apellido, $fechnac, $correo, $direccion, $nacionalidad, $deptonac, $cel, 
                $profesion, $pretsalario);
                header("Location:./?controlador=curriculum&accion=inicio"); //redireccion de pagina
                
                $campo=array();
                if($id =="" || strlen($id)<5){
                    array_push($campo,"Numero de caracteres insuficiente");
                }
            }
            
            
            include_once("View/curriculum/crear.php"); 
        }

        //EDITAR CURRICULUM
        public function editar (){

           

            if($_POST){
                print_r($_POST); 
                $id = $_POST['id'];
                $nombre = $_POST['nombre'];
                $apellido= $_POST['apellido'];
                $fechnac = $_POST['fechnac'];
                $correo = $_POST['correo'];
                $direccion = $_POST['direccion'];
                $nacionalidad = $_POST['nacionalidad'];
                $deptonac = $_POST['deptonac'];
                $cel = $_POST['cel'];
                $profesion = $_POST['profesion'];
                $pretsalario = $_POST['pretsalario'];
                curriculum::editar($id, $nombre, $apellido, $fechnac, $correo, $direccion, $nacionalidad, $deptonac, $cel, 
                $profesion, $pretsalario);
                header("Location:./?controlador=curriculum&accion=inicio");
            }
            
            $id=$_GET['id'];
            $curriculum=(curriculum::buscar ($id));
            include_once("View/curriculum/editar.php");   
        }

        //BORRAR UN CURRICULUM
        public function eliminar(){
            $id=$_GET['id'];
            curriculum::eliminar($id);
            header("Location:./?controlador=curriculum&accion=inicio"); //redireccion de pagina
        }

    }   

 
?>