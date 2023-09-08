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