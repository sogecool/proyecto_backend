<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualización de Imagen JPG con PHP</title>
</head>
<body>
    <div>
        <h1>Visualización de Imagen JPG con PHP</h1>
        <?php
        // Ruta de la imagen JPG
        $imagen_path = 'HASHES.JPG';

        // Verificar la ruta completa del archivo
        $ruta_completa = __DIR__ . '/' . $imagen_path;

        // Verificar si el archivo existe antes de mostrarlo
        if (file_exists($ruta_completa)) {
            echo '<img src="' . $imagen_path . '" alt="Imagen JPG" style="max-width: 100%; height: auto;" />';
        } else {
            echo 'La imagen no se encontró en la ruta: ' . $ruta_completa;
        }
        ?>
        <!-- Ajusta la ruta según la ubicación real de tu imagen JPG -->
    </div>
</body>
</html>
