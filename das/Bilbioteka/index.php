<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box;
        }




        .row:after {
            content: "";
            display: table;
            clear: both;
        }
    </style>
</head>
<body>

<?php
$servername = "127.0.0.1";
$username = "StyczenMateusz";
$password = "Mateuszs221";
$database = "StyczenMateusz";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn)
{
    die('Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: '
        . mysqli_connect_error());
}
?>


<div class="row">
    <div class="column1" style="background-color: aqua">
    <nav>
        <ul>
            <a class="linki" href="index.php">Strona główna</a><br>
            <a class="linki" href="?page=test">Test połączenia</a><br>
            <a class="linki" href="#">Lista tabel</a><br>
            <a class="linki" href="?page=czytelnicy">Tabela czytelnicy</a><br>
            <a class="linki" href="?page=dzialy">Tabela działy</a><br>
            <a class="linki" href="?page=ksiazki">Tabela książki</a><br>
            <a class="linki" href="?page=pracownicy">Tabela pracownicy</a><br>
            <a class="linki" href="?page=stanowiska">Tabela stanowiska</a><br>
            <a class="linki" href="?page=wypozyczenia">Tabela wypożyczenia</a><br>
        </ul>
    </nav>
    </div>

    <div class="column2" style="background-color: wheat;">

        <?php
        if(isset($_GET['page']))
        {
            if (file_exists('pages/' . $_GET['page'] . '.php'))
                include ('pages/' . $_GET['page'] . '.php');
            else
                echo '<h2> Ta strona nie istnieje </h2>';
        }
        ?>
    </div>
</div>



</body>
</html>