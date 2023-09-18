<h1>Tabela działy</h1>

<div class="column2">
    <?php
    $query = 'SELECT * FROM dzialy';
    $result = mysqli_query($conn, $query);
    echo '<p>Zawiera ' . mysqli_num_rows($result) . ' wierszy</p>';
    if (mysqli_num_rows($result) > 0) {
        echo '<table>';
        echo '<tr><th>Id_dzial</th><th>Nazwa</th><th><a class="add" href="?page=dzialy_dodaj">&#10010;</a></th><th>❌</th></tr>';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr><td>' . $row['Id_dzial'] . '</td><td>'
                . $row['Nazwa'] . '</td><td> <a href="?page=dzialy_edytuj&id='.$row['Id_dzial'].'&Nazwa='.$row['Nazwa'].'">edycja</a></td> 
                <td><a href="?page=dzialy_usun&id='.$row['Id_dzial'].'&Nazwa='.$row['Nazwa'].'">usuń</a></td></tr>';
        }
        echo '</table>';
    } else {
        echo 'brak danych';
    }
    ?>
</div>
