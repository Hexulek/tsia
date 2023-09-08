<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box;
        }

        .column1 {
            float: left;
            width: 20%;
            padding: 10px;
            height: 960px;

        }
        .column2 {
            float: left;
            width: 80%;
            padding: 10px;
            height: 200px;

        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
    </style>
</head>
<body>


<div class="row">
    <div class="column1" style="background-color: lightblue;">
        <ul>
            <a href="index.php">Strona główna</a><br>
            <a href="?page=test">Test połączenia</a><br>
            <a href="#">Lista tabel</a><br>
            <a href="?page=czytelnicy">Tabela czytelnicy</a><br>
            <a href="?page=dzialy">Tabela działy</a><br>
            <a href="?page=ksiazki">Tabela książki</a><br>
            <a href="?page=pracownicy">Tabela pracownicy</a><br>
            <a href="?page=stanowiska">Tabela stanowiska</a><br>
            <a href="?page=wypozyczenia">Tabela wypożyczenia</a><br>
        </ul>

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