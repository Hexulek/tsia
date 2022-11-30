<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tablice</title>
</head>
<body>

<h3> zadanie1</h3>
<?php
$owoce= array_fill(8, 5, 'mango'); ?>
    <pre><?php print_r($owoce) ; ?> </pre>

<br>
<br>
<h3> zadanie2</h3>
<pre>
<?php
foreach(range(0, 12, 2) as $parzyste){
    echo $parzyste . " ";
}
echo '<br>';
foreach(range(-10, 100, 10) as $dziesiatki){
    echo $dziesiatki . " ";
}
echo '<br>';
foreach(range(-5.5, 5.5, 0.5) as $polowki){
    echo $polowki . " ";
}
echo '<br>';
foreach(range('m', 'u' ) as $litery_od_em){
    echo $litery_od_em . " ";
}
echo '<br>';
foreach(range('x', 'e' ) as $litery_wstecz){
    echo $litery_wstecz . " ";
}
?>
</pre>

<br>
<br>

<h3>zadanie3</h3>
<?php
$przedmiot= array('Tworzenie', 'stron', 'aplikacji', 'internetowych'); ?>
<pre><?php print_r($przedmiot) ; ?> </pre>

<?php
list($n1, $n2, $n3, $n4)= $przedmiot;
echo $n1 . ' ' . $n2 . ' i ' . $n3 . ' ' . $n4 . '.';
?>
<br>
<br>
<h3>zadanie4</h3>
<?php
$numbers= range(0, 10);
shuffle($numbers);
?>
<table style="background-color: aliceblue; border-collapse: collapse; width: 100%">
    <tr>
        <?php
        foreach ($numbers as $number) {
         echo '<td style="border: 1px solid dodgerblue; padding: 10px; text-align: center">' . $number . '</td>';
        }
        ?>
    </tr>
</table>
<br>
<br>
<h3>zadanie5</h3>

<?php
$liczby= array(rand(0, 99), rand(0, 99), rand(0, 99), rand(0, 99), rand(0, 99),);
rsort($liczby);
?>
<pre><?php print_r($liczby) ?></pre>

<br>
<br>
<h3> zadanie6</h3>

<?php
$film= array("Skazani na Shawshank"=>"dramat", "Nietykalni"=>"biograficzny", "Władca Pierścieni: Powrót króla"=>"fantasy", "Pulp Fiction"=>"gangsterski", "Siedem"=>"kryminał", "Podziemny krąg"=>"thriller", "Django"=>"western", "Król Lew"=>"animacja", "Avengers: Wojna bez granic"=>"akcja", "Dobry, zły i brzydki"=>"western"); ?>
<pre><?php print_r($film) ?></pre>


</body>
</html>
