<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    $log = "Nombre: $nombre, Email: $email\n";
    $filename = 'log.txt';

    // Abrir archivo en modo append
    $file = fopen($filename, 'a');
    if ($file) {
        fwrite($file, $log);
        fclose($file);
        echo "Información registrada correctamente.";
    } else {
        echo "No se pudo abrir el archivo de registro.";
    }
}
?>
