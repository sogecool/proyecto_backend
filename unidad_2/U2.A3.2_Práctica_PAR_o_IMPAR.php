<!DOCTYPE html>
<html>
<body>

<form method="post">
  Ingrese un número: <input type="number" name="numero">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST['numero'];

    if ($numero % 2 == 0) {
        echo "El número $numero es par.";
    } else {
        echo "El número $numero es impar.";
    }
}
?>

</body>
</html>
