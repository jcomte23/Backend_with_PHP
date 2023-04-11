<?php
//diferencia de tiempo
$fechaActual=new DateTime();
$fechaNacimiento=new DateTime("1998-04-23");
$intervalo=$fechaNacimiento->diff($fechaActual);
echo $intervalo->format("%y years with %d days");

echo "<br>";

//crear fecha desde un formato dato
$date=DateTime::createFromFormat("l j F Y","Sunday 17 April 2022");
echo $date->format("Y-m-d H:i:s");

echo "<br>";

//Modificar una fecha
$_date=new DateTime();
$_date->modify("+1 day +2 months");
echo $_date->format("Y-m-d H:i:s");