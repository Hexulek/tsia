<!doctype html>
<html lang="en">
<head>
    <title>wykopki</title>
    <meta charset="UTF-8">
</head>
<body>
<h1> phpa </h1>
<form action="formularzzwalidacja.php" method="post">
    <fieldset style="border: 1px solid darkgreen; background-color: lightgreen">
        <legend style="border: 1px solid darkgreen; background-color: lightgreen">Formularz z walidacją</legend>
        <?php
        $imie = $nazwisko = $kto = $strona = $miasta = '';
        $imie_blad = $nazwisko_blad = $kto_blad = $strona_blad = $miasta_blad = '';

        $valid_input = true;
        $valid_message = '';
        $filename = 'ankieta.txt';

        if($_SERVER['REQUEST_METHOD']=='POST') {
            if (empty($_POST['imie']))
            {
                $imie_blad = "Proszę podać login";
                $valid_input = false;
            }
            else
            {
                $imie = trim($_POST["imie"]);
                $imie = filter_var($imie, FILTER_SANITIZE_STRING);
                if (strstr($imie, ' '))
                {
                    $imie_blad = "Login nie może zawierać spacji";
                    $valid_input = false;
                }
            }
        }
        if($_SERVER['REQUEST_METHOD']=='POST') {
            $nazwisko = filter_var($_POST["nazwisko"], FILTER_SANITIZE_EMAIL);
            if (!filter_input(INPUT_POST, "nazwisko", FILTER_VALIDATE_EMAIL)) {
                $nazwisko_blad = "Wartość w polu email jest nieprawidłowa";
                $valid_input = false;
            }
        }
        if($_SERVER['REQUEST_METHOD']=='POST') {
            $strona = filter_var($_POST["strona"], FILTER_SANITIZE_URL);
            if (!filter_input(INPUT_POST, "strona", FILTER_VALIDATE_URL)) {
                $strona_blad = "Wartość w polu strona jest nieprawidłowa";
                $valid_input = false;
            }
        }


        /*
            if($_SERVER['REQUEST_METHOD']=='POST') {
            if (empty($_POST['nazwisko'])) {
                $nazwisko_blad = "Proszę podać email";
            }
            else {
                $nazwisko = $_POST['nazwisko'];
            }
        }
        if($_SERVER['REQUEST_METHOD']=='POST') {
            if (empty($_POST['strona'])) {
                $strona_blad = "Proszę podać stronę";
            }
            else {
                $strona = $_POST['strona'];
            }
        }
        */


        if ($_SERVER['REQUEST_METHOD']=='POST') {
            if (empty($_POST['plec']))
            {
                $kto_blad = "Wybierz jedną opcję";
                $valid_input = false;
            }
            else {
                $kto = $_POST['plec'];
            }
        }
        if ($_SERVER['REQUEST_METHOD']=='POST') {
            if (empty($_POST['miasta']))
            {
                $miasta_blad = "Wybierz jedną opcję";
                $valid_input = false;
            }
            else {
                $miasta = $_POST['miasta'];
            }
        }
        if ($_SERVER['REQUEST_METHOD']=='POST') {
            if ($valid_input)
            {
                if (file_exists($filename))
                {
                    $myfile = fopen($filename, 'a');
                }
                else
                {
                    $myfile = fopen($filename, 'w');
                }
                $mydata = $imie . ' | ' . $nazwisko . ' | ' . $strona . ' | '
                    . implode(',', $miasta) . ' | ' .  implode('', $kto) . ' | '
                    . date('Y-m-d H:i:s') . "\n";
                fwrite($myfile, $mydata);
                fclose($myfile);
                $valid_message = ' Dane z formularza zostały zapisane do pliku ' . $filename;
            }
        }

        ?>

        <label for="imie">Login</label>
        <span style="color: red">*  <?=$imie_blad?></span><br>
        <input type="text" id="imie" name="imie" placeholder="podaj login" value="<?=$imie?>"><br><br>

        <label for="nazwisko">Email</label>
        <span style="color: red">*  <?=$nazwisko_blad?></span><br>
        <input type="text" id="nazwisko" name="nazwisko" placeholder="podaj email" value="<?=$nazwisko?>"><br><br>

        <label for="strona">Strona internetowa</label>
        <span style="color: red">*  <?=$strona_blad?></span><br>
        <input type="text" id="strona" name="strona" placeholder="podaj stronę" value="<?=$strona?>"><br><br>

        <label for="miasta">Wybierz miasto/miasta</label>
        <span style="color: red">* <?=$miasta_blad?></span>
        <br>
        <input type="checkbox" id="warszawa" name="miasta[]" value="warszawa"
            <?php if ($miasta && strstr(implode('', $miasta), 'warszawa')) echo 'checked';?>>
        <label for="warszawa">Warszawa</label><br>
        <input type="checkbox" id="poznan" name="miasta[]" value="poznan"
            <?php if ($miasta && strstr(implode('', $miasta), 'poznan')) echo 'checked';?>>
        <label for="poznan">Poznań</label><br>
        <input type="checkbox" id="gdansk" name="miasta[]" value="gdansk"
            <?php if ($miasta && strstr(implode('', $miasta), 'gdansk')) echo 'checked';?>>
        <label for="gdansk">Gdańsk</label><br>
        <input type="checkbox" id="szczecin" name="miasta[]" value="szczecin"
            <?php if ($miasta && strstr(implode('', $miasta), 'szczecin')) echo 'checked';?>>
        <label for="szczecin">Szczecin</label><br><br><br>

        <label for="asdf" >Wybierz jedną opcję </label>
        <span style="color: red">* <?=$kto_blad?></span>
        <br>
        <input type="radio" id="kobieta" name="plec[]" value="kobieta"
            <?php if ($kto && strstr(implode('', $kto), 'kobieta')) echo 'checked';?>>
        <label for="kobieta">kobieta</label><br>
        <input type="radio" id="mężczyzna" name="plec[]" value="mężczyzna"
            <?php if ($kto && strstr(implode('', $kto), 'mężczyzna')) echo 'checked';?>>
        <label for="mężczyzna">mężczyzna</label><br>
        <input type="radio" id="nic" name="plec[]" value="nie chcę podawać"
            <?php if ($kto && strstr(implode('', $kto), 'nie chcę podawać')) echo 'checked';?>>
        <label for="nic">nie chcę podawać</label><br><br>
        <input type="submit" value="Wyślij">
        <p style="color: red">
        <?php
        echo "$valid_message";
        ?>
        </p>
    </fieldset>
</form>
</body>
</html>