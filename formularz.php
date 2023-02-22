<!DOCTYPE html>
<html>
<head>

</head>
<body>
<h1> Zadanie 2</h1>

<form action="#">
    <fieldset>
        <legend>Roczniki</legend>
        <?php
        for ($i=2010; $i<=2025; $i++){
            echo "<input type='radio' id='button$i' name='button'><label for=''button$i'> $i </label>" . "<br>";
        }
        ?>
    </fieldset>
</form>

<br><br><br><br>

<?php
$tablica=array(
        1=> "Styczeń",
        2=> "Luty",
        3=> "Marzec",
        4=> "Kwiecień",
        5=> "Maj",
        6=> "Czerwiec",
        7=> "Lipiec",
        8=> "Sierpień",
        9=> "Wrzesień",
        10=> "Październik",
        11=> "Listopad",
        12=> "Grudzień"
)
    ?>
<h1> Zadanie 3</h1>
<form>
    <select name="months" id="months">
        <?php
        foreach ($tablica as $month => $month_name) {
            if ($month == date ("m")) {
                echo "<option selected value='$month_name'>$month_name";
            }
        }
        ?>
    </select>
</form>

</body>
</html>