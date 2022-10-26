<!doctype html>
<html lang="pl" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pentla</title>
</head>
<body>
<ol style="margin: 40px; list-style-type: upper-roman">
<?php
$n = 1;
for ($n; $n<=100; $n++) {
    echo "<li> To jest $n element listy. <br>";
}
?></ol>

<table style="border-collapse: collapse"
<tr>
<?php
$znaki=str_split("Kon'nichiwa sekai");
foreach ($znaki as $znak) {
    echo "<td style='border-style:dotted; border: width 1px; padding: 15px'>$znak</td>";
}
?>
</tr>
</table>

<table style="border-collapse: collapse">

        <?php
        $f = 1;
        while ($f <= 5) {
            echo "<tr><td style='background-color: lightgray; border: gray; padding: 10px'> To jest wiersz numer".$f++."</td></tr>";
        }
        ?>

</table>
<table style="border-collapse: collapse"><tr>

    <?php
    $a = 1;
    do {
        echo "<td style='background-color: greenyellow; border: gray; padding: 10px'> To jest wiersz numer".$a++."</td>";
    }
    while ($a <= 5);
    ?>

</table>
</tr>
</body>
</html>

