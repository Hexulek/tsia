<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Łączenie z bazą danych</title>
    <style>
        table {
            border-collapse: collapse;
            border: solid black 1px;
        }
        td {
            border-collapse: collapse;
            border: solid black 1px;
        }
        th {
            border-collapse: collapse;
            border: solid black 1px;
        }
    </style>
</head>
<body>
    <?php
    $servername = "127.0.0.1";
    $username = "styczen";
    $password = "styczen123";
    $database = "styczen";
        $conn = mysqli_connect($servername, $username, $password, $database);
        if (!$conn)
        {
            die('Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: '
            . mysqli_connect_error());
        }

        $query = 'SELECT Nr_czytelnika, Imie, Nazwisko FROM czytelnicy';
        $result = mysqli_query($conn, $query);


    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<p>Numer: ' . $row['Nr_czytelnika']
                . '. Imię i nazwisko: ' . $row['Imie'] . ' ' . $row['Nazwisko'] . '</p>';
        }
    } else {
        echo 'brak danych';}
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        echo '<ol style="list-style-type: circle;">';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<li>Numer: ' . $row['Nr_czytelnika']
                . '. Imię i nazwisko: ' . $row['Imie'] . ' ' . $row['Nazwisko'] . '</li>';
        }
        echo '</ol>';
    } else {
    echo 'brak danych';}
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        echo '<table>';
        echo '<tr><th>Numer czytelnika</th><th>Imię i nazwisko</th></tr>';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr><td>' . $row['Nr_czytelnika'] . '</td><td>'
                . $row['Imie'] . ' ' . $row['Nazwisko'] . '</td></tr>';
        }
        echo '</table>';
    } else {
        echo 'brak danych';
    }
    $query = 'SELECT Tytul, Imie, Nazwisko FROM ksiazki';
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<p>Książka <i>' . $row['Tytul']
                . '</i> zostala napisana przez <b>' . $row['Imie'] . ' ' . $row['Nazwisko'] . '.' . '</b></p>';
        }
    } else {
        echo 'brak danych';}

    $queryy = 'SELECT Nazwa FROM stanowiska';
    $resultt = mysqli_query($conn, $queryy);
    if (mysqli_num_rows($resultt) > 0) {
        echo '<table>';
        echo '<tr><th>Nazwy stanowisk</th><th>Liczba liter w nazwie</th></tr>';
        while ($row = mysqli_fetch_assoc($resultt)) {
            echo '<tr><td>' . $row['Nazwa'] . '</td><td>'
                . strlen($row['Nazwa']) . '</td></tr>';
        }
        echo '</table>';
    } else {
    echo 'brak danych';}

    mysqli_close($conn);
    ?>
</body>
</html>