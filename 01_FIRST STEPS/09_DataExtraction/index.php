<?php

echo "extracto de un caracter en especial<br>";
$data="datos generales";
echo $data[0];
echo "<br>";

echo "<br>";
echo "extracto varios caracteres mediante una funcion php<br>";
$post = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ullam omnis reprehenderit debitis quos voluptatum odit eos, doloremque aperiam vel illo voluptate? Accusantium, velit aliquam quasi totam architecto libero nobis!';
$extract = substr($post,0,20);
echo $extract;
echo "<br>";

echo "<br>";
echo "Pasar de texto a un array directamente<br>";
$data2="javaScript, PHP, laravel";
$tags=explode(", ",$data2);
echo "<pre>";
var_dump($tags);
echo "</pre>";
echo $tags[0];
echo "<br>";

echo "<br>";
echo "Pasar de un array a un string<br>";
$courses=['javaScript','PHP','Laravel'];
echo $dataConvetString=implode(', ',$courses);
echo "<br>";

echo "<br>";
echo "Eliminar espacios de inecesarios de un string<br>";
$course="    Curso de PHP    ";
echo trim($course);