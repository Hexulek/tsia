<!doctype html>
<html lang="en">
<head>
    <title>wykopki</title>
    <meta charset="UTF-8">
</head>
<body>
<h1> Kupie mefedron </h1>
<form action="formularzxdd.php" method="post">
    <fieldset style="border: 5px solid green;">
        <legend>Ankieta</legend>
        <?php
        $imie = $nazwisko = $kto = '';
        $imie_blad = $nazwisko_blad = $kto_blad = '';
        if($_SERVER['REQUEST_METHOD']=='POST') {
            if (empty($_POST['imie'])) {
                $imie_blad = "Proszę wpisać imię";
            }
            else {
                $imie = $_POST['imie'];
            }
        }
        if($_SERVER['REQUEST_METHOD']=='POST') {
            if (empty($_POST['nazwisko'])) {
                $nazwisko_blad = "Proszę wpisać nazwisko";
            }
            else {
                $nazwisko = $_POST['nazwisko'];
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
        ?>
        <label for="imie">Imię</label>
        <span style="color:red;">* <?=$imie_blad?></span><br>
        <input type="text" id="imie" name="imie" value="<?=$imie?>"><br>
        <label for="nazwisko">Nazwisko</label>
        <span style="color: red">*  <?=$nazwisko_blad?></span><br>
        <input type="text" id="nazwisko" name="nazwisko" value="<?=$nazwisko?>"><br>
        <label for="asdf" >Wybierz jedną opcję </label>
        <span style="color: red">* <?=$kto_blad?></span>
        <br>
        <input type="radio" id="uczeń" name="profesja[]" value="uczen" <?php if ($kto && strstr(implode('', $kto), 'uczen')) echo 'checked';?>>
        <label for="uczeń">uczeń</label><br>
        <input type="radio" id="absolwent" name="profesja[]" value="absolwent" <?php if ($kto && strstr(implode('', $kto), 'absolwent')) echo 'checked';?>>
        <label for="absolwent">absolwent</label><br>
        <input type="radio" id="nauczyciel" name="profesja[]" value="nauczyciel" <?php if ($kto && strstr(implode('', $kto), 'nauczyciel')) echo 'checked';?>>
        <label for="nauczyciel">nauczyciel</label><br>
        <input type="radio" id="pracownik_administracji" name="profesja[]" value="pracownik_administracji" <?php if ($kto && strstr(implode('', $kto), 'pracownik_administracji')) echo 'checked';?>>
        <label for="pracownik_administracji">pracownik administracji</label><br>
        <input type="submit" value="Wyślij">
    </fieldset>
</form>
</body>
</html>