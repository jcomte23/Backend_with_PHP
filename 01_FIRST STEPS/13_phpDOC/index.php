<?php

/**
 * Esta funcion retorna la suma de 2 numeros enteros
 * 
 * @param int $n1
 * @param int $n2
 * @return int
 */
function sumarNumerosBasicamente(int $n1, int $n2): int {
    return $n1 + $n2;
}

$resultado=sumarNumerosBasicamente(4,9);
echo $resultado;