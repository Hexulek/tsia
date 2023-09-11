<h1>Tabela czytelnicy</h1>

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
<div class="column2">



    <?php
    $query = 'SELECT * FROM czytelnicy';
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        echo '<table>';
        echo '<tr><th>Numer czytelnika</th><th>Imię i nazwisko</th><th>Data_ur</th><th>Ulica</th><th>Kod</th><th>Miasto</th><th>Data_zapisania</th></tr>';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr><td>' . $row['Nr_czytelnika'] . '</td><td>'
                . $row['Imie'] . ' ' . $row['Nazwisko'] . '</td><td>' . $row['Data_ur'] . '</td><td>' . $row['Ulica'] . '</td><td>' . $row['Kod'] . '</td><td>' . $row['Miasto'] . '</td><td>' . $row['Data_zapisania'] . '</td></tr>';
        }
        echo '</table>';
    } else {
        echo 'brak danych';
    }
    ?>
</div>