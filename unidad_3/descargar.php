<?php
if (isset($_GET['file'])) {
    $file = $_GET['file'];
    $filepath = 'archivos/' . $file;

    if (file_exists($filepath)) {
        // Definir encabezados
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($filepath) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filepath));
        flush(); // Flush system output buffer
        readfile($filepath);
        exit;
    } else {
        echo "El archivo no existe.";
    }
}
?>
    