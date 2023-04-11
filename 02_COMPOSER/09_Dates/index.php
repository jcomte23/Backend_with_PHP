<?php

// setlocale(LC_ALL,"es_ES");
// $string = "23/04/1998";
// $date = DateTime::createFromFormat("d/m/Y", $string);
// echo strftime("%A",$date->getTimestamp());

//formas para obtener fecha actual y agregarle 5 dias

//Por procedimientos / estruturadas / funciones
$fechaActual=date_create();
$Intervalo=date_interval_create_from_date_string("5 days");
date_add($fechaActual,$Intervalo);
echo date_format($fechaActual,"Y-m-d");

echo "<br>";

//Procedimiento mediante OOP
$_fechaActual=new DateTime();
$_intervalo=DateInterval::createFromDateString("5 days");
$_fechaActual->add($_intervalo);
echo $_fechaActual->format("Y-m-d");