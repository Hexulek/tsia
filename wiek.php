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

<style>
    h1 {
        border: 2px solid black;
    }
    h2{
        border: 2px dotted navy;
    }
</style>
<?php
$wiek=rand(0,100);?>
<h1 style="border: 2px solid black; text-align: center;">Mam <?php echo $wiek ?> lat.</h1>
<h2 style="border: 2px dotted navy; text-align: center;">
<?php
if ($wiek < 18)
{
   echo "Jeszcze nie możesz głosować.";
}
 elseif ($wiek < 21)
{
   echo "Możesz tylko głosować.";
}
 elseif ($wiek < 30)
{
    echo "Możesz głosować i kandydować do Sejmu.";
}
 elseif ($wiek < 35)
{
    echo "Możesz głosować i kandydować do Sejmu i do Senatu.";
}
 elseif ($wiek >= 35)
{
    echo "Możesz głosować i kandydować do Sejmu i do Senatu oraz na Prezydenta.";
}
?></h2>
</body>
</html>