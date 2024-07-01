<?php
// 1. Operadores Aritméticos

// Suma
$a = 5 + 3; // $a es 8

// Resta
$b = 10 - 6; // $b es 4

// Multiplicación
$c = 4 * 7; // $c es 28

// División
$d = 20 / 5; // $d es 4

// Módulo
$e = 7 % 3; // $e es 1

// Exponenciación
$f = 2 ** 3; // $f es 8

// División Entera
$g = intdiv(7, 3); // $g es 2
?>


<?php
//2. Operadores de Comparación

// Igualdad
$igual = (5 == 5); // $igual es true

// Desigualdad
$desigual = (5 != 3); // $desigual es true

// Mayor que
$mayor = (7 > 4); // $mayor es true

// Menor que
$menor = (3 < 8); // $menor es true

// Mayor o igual que
$mayorIgual = (6 >= 6); // $mayorIgual es true

// Menor o igual que
$menorIgual = (2 <= 5); // $menorIgual es true
?>


<?php
// 3. Operadores Lógicos

// AND
$and = (5 > 3 && 2 < 4); // $and es true

// OR
$or = (5 < 3 || 2 < 4); // $or es true

// NOT
$not = !(5 > 3); // $not es false
?>


<?php
//4. Operadores de Asignación

$x = 10; // Asignación

$x += 5; // $x es 15 (asignación de suma)
$x -= 3; // $x es 12 (asignación de resta)
$x *= 4; // $x es 48 (asignación de multiplicación)
$x /= 2; // $x es 24 (asignación de división)
$x %= 3; // $x es 0 (asignación de módulo)
?>


<?php
//5. Operadores Bit a Bit

// AND bit a bit
$bitAnd = 5 & 3; // $bitAnd es 1 (0101 & 0011 = 0001)

// OR bit a bit
$bitOr = 5 | 3; // $bitOr es 7 (0101 | 0011 = 0111)

// XOR bit a bit
$bitXor = 5 ^ 3; // $bitXor es 6 (0101 ^ 0011 = 0110)

// NOT bit a bit
$bitNot = ~5; // $bitNot es -6 (complemento a dos)

// Desplazamiento a la izquierda
$shiftLeft = 5 << 1; // $shiftLeft es 10 (0101 << 1 = 1010)

// Desplazamiento a la derecha
$shiftRight = 5 >> 1; // $shiftRight es 2 (0101 >> 1 = 0010)
?>


<?php
//6. Operadores de Identidad

$x = 10;
$y = $x;
$z = 10;

$is = ($x === $y); // $is es true (x e y son el mismo objeto)
$isNot = ($x !== $z); // $isNot es false (x y z tienen el mismo valor)
?>


<?php
//7. Operadores de Pertenencia

$array = [1, 2, 3, 4];

// in
$in = in_array(3, $array); // $in es true

// not in
$notIn = !in_array(5, $array); // $notIn es true
?>

<?php
// Operadores Aritméticos
$a = 5 + 3;
$b = 10 - 6;
$c = 4 * 7;
$d = 20 / 5;
$e = 7 % 3;
$f = 2 ** 3;
$g = intdiv(7, 3);

echo "Operadores Aritméticos:<br>";
echo "\$a = $a<br>"; // 8
echo "\$b = $b<br>"; // 4
echo "\$c = $c<br>"; // 28
echo "\$d = $d<br>"; // 4
echo "\$e = $e<br>"; // 1
echo "\$f = $f<br>"; // 8
echo "\$g = $g<br>"; // 2

// Operadores de Comparación
$igual = (5 == 5);
$desigual = (5 != 3);
$mayor = (7 > 4);
$menor = (3 < 8);
$mayorIgual = (6 >= 6);
$menorIgual = (2 <= 5);

echo "<br>Operadores de Comparación:<br>";
echo "\$igual = " . ($igual ? 'true' : 'false') . "<br>"; // true
echo "\$desigual = " . ($desigual ? 'true' : 'false') . "<br>"; // true
echo "\$mayor = " . ($mayor ? 'true' : 'false') . "<br>"; // true
echo "\$menor = " . ($menor ? 'true' : 'false') . "<br>"; // true
echo "\$mayorIgual = " . ($mayorIgual ? 'true' : 'false') . "<br>"; // true
echo "\$menorIgual = " . ($menorIgual ? 'true' : 'false') . "<br>"; // true

// Operadores Lógicos
$and = (5 > 3 && 2 < 4);
$or = (5 < 3 || 2 < 4);
$not = !(5 > 3);

echo "<br>Operadores Lógicos:<br>";
echo "\$and = " . ($and ? 'true' : 'false') . "<br>"; // true
echo "\$or = " . ($or ? 'true' : 'false') . "<br>"; // true
echo "\$not = " . ($not ? 'false' : 'true') . "<br>"; // false

// Operadores de Asignación
$x = 10;
$x += 5;
echo "<br>Operadores de Asignación:<br>";
echo "\$x += 5 => $x<br>"; // 15
$x -= 3;
echo "\$x -= 3 => $x<br>"; // 12
$x *= 4;
echo "\$x *= 4 => $x<br>"; // 48
$x /= 2;
echo "\$x /= 2 => $x<br>"; // 24
$x %= 3;
echo "\$x %= 3 => $x<br>"; // 0

// Operadores Bit a Bit
$bitAnd = 5 & 3;
$bitOr = 5 | 3;
$bitXor = 5 ^ 3;
$bitNot = ~5;
$shiftLeft = 5 << 1;
$shiftRight = 5 >> 1;

echo "<br>Operadores Bit a Bit:<br>";
echo "\$bitAnd = $bitAnd<br>"; // 1
echo "\$bitOr = $bitOr<br>"; // 7
echo "\$bitXor = $bitXor<br>"; // 6
echo "\$bitNot = $bitNot<br>"; // -6
echo "\$shiftLeft = $shiftLeft<br>"; // 10
echo "\$shiftRight = $shiftRight<br>"; // 2

// Operadores de Identidad
$x = 10;
$y = $x;
$z = 10;

$is = ($x === $y);
$isNot = ($x !== $z);

echo "<br>Operadores de Identidad:<br>";
echo "\$is = " . ($is ? 'true' : 'false') . "<br>"; // true
echo "\$isNot = " . ($isNot ? 'true' : 'false') . "<br>"; // false

// Operadores de Pertenencia
$array = [1, 2, 3, 4];
$in = in_array(3, $array);
$notIn = !in_array(5, $array);

echo "<br>Operadores de Pertenencia:<br>";
echo "\$in = " . ($in ? 'true' : 'false') . "<br>"; // true
echo "\$notIn = " . ($notIn ? 'true' : 'false') . "<br>"; // true
?>




