<?php
//3. Dado un array de números, encontrar el número más grande y el número más pequeño

$numeros = array(5, 9, 3, 7, 2, 8);

$maximo = max($numeros);
$minimo = min($numeros);

echo "El número más grande es: " . $maximo . "<br>";
echo "El número más pequeño es: " . $minimo;
?>
