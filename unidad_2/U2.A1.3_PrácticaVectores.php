<?php
// Definición de un arreglo (vector) con los municipios de Baja California
$municipios = array("Ensenada", "Mexicali", "Tecate", "Tijuana", "Playas de Rosarito", "San Quintín", "San Felipe");

// Contar el número de municipios
$cantidad_municipios = count($municipios);

// Imprimir la cantidad de municipios
echo "La cantidad de municipios en Baja California es: " . $cantidad_municipios . "<br><br>";

// Imprimir la lista de municipios con el formato especificado
foreach ($municipios as $indice => $municipio) {
    echo "No." . ($indice + 1) . " Nombre: " . $municipio . "<br>";
}
?>
