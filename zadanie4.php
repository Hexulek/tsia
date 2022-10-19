<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wiek</title>
</head>
<body>

<pre>
<?php
$plusy=rand(0,10);
echo "$plusy <br>";
    if ($plusy == 1)
    {
        echo "+";
    }
    elseif ($plusy == 2)
    {
        echo "++";
    }
    elseif ($plusy == 3)
    {
        echo "+++";
    }
    elseif ($plusy == 4)
    {
        echo "++++";
    }
    elseif ($plusy == 5)
    {
        echo "+++++";
    }
    elseif ($plusy == 6)
    {
        echo "++++++";
    }
    elseif ($plusy == 7)
    {
        echo "+++++++";
    }
    elseif ($plusy == 8)
    {
        echo "++++++++";
    }
    elseif ($plusy == 9)
    {
        echo "+++++++++";
    }
    elseif ($plusy > 9)
    {
        echo "Wartość jest poza zakresem <0,10>";
    }
    elseif ($plusy < 1)
    {
        echo "Wartość jest poza zakresem <0,10>";
    }
    ?></pre>
</body>
</html>
