<!DOCTYPE html>
<html lang="pl">
<head>
<title>wykopki</title>
</head>
<body>
<style>
    h4 {
        color: red;
    }
</style>
<h1>Kupię mefedron </h1>

<fieldset style="border: solid green 2px">
    <legend>Ankieta</legend>
    <?php
    if ($_SERVER['REQUEST_METHOD']==='POST')
    {
        echo     '<form action="lekcjaokok.php">
        <label for="imie">Imię:</label> 
        <br>
        <input type="text" id="imie" name="imie" value=" ">
        <br>
        <label for="nazwisko">Nazwisko:</label> 
        <br>
        <input type="text" id="nazwisko" name="nazwisko" value=" "> 
        <br><br>
        <p>Wybierz jedną opcję:</p> 
        <input type="radio" id="uczen" name="stanowisko" value="uczen">
        <label for="uczen">uczeń</label>
        <br>
        <input type="radio" id="absolwent" name="stanowisko" value="absolwent">
        <label for="absolwent">absolwent</label>
        <br>
        <input type="radio" id="nauczyciel" name="stanowisko" value="nauczyciel">
        <label for="nauczyciel">nauczyciel</label>
        <br>
        <input type="radio" id="nauczyciel" name="stanowisko" value="nauczyciel">
        <label for="nauczyciel">pracownik administracji</label>
        <br><br>
        <input type="submit" value="Wyślij">
    </form>';
    }
    else
        echo
        '    <form action="lekcjaokok.php">
        <label for="imie">Imię:</label>
        <br>
        <input type="text" id="imie" name="imie" value=" "> 
        <br>
        <label for="nazwisko">Nazwisko:</label>
        <br>
        <input type="text" id="nazwisko" name="nazwisko" value=" ">
        <br><br>
        <p>Wybierz jedną opcję</p>
        <input type="radio" id="uczen" name="stanowisko" value="uczen">
        <label for="uczen">uczeń</label>
        <br>
        <input type="radio" id="absolwent" name="stanowisko" value="absolwent">
        <label for="absolwent">absolwent</label>
        <br>
        <input type="radio" id="nauczyciel" name="stanowisko" value="nauczyciel">
        <label for="nauczyciel">nauczyciel</label>
        <br>
        <input type="radio" id="nauczyciel" name="stanowisko" value="nauczyciel">
        <label for="nauczyciel">pracownik administracji</label>
        <br><br>
        <input type="submit" value="Wyślij">
    </form>'
    ?>
</body>
</html>
