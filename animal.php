<?php
class animal{
    private $id;
    private $nombre;
    private $peso;
    private $persona;

    public function __construct($id,$nombre,$peso,$persona){
        $this->id=$id;
        $this->nombre=$nombre;
        $this->peso=$peso;
        $this->persona=$persona;
    }
    public function setId($id){
        $this->id=$id;
    }
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function getId(){
        return $this->id;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getPeso(){
        return $this->peso;
    }
    public function setPeso($peso){
        $this->peso=$peso;
    }
    public function setPersona($persona){
        $this->persona=$persona;
    }
    public function getPersona(){
        return $this->persona->nombre;
    }
public function getapellido(){
    return $this->apellido
}
