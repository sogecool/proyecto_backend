<!DOCTYPE html>
<html>
<head>
    <title>Verificar Edad</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Variable que almacene la edad de un usuario
    $edad = (int)$_POST["edad"];
    
    // Mostrar un mensaje de saludo diferente si es mayor o menor de 18 años
    if ($edad >= 18) {
        echo "Hola, eres mayor de edad. Tu edad es $edad años.";
    } else {
        echo "Hola, eres menor de edad. Tu edad es $edad años.";
    }
} else {
    // Mostrar el formulario para ingresar la edad
    echo '
    <form method="post" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '">
        Ingresa tu edad: <input type="number" name="edad" required>
        <input type="submit" value="Enviar">
    </form>
    ';
}
?>

</body>
</html>
