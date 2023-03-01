<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="numbers.php" method="post">
    <fieldset style="border: 3px solid green">
        <legend>Liczby</legend>
        <?php
        foreach (range(0, 100, 10) as $value ) {
            echo "<label style='margin-right: 20px' for='$value'><input type='checkbox' name='liczby[]' id='k' $value value='$value'></label> $value";
        }
        ?>
        <br>
        <input type="submit" value="Wciągnij">

        <?php
        if ($_SERVER['REQUEST_METHOD']==='POST')
        {
            echo '<p>';
            if (!empty($_POST['liczby'])) {
                echo 'Te liczby zostały wybrane: ' .IMPLODE(',', $_POST['liczby']);
            }
            else
            {
                echo 'Żadna liczba nie została wybrana';
            }
            echo '<p>';
        }
        ?>
</form>
</fieldset>
</body>
</html>
