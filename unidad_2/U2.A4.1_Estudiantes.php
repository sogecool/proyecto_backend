<?php

//1. Crear un array con los nombres de varios estudiantes y mostrarlos en una lista numerada

$estudiantes = array("Juan", "María", "Pedro", "Ana", "Luis");

echo "<ol>";
foreach ($estudiantes as $estudiante) {
    echo "<li>$estudiante</li>";
}
echo "</ol>";
?>
