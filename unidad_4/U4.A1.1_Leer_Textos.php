<?php
$filename = 'backend.txt';

if (file_exists($filename)) {
    $content = file_get_contents($filename);
    echo nl2br($content); // nl2br convierte saltos de línea a <br> para HTML
} else {
    echo "El archivo no existe.";
}
?>
