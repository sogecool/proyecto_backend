<?php
//2. Calcular el promedio de un conjunto de calificaciones almacenadas en un array

$calificaciones = array(85, 90, 78, 92, 88);

$suma = array_sum($calificaciones);
$conteo = count($calificaciones);
$promedio = $suma / $conteo;

echo "El promedio de las calificaciones es: " . $promedio;
?>
