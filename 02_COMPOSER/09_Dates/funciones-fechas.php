<?php

//establezer la zona horaria
date_default_timezone_set("America/Bogota");

$date=date("Y-m-d H:i:s");
$now=time();
echo $date;
echo "<br>";
echo $now;
echo "<br>";

//strtotime
echo "<h2>todo los segundo desde la Unix hasta Hoy</h2>";
echo strtotime($now);
echo "<br>";
echo strtotime("17 april 2020");
echo "<br>";
echo strtotime("+1 day");
echo "<br>";
echo strtotime("next Monday");
echo "<br>";
echo strtotime("last Wednesday");