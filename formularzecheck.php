<!DOCTYPE html>
<html>
<head>

</head>
<body>
<h1>Kupię mefedron </h1>

<fieldset style="border-color: green">
    <legend>Liczby</legend>
    <form action="formularzecheck.php" method="post">
        <?php
        foreach (range(0,100,10)as $wartosc)
        {
            if (!empty($_POST['liczba']) && in_array($wartosc, $_POST['liczba']))
            {
                $checked = 'checked';
            }
            else
            {
                $checked = '';
            }
            echo "<label for='$wartosc'><input type='checkbox' name='liczba[]' id='a1_$wartosc' value='$wartosc' $checked>$wartosc </label>";

        }
        ?>
        <br><br>
        <input type="submit" value="Wyślij">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD']==='POST')
    {
        echo '<p>';
        if (!empty($_POST['liczba']))
        {
            echo 'Te liczby zostały wybrane: ' . implode(', ', $_POST['liczba']);
        }
    else {
            echo 'Żadna liczba nie została wybrana';
            echo '</p>';
        }
    }
    ?>
</fieldset>
</body>
</html>