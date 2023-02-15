<!DOCTYPE html>
<html>
<head>
    <style>

    </style>
</head>
<body>

<form method="post" action="lekcja%20kolejna.php">
    <div class="spaces element">
        <label for="spaces">Usuń "białe" znaki</label>
        <input type="text" id="spaces" name="spaces" value=" "><br>
    </div>
    <div class="backslash element">
        <label for="backslash">Usuń ukośniki (backslash)</label>
        <input type="text" id="backslash" name="backslash" value=" "><br>
    </div>
    <div class="tag element">
        <label for="znacznik">Zmień znaki HTML na tzw. encje</label>
        <input type="text" id="znacznik" name="znacznik" value=" "><br><br>
    </div>
        <input type="submit" value="wyślij">
</form>
<div class="results">
<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {


    $spaces = $_POST['spaces'];
    $backslash = $_POST['backslash'];
    $tag = $_POST['znacznik'];

    var_dump($_POST['spaces']);
    var_dump(trim($spaces));

    var_dump($_POST['backslash']);
    var_dump(stripslashes($backslash));

    var_dump($_POST['znacznik']);
    var_dump(htmlspecialchars($tag));
}
?>
</div>
</body>
</html>

