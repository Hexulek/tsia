<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conditionals</title>
</head>
<body>

<style>
    h1 {
        border: magenta, 4px solid;
    }
</style>


<?php
$losowa=rand(1,30);?>
<h2 style="text-align: center; color: darkorchid;"><?=$losowa?></h2>
<?php if ($losowa >= 20) : ?>
    <h4 style="text-align: center;color: magenta;">Wylosowana liczba jest większa lub równa 20.</h4>
<?php endif; ?>
<?php if ($losowa % 2 == 0) : ?>
    <h4 style="text-align: center; color: navy;">Liczba jest parzysta</h4>
<?php else : ?>
    <h4 style="text-align: center; color: navy;">Liczba nie jest parzysta</h4>
<?php endif; ?>
<?php if ($losowa <= 10 ) : ?>
    <h4 style="color: deeppink; text-align: center;">Pierwsza dziesiątka</h4>
<?php elseif ($losowa > 10 && $losowa <= 20) : ?>
    <h4 style="color: deeppink; text-align: center;">Druga dziesiątka</h4>
<?php else : ?>
    <h4 style="color: deeppink; text-align: center;">Trzecia dziesiątka</h4>
<?php endif; ?>
<br>
<br>
<br>
<?php
$miesiac = rand(1, 16); ?>
<h1 style="text-align: center; border-style: solid; color: mediumpurple;"><?= $miesiac ?></h1>
<h3 style="text-align: center; border-bottom: dashed 2px pink; border-top: dashed 2px pink; font-family: cursive"</h3>
<?php
switch ($miesiac) {
    case 1:
    case 2:
    case 3:
        echo "I Kwartał";
        break;
    case 4:
    case 5:
    case 6:
        echo "II kwartał";
        break;
    case 7:
    case 8:
    case 9:
        echo "III kwartał";
        break;
    case 10:
    case 11:
    case 1:
        echo "III kwartał";
        break;
    default:
        echo "Błędny numer miesiąca";
}
?>
</body>
</html>