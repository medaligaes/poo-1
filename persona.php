<?php
class persona{
    public $id_persona;
    public $nombre;
    public $apellidos;

    public function __construct($id_persona,$nombre,$apellidos){
        $this->id_persona=$id_persona;
        $this->nombre=$nombre;
        $this->apellidos=$apellidos;
    }
    public function getIdPersona(){
        return $this->id_persona;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellidos(){
        return $this->apellidos;
    }
    public function setIdPersona($id_persona){
        $this->id_persona=$id_persona;
    }
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function setApellidos($apellidos){
        $this->apellidos=$apellidos;
    }
}