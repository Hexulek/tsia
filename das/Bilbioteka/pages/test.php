<?php
$servername = "127.0.0.1";
$username = "StyczenMateusz";
$password = "Mateuszs221";
$database = "StyczenMateusz";
$mysqliProceduralConection = mysqli_connect($servername, $username, $password, $database);

if (!$mysqliProceduralConection)
{
    die("Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: "
        . mysqli_connect_error());
}
echo '<p>Połączono z bazą danych <b>' . $database . '</b> na serwerze <b>' . $servername . '</b><br>';
echo 'Host info: ' . $mysqliProceduralConection->host_info . '<br>';
echo 'MySQLi stat: ' . mysqli_stat($mysqliProceduralConection) . '</p>';

mysqli_close($mysqliProceduralConection);
?>