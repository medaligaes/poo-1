<?php
require_once("perro.php");
$gatito = new perro("1","doky","35 kilos",new persona("per01","jesus","espinoza"),"10 cm");

echo $gatito->getId();
echo "<br>";
echo $gatito->getNombre();
echo "<br>";
echo $gatito->getPeso();
echo "<br>";
echo $gatito->getPersona();
echo "<br>";
echo $gatito->getTamañoCola();
?>