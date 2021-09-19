<?php
class curriculum{

    public $id;
    public $nombre;
    public $apellido;
    public $fechanac;
    public $correo;
    public $direccion;
    public $nacionalidad;
    public $deptonac;
    public $cel; 
    public $profesion;
    public $pretsalario;

    public function __construct($id, $nombre, $apellido, $fechanac, $correo, 
    $direccion, $nacionalidad, $deptonac, $cel, $profesion, $pretsalario) //constructor para resivir informacion
    {     
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->fechanac = $fechanac;
        $this->correo = $correo;
        $this->direccion = $direccion; 
        $this->nacionalidad = $nacionalidad;
        $this->deptonac = $deptonac;
        $this->cel  = $cel;
        $this->profesion = $profesion;
        $this->pretsalario = $pretsalario;
    }


    //Consultar datos de la DB 
    public static function consultar(){
        $listaCurriculum=[];
        $conectarDB=Conectar_Database::crearinstancia();
        $sql = $conectarDB->query("SELECT * FROM persona");

        foreach($sql->fetchAll() as $curriculum){
            $listaCurriculum[] = new Curriculum($curriculum['id'], $curriculum['nombre'],$curriculum['apellido'],
            $curriculum['fechanac'], $curriculum['correo'], $curriculum['direccion'],$curriculum['nacionalidad'],
            $curriculum['deptonac'],$curriculum['cel'],$curriculum['profesion'],$curriculum['pretsalario']);
        }  
        return $listaCurriculum;
    }




    //Agregar datos a la DB
    public  static function crear($id, $nombre, $apellido, $fechnac, $correo, 
    $direccion, $nacionalidad, $deptonac, $cel, $profesion, $pretsalario ){
    $conectarDB=Conectar_Database::crearinstancia();

    $sql = $conectarDB->prepare(
    "INSERT INTO persona(id, nombre, apellido, fechanac, correo, direccion, nacionalidad, deptonac, cel, profesion, 
    pretsalario) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
    $sql->execute(array($id, $nombre, $apellido, $fechnac, $correo, $direccion, $nacionalidad, $deptonac, $cel, 
    $profesion, $pretsalario));

    }

    //METODO PARA ELIMINAR
    public static function eliminar($id){
        $conectarDB=Conectar_Database::crearinstancia();
        $sql = $conectarDB->prepare("DELETE FROM persona WHERE id=?");
        $sql->execute(array($id));
    }

    //METODO PARA BUSCAR
    public static function buscar($id){
        $conectarDB=Conectar_Database::crearinstancia();
        $sql = $conectarDB->prepare("SELECT * FROM persona WHERE id=?");
        $sql->execute(array($id));
        $curriculum= $sql->fetch();
        return new Curriculum($curriculum['id'], $curriculum['nombre'],$curriculum['apellido'],
        $curriculum['fechanac'], $curriculum['correo'], $curriculum['direccion'],$curriculum['nacionalidad'],
        $curriculum['deptonac'],$curriculum['cel'],$curriculum['profesion'],$curriculum['pretsalario']);
    }


    //METODO PARA EDITAR
    public  static function editar($id, $nombre, $apellido, $fechnac, $correo, 
    $direccion, $nacionalidad, $deptonac, $cel, $profesion, $pretsalario){
    
    $conectarDB=Conectar_Database::crearinstancia();
    $sql = $conectarDB->prepare(
    "UPDATE persona SET nombre=?, apellido=?, fechanac=?, correo=?, direccion=?, nacionalidad=?, deptonac=?,
    cel=?, profesion=?, pretsalario=? WHERE id=?" );
    $sql->execute(array($nombre, $apellido, $fechnac, $correo, $direccion, $nacionalidad, $deptonac, $cel, 
    $profesion, $pretsalario,$id ));

    }

}

?>