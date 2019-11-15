<?php
require_once("animal.php");
require_once("persona.php");
class gato extends animal{
    private $tamaño_bigote;

    public function __construct($id,$nombre,$peso,$persona,$tamaño_bigote){
        parent::__construct($id,$nombre,$peso,$persona);
        $this->tamaño_bigote=$tamaño_bigote;
    }
    public function getTamañoBigote(){
        return $this->tamaño_bigote;
    }
    public function setTamañoBigote($tamaño_bigote){
        $this->tamaño_bigote=$tamaño_bigote;
    }
}