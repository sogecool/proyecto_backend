<?php
$str1 = "Hola";
$str2 = "Mundo";
$result = $str1 . " " . $str2;
echo "Concatenación:<br>";
echo $result . "<br>"; // Output: Hola Mundo
?>

<?php
$str = "Hola Mundo";
$length = strlen($str);
echo "<br>Longitud del String:<br>";
echo "La longitud de '$str' es $length<br>"; // Output: 10
?>

<?php
$str = "Hola Mundo";
$substr = substr($str, 0, 4);
echo "<br>Substring:<br>";
echo "Los primeros 4 caracteres de '$str' son '$substr'<br>"; // Output: Hola
?>

<?php
$str = "Hola Mundo";
$newStr = str_replace("Mundo", "PHP", $str);
echo "<br>Reemplazo de Substring:<br>";
echo "$newStr<br>"; // Output: Hola PHP
?>

<?php
$str = "Hola Mundo";
$upperStr = strtoupper($str);
$lowerStr = strtolower($str);
echo "<br>Conversión de Mayúsculas y Minúsculas:<br>";
echo "En mayúsculas: $upperStr<br>"; // Output: HOLA MUNDO
echo "En minúsculas: $lowerStr<br>"; // Output: hola mundo
?>

<?php
$str = "  Hola Mundo  ";
$trimmedStr = trim($str);
echo "<br>Eliminar Espacios en Blanco:<br>";
echo "Sin espacios en blanco: '$trimmedStr'<br>"; // Output: 'Hola Mundo'
?>

<?php
$str = "Hola Mundo";
$pos = strpos($str, "Mundo");
echo "<br>Encontrar Substring:<br>";
echo "La posición de 'Mundo' en '$str' es $pos<br>"; // Output: 5
?>

<?php
$str = "Hola, Mundo, PHP";
$array = explode(", ", $str);
echo "<br>Dividir un String:<br>";
echo "Dividiendo '$str' en un array:<br>";
print_r($array); // Output: Array ( [0] => Hola [1] => Mundo [2] => PHP )
?>

<?php
$array = ["Hola", "Mundo", "PHP"];
$str = implode(" ", $array);
echo " <br><br>Unir un Array en un String:<br>";
echo "$str<br>"; // Output: Hola Mundo PHP
?>


