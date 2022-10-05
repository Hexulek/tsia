<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 1/2</title>
</head>
<body>

<?php
echo "<b> Zadanie 1 </b>" . '<br>';

$inta = 100;
$intb = 300;
$floata = 9.85;
$floatb = 12.58;

echo "<br> Zmienna x ma wartość " .$inta. " a funkcja is_int zwraca dla niej wynik ";
var_dump(is_int($inta));
echo "<br> Zmienna x ma wartość " .$intb. " a funkcja is_int zwraca dla niej wynik ";
var_dump(is_int($intb));
echo "<br> Zmienna x ma wartość " .$floata. " a funkcja is_int zwraca dla niej wynik ";
var_dump(is_int($floata));
echo "<br> Zmienna x ma wartość " .$floatb. " a funkcja is_int zwraca dla niej wynik ";
var_dump(is_int($floatb));

echo " <br>  <br> ";

echo "Zmienna x ma wartość " .$inta. " a funkcja is_int zwraca dla niej wynik ";
var_dump(is_float($inta));
echo "<br> Zmienna x ma wartość " .$intb. " a funkcja is_int zwraca dla niej wynik ";
var_dump(is_float($intb));
echo "<br> Zmienna x ma wartość " .$floata. " a funkcja is_int zwraca dla niej wynik ";
var_dump(is_float($floata));
echo "<br> Zmienna x ma wartość " .$floatb. " a funkcja is_int zwraca dla niej wynik ";
var_dump(is_float($floatb));

echo "<br>  <br>";

$dodaj= "59.85" + 100;

echo "<br> Zmienna x ma wartość " .$dodaj. " a funkcja is_numeric zwraca dla niej wynik ";
var_dump(is_numeric($dodaj));

echo "<br>  <br>";

echo "Stała PHP_INT_MAX ma wartość ";
var_dump(PHP_INT_MAX);
echo "<br> Stała PHP_INT_MIN ma wartość ";
var_dump(PHP_INT_MIN);
echo "<br> Stała PHP_INT_SIZE ma wartość ";
var_dump(PHP_INT_SIZE);
echo "<br> Stała PHP_FLOAT_MAX ma wartość ";
var_dump(PHP_FLOAT_MAX);
echo "<br> Stała PHP_FLOAT_MIN ma wartość ";
var_dump(PHP_FLOAT_MIN);
echo "<br> Stała PHP_INT_DIG ma wartość ";
var_dump(PHP_FLOAT_DIG);
echo "<br> Stała PHP_FLOAT_EPSILON ma wartość ";
var_dump(PHP_FLOAT_EPSILON);

echo "<br>  <br> <br>";

echo "<b> Zadanie 2 </b>" . '<br>';

$x = 5;
$y = 15;

echo "<br> Wynik dodawania " .$x. " i " .$y. " wynosi " .$z = $x + $y;
echo "<br> Wynik odejmowania " .$x. " i " .$y. " wynosi " .$z = $x - $y;
echo "<br> Wynik mnożenia " .$x. " i " .$y. " wynosi " .$z = $x * $y;
echo "<br> Wynik dzielenia " .$x. " i " .$y. " wynosi " .$z = $x / $y;
echo "<br> Wynik dzielenia z resztą " .$x. " i " .$y. " wynosi " .$z = $x % $y;

echo "<br>  <br> <br>";

$a = 4;
$b = 35;

echo "<br> Obwód prostokąta o bokach " .$a. " i " .$b. " wynosi " .$k = $a * 2 + $b * 2;
echo "<br> Pole prostokąta o bokach " .$a. " i " .$b. " wynosi " .$k = $a * $b. " m<sup>2</sup>";

echo "<br>  <br> <br>";



?>

</body>
</html>
