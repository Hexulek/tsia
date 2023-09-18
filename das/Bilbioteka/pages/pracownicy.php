<h1>Tabela pracownicy</h1>


<?php
//$servername = "127.0.0.1";
//$username = "StyczenMateusz";
//$password = "Mateuszs221";
//$database = "StyczenMateusz";
//$conn = mysqli_connect($servername, $username, $password, $database);
//if (!$conn)
//{
//    die('Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: '
//        . mysqli_connect_error());
//}
?>
<div class="column2">



    <?php
    $query = 'SELECT * FROM pracownicy JOIN stanowiska ON pracownicy.Id_stanowisko = stanowiska.Id_stanowisko ORDER BY Wynagrodzenie desc';
    $result = mysqli_query($conn, $query);
    echo '<p>Zawiera ' . mysqli_num_rows($result) . ' wierszy</p>';
    if (mysqli_num_rows($result) > 0) {
        echo '<table>';
        echo '<tr><th>ID Pracownika</th><th>Nazwisko</th><th>Imie</th><th>Stanowisko</th><th>Miasto</th><th>Data Zatrudnienia</th><th>Wynagrodzenie</th></tr>';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr><td>' . $row['Id_pracownika'] . '</td><td>'
                . $row['Nazwisko'] . '</td><td>' . $row['Imie'] . '</td><td>' . $row['Nazwa'] . '</td><td>' . $row['Miasto'] . '</td><td>' . $row['Data_zatrudnienia'] . '</td><td>' . $row['Wynagrodzenie'] . '</td></tr>';
        }
        echo '</table>';
    } else {
        echo 'brak danych';
    }
    ?>
</div>
