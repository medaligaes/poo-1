<?php
require_once("animal.php");
require_once("persona.php");
class perro extends animal{
    private $tamaño_Cola;

    public function __construct($id,$nombre,$peso,$persona,$tamaño_Cola){
        parent::__construct($id,$nombre,$peso,$persona);
        $this->tamaño_Cola=$tamaño_Cola;
    }
    public function getTamañoCola(){
        return $this->tamaño_Cola;
    }
    public function setTamañoCola($tamaño_Cola){
        $this->tamaño_Cola=$tamaño_Cola;
    }
}