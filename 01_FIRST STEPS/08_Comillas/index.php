<?php

echo 'Un texto de una línea';
echo '<br>';

echo 'Un texto de 
varías líneas solo en código
no solo refleja en output';
echo '<br>';

echo 'Podemos escapar una comilla
simple así \' con un backslash \\ continuar con más texto <br>';

echo '<br>';
$name = 'Luigi';
echo "Mi nombre es $name <br>";
echo 'Mi nombre es ' . $name;
echo '<br>';

$name2 = 'Luigi';
$courses = [
    'backend' => 'PHP'
];

echo "{$courses['backend']}";

class User
{
    public $name2 = 'Mario';
}

$user1 = new User;

echo "<br>  $user1->name2 quiere aprender {$courses['backend']} <br>";

