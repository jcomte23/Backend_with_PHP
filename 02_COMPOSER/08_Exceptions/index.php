<?php

try {
    $resultado = 20 / 0;
    echo $resultado;
} catch (Throwable $e) {
    echo $e->getMessage();
    echo "<br>";
    echo $e->getCode();
    echo "<br>";
    echo $e->getFile();
    echo "<br>";
    echo $e->getLine();
    echo "<br>";
    echo $e->getTrace();
    echo "<br>";
    echo $e->getTraceAsString();
    echo "<br>";
    echo "¡Ups! Algo salió mal con tu división";
}

echo "<br>";
echo "<br>";
echo "Esto pasa sí o sí";

echo "<br>";
echo "<br>";
echo "Ejercicio2<br>";
try {

    $pet = readline("¿Qué quieres adoptar? ");
    $pet = "conejo";

    if ($pet != "michi" && $pet != "conejo")
        throw new Exception("Lo sentimos, no tenemos $pet en este centro de adopción");

    echo "¡Felicidades por tu nuevo $pet!";
} catch (\Throwable $e) {

    echo $e->getMessage();
}
