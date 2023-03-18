<?php
echo "<h1>Conditionals</h1>";
echo "Conditionals allow us to take actions within our code. <br>";
//Las condicionales nos permiten tomar acciones dentro de nuestro código

echo "<h4>IF</h4>";
$edad=23;
if ($edad >= 18) {
    echo "ES MAYOR DE EDAD";
} else {
    echo "ES MENOR DE EDAD";
}

echo "<h4>SWITCH</h4>";
echo "Digamos que tenemos Opción 1,2 o 3 en vez de hacer un if por cada opción hacemos <br>";
$opcionEscogida=2;
switch ($opcionEscogida) {
    case 1:
        echo "ELIGIÓ LA OPCIÓN 1";
        break;
    
    case 2:
        echo "ELIGIÓ LA OPCIÓN 2";
        break;

    case 3:
        echo "ELIGIÓ LA OPCIÓN 3";
        break;
    
    default:
        echo "ELIGIÓ UNA OPCIÓN DIFERENTE";
        break;
}

echo "<h4>FOR</h4>";
echo "Se utiliza este ciclo si sabemos exactamente cuántas repeticiones necesitamos, por ejemplo los números del 1 al 5<br>";

for ($i=1; $i < 6; $i++) { 
    echo $i;
}
// RESULTADO: 12345


echo "<h4>WHILE</h4>";
echo "Si no conocemos cuántas repeticiones usamos este ciclo <br>";

$opcion=0;
while ($opcion != 0) {
    echo "ESTE CICLO NO ACABA HASTA QUE Opcion sea diferente a 0<br>";
}

echo "<h4>Extra: if simplificado</h4>";
echo "Podemos hacer un if sencillo en una sola línea de la siguiente manera:<br>";

// Condición ? Si es Verdadero : Si es Falso ;
echo true ? "CUMPLE LA CONDICIÓN" : "NO CUMPLE LA CONDICIÓN";


