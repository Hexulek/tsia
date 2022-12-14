<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabliczka mnożenia</title>
</head>
<body>
<style>
    tr {
        border: 1px dashed black;
        border-collapse: collapse;
        font-family: Verdana;
        font-size: large;
        padding: 5px;
        background-color: beige;
        text-align: center;
    }
    td {
        border: 1px dashed black;
        border-collapse: collapse;
        font-family: Verdana;
        font-size: large;
        padding: 5px;
        background-color: beige;
        text-align: center;
    }
    th {
        border: 1px dashed black;
        border-collapse: collapse;
        font-family: Verdana;
        font-size: large;
        padding: 5px;
        background-color: burlywood;
    }
</style>

<?php
echo '<table style="border: 1px solid black; border-collapse: collapse; font-family: Verdana; font-size: large">';
echo '<tr><th> x </th>';
    for ($wys = 1; $wys <= 10; $wys++) {
        echo '<th>'. $wys .'</th>';
    }
    echo '</tr>';
    for ($szer = 1; $szer <= 10; $szer++) {
        echo '<tr><th>' . $szer . '</th>';
        for ($wys = 1; $wys <= 10; $wys++) {
            if ($szer != $wys) {
                echo '<td  style="background-color: beige">' . ($szer * $wys) . '</td>';
            } else {
                echo '<td style="background-color: bisque;">' . ($szer * $wys) . '</td>';
            }
        }
        echo "</tr>";
    }
echo "</tr>";
    ?>
</table>
</body>
</html>