<?php
require_once("gato.php");
$gatito = new gato("1","michi","16 kilos",new persona("per01","jesus","espinoza"),"5 cm");

echo $gatito->getId();
echo "<br>";
echo $gatito->getNombre();
echo "<br>";
echo $gatito->getPeso();
echo "<br>";
echo $gatito->getPersona();
echo "<br>";
echo $gatito->getTamañoBigote();
?>