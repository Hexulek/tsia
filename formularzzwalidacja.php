<!doctype html>
<html lang="en">
<head>
    <title>wykopki</title>
    <meta charset="UTF-8">
</head>
<body>
<h1> j384c phpa </h1>
<form action="formularzzwalidacja.php" method="post">
    <fieldset style="border: 1px solid darkgreen; background-color: lightgreen">
        <legend style="border: 1px solid darkgreen; background-color: lightgreen">Formularz z walidacją</legend>
        <?php
        $imie = $nazwisko = $kto = $strona = $miasta = '';
        $imie_blad = $nazwisko_blad = $kto_blad = $strona_blad = $miasta_blad = '';

        if($_SERVER['REQUEST_METHOD']=='POST') {
            if (empty($_POST['imie'])) {
                $imie_blad = "Proszę podać login";
            }
            else {
                $imie = $_POST['imie'];
            }
        }
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
        if ($_SERVER['REQUEST_METHOD']=='POST') {
            if (empty($_POST['profesja'])) {
                $kto_blad = "Wybierz jedną opcję";
            }
            else {
                $kto = $_POST['profesja'];
            }
        }
        if ($_SERVER['REQUEST_METHOD']=='POST') {
            if (empty($_POST['miasta'])) {
                $miasta = "Wybierz jedną opcję";
            }
            else {
                $miasta = $_POST['miasta'];
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
        <input type="checkbox" id="warszawa" name="miasto[]" value="warszawa"
            <?php if ($miasta && strstr(implode('', $miasta), 'warszawa')) echo 'checked';?>>
        <label for="warszawa">Warszawa</label><br>
        <input type="checkbox" id="poznan" name="miasto[]" value="poznan"
            <?php if ($miasta && strstr(implode('', $miasta), 'poznan')) echo 'checked';?>>
        <label for="poznan">Poznań</label><br>
        <input type="checkbox" id="gdansk" name="miasto[]" value="gdansk"
            <?php if ($miasta && strstr(implode('', $miasta), 'gdansk')) echo 'checked';?>>
        <label for="gdansk">Gdańsk</label><br>
        <input type="checkbox" id="szczecin" name="miasto[]" value="szczecin"
            <?php if ($miasta && strstr(implode('', $miasta), 'szczecin')) echo 'checked';?>>
        <label for="szczecin">Szczecin</label><br><br><br>

        <label for="asdf" >Wybierz jedną opcję </label>
        <span style="color: red">* <?=$kto_blad?></span>
        <br>
        <input type="radio" id="kobieta" name="plec[]" value="kobieta" <?php if ($kto && strstr(implode('', $kto), 'kobieta')) echo 'checked';?>>
        <label for="kobieta">kobieta</label><br>
        <input type="radio" id="mężczyzna" name="plec[]" value="mężczyzna" <?php if ($kto && strstr(implode('', $kto), 'mezczyzna')) echo 'checked';?>>
        <label for="mężczyzna">mężczyzna</label><br>
        <input type="radio" id="nic" name="plec[]" value="nie chcę podawać" <?php if ($kto && strstr(implode('', $kto), 'nic')) echo 'checked';?>>
        <label for="nic">nie chcę podawać</label><br><br>
        <input type="submit" value="Wyślij">
    </fieldset>
</form>
</body>
</html>