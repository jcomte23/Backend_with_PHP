<?php

echo "<h1>VARIABLES</h1>";
echo "We must use Upper Camel Case in the names of classes and files. And Lower Camel Case in the names of variables or methods. <br>";
echo "In PHP, the data type is automatically determined at runtime according to the value assigned to the variable. This allows for greater flexibility and speed in application development, since there is no need to worry about defining and specifying types at the development stage.";
//Debemos usar Upper Camel Case en los nombres de las clases y archivos. Y Lower Camel Case en los nombres de las variables o métodos.
//En PHP, el tipo de datos se determina automáticamente en tiempo de ejecución según el valor que se le asigne a la variable. Esto permite una mayor flexibilidad y rapidez en el desarrollo de aplicaciones, ya que no es necesario preocuparse por la definición y especificación de tipos en la etapa de desarrollo.

echo "<br>";
echo "<h2>NUMBER VARIABLES</h2>";
echo "<strong>Int</strong> (On most computer architectures, PHP uses a two's complement representation of integers, which means that the range of values that an integer can represent in PHP is from -2,147,483,648 to 2,147,483,647 on 32-bit systems, and from -9,223,372,036,854,775,808 to 9,223,372,036,854,775,807 on 64-bit systems.)<br>";
// int(En la mayoría de las arquitecturas de computadora, PHP utiliza una representación en complemento a dos de los enteros, lo que significa que el rango de valores que puede representar un entero en PHP es desde -2.147.483.648 a 2.147.483.647 en sistemas de 32 bits, y desde -9.223.372.036.854.775.808 a 9.223.372.036.854.775.807 en sistemas de 64 bits.):
$numberInt = 100;
echo "Int = " . $numberInt;
echo "<br>";

echo "<br>";
echo "<strong>Bool</strong> (A bool value can contain only two possible values: true or false, and stores this information in a single bit. However, PHP uses a full byte (8 bits) to store a boolean value for reasons of efficiency and compatibility with the underlying hardware architecture.)<br>";
// Bool(Un valor bool puede contener sólo dos valores posibles: true o false, y almacena esta información en un solo bit. Sin embargo, PHP utiliza un byte completo (8 bits) para almacenar un valor booleano por razones de eficiencia y compatibilidad con la arquitectura de hardware subyacente.):
$bool = true;
echo "Bool = " . $bool;
echo "<br>";

echo "<br>";
echo "<strong>String</strong> (In general, for ASCII characters (common English letters and numbers), one byte per character in memory is used, while for non-ASCII characters (such as letters with accents, symbols and characters from other languages), 2 to 4 bytes per character can be used.)<br>";
// String(En general, para caracteres ASCII (letras y números comunes en inglés), se utiliza un byte por carácter en la memoria, mientras que para caracteres no ASCII (como letras con acentos, símbolos y caracteres de otros idiomas), se pueden utilizar de 2 a 4 bytes por carácter.):
$String = "texto";
echo "String = " . $String;
echo "<br>";

echo "<br>";
echo "<strong>Float</strong> (In PHP, a float variable uses 8 bytes (64 bits) of memory for storage. It is important to note that floating numbers have finite precision and may be subject to rounding errors in some calculations.)<br>";
// Float(En PHP, una variable tipo flotante utiliza 8 bytes (64 bits) de memoria para su almacenamiento. Es importante tener en cuenta que los números flotantes tienen una precisión finita y pueden estar sujetos a errores de redondeo en algunos cálculos.):
$Float = "Float";
echo "Float = " . $Float;
echo "<br>";

echo "<br>";
echo "<h2>OPERATORS</h2>";

echo "<h3>Arithmetic operators</h3>";
//Operadores aritmeticos
echo "+"." <b>:</b> "."a + b <b>:</b> "."<b>is equivalent to:</b>"." a = a + b <br>";
echo "-"." <b>:</b> "."a - b <b>:</b> "."<b>is equivalent to:</b>"." a = a - b <br>";
echo "*"." <b>:</b> "."a * b <b>:</b> "."<b>is equivalent to:</b>"." a = a * b <br>";
echo "/"." <b>:</b> "."a / b <b>:</b> "."<b>is equivalent to:</b>"." a = a / b <br>";
echo "%"." <b>:</b> "."a % b <b>:</b> "."<b>is equivalent to:</b>"." a = a modulus of b <br>";
echo "**"." <b>:</b> "."a ** b <b>:</b> "."<b>is equivalent to:</b>"." a = a raised to b <br>";
echo "<br>";

echo "<h3>Assignment operators</h3>";
//Operadores de asignación
echo "+="." <b>:</b> "."a += b <b>:</b> "."<b>is equivalent to:</b>"." a = a + b <br>";
echo "-="." <b>:</b> "."a -= b <b>:</b> "."<b>is equivalent to:</b>"." a = a - b <br>";
echo "*="." <b>:</b> "."a *= b <b>:</b> "."<b>is equivalent to:</b>"." a = a * b <br>";
echo "/="." <b>:</b> "."a /= b <b>:</b> "."<b>is equivalent to:</b>"." a = a / b <br>";
echo "%="." <b>:</b> "."a %= b <b>:</b> "."<b>is equivalent to:</b>"." a = a % b <br>";
echo "<br>";

echo "<h3>Comparison operators</h3>";
//Operadores de comparacion

echo "=="." <b>:</b> "."<b>Equals:</b> "."is equivalent to comparing if one data is equal to another in value<br>";
echo "==="." <b>:</b> "."<b>Forced equals:</b> "."equivalent to comparing whether one data is equal to another in value and data type <br>";
echo "!="." <b>:</b> "."<b>Difference:</b> "."is equivalent to comparing if one data is <b>NOT equal</b> to another in value <br>";
echo "!=="." <b>:</b> "."<b>Forced difference:</b> "."is equivalent to comparing whether one data is <b>NOT equal</b> to another in value and data type  <br>";
echo "<, >, <= >= "." : "."major and minor, major equal and minor equal<br>";

echo "<h3>Increment operators</h3>";
//Operadores de incremento
echo "++"." <b>:</b> "."i++ <b>:</b> "."<b>is equivalent to:</b>"." i = i + 1 <br>";
echo "--"." <b>:</b> "."i-- <b>:</b> "."<b>is equivalent to:</b>"." i = i - 1 <br>";
