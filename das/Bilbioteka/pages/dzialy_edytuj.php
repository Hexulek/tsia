<h1>Edytuj dane tabeli dzialy</h1>
<div class="column2">
    <?php
    $id_dzial = $_GET['id'];


    if ($_SERVER["REQUEST_METHOD"] == "POST") // Zapisz dane z formularza do bazy [INSERT]
    {

        $Nazwa = $_POST['Nazwa'];
        $query = "INSERT INTO dzialy (Nazwa) VALUES ('".$Nazwa."')";
        echo $query;

        if (mysqli_query($conn, $query)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }

    } else {


        ?>
        <form action="?page=dzialy_dodaj" method="post">
            <table>
                <tr><td>Id_dzial</td><td><input type="text"</td></tr>
                <tr><td>Nazwa</td><td><input type="text" name="Nazwa" ></td></tr>
                <tr><td colspan="2"><center><button type="submit">Zapisz</button></center></td></tr>
            </table>
        </form>
        <?php
    }
    ?>
</div>

