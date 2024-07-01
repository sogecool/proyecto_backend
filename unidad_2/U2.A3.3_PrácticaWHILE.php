
<?php
echo "PRÁCTICA CICLO WHILE<br><br>"
?>

<?php
// Imprimir los números del 1 al 20, pero saltarse los números divisibles por tres
$i = 1;
while ($i <= 20) {
    if ($i % 3 != 0) {
        echo $i . "\n";
    }
    $i++;
}
?>
