<!DOCTYPE html>
<html>
<head>

</head>
<body>
<h1>Kupię mefedron </h1>

    <fieldset>
        <legend>lorem50</legend>
<?php
if ($_SERVER['REQUEST_METHOD']==='POST')
{
    echo "<div class='tekst'>
        <h3>Oto wpisany tekst:</h3>";
    echo "<h4 style='font-style: italic; color: red'>" . $_POST['lorem'] . "</h4>";
        "</div>";
}
else
echo
    "<form method='POST' action='./formularz2.php'>
        
        
        <textarea name='lorem' id='lorem' cols='50' rows='5'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi consequuntur dicta, maiores quisquam quod repellat soluta ullam. At atque consectetur debitis deserunt dolorem dolores et excepturi fuga illum laborum laudantium magni necessitatibus nesciunt non nostrum, omnis porro praesentium quas quidem quis quod repellat reprehenderit sed ullam veniam vero voluptate voluptatum.
        </textarea>
        <br>
        <input type='submit' value='Wyślij'>
       
    </form>"
?>
</body>
</html>