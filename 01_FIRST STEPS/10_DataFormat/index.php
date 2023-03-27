<?php
$data="pHp es Un LENGUAJE";
echo "<h3>Texto base</h3>";
echo $data;
echo "<br>";

echo "<h3>Pasa un string a minuscula</h3>";
echo strtolower($data);
echo "<br>";

echo "<h3>Pasa un string a mayuscula</h3>";
echo strtoupper($data);
echo "<br>";

echo "<h3>Pasar la primer letra de un string a mayuscula</h3>";
echo ucfirst($data);
echo "<br>";

echo "<h3>Pasar la primer letra de un string a minuscula</h3>";
echo lcfirst($data);
echo "<br>";

echo "<h3>Reemplazar espacios por guiones</h3>";
$slug=str_replace(' ','-',$data);
echo strtolower($slug);
echo "<br>";

echo "<h3>modificar el codigo llenado el espacio indicado con el dato que le demos </h3>";
$code=16;
echo str_pad($code,8,'#',STR_PAD_BOTH) ;
echo "<br>";

echo "<h3>limpieza de codigo,elimina la etiquetas de un string</h3>";
$text="<h3>Hola mundo</h3>";
echo strip_tags($text);
echo "<br>";

#ELEMENTOS MONOBYTES Y MULTIBYTES.
echo "<h3>ELEMENTOS MONOBYTES Y MULTIBYTES.</h3>";
$text_uno = "PHP es UN LENGUAJE, año 2020, programación";
$text_dos = "PHP es UN LENGUAJE, año 2020, programación";
echo strtoupper($text_uno);//monobye
echo "<br>";
//Al colocar mb_nombrefuncion con esto formateamos correctamente.
echo mb_strtoupper($text_dos);//multibyte