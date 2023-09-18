<h1>Edytuj dane tabeli dzialy</h1>
<div class="column2">
    <?php
    $Id_dzial = $_GET['id'];
    $Nazwa = $_GET['Nazwa'];


    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {

        $Nazwa = $_POST['Nazwa'];
        $query = "UPDATE `dzialy` SET `Nazwa` = '".$Nazwa."' WHERE `dzialy`.`Id_dzial` = '$Id_dzial'";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "Poprawnie zedytowałeś rekord";
            echo '<br><a href="?page=dzialy">Wróć do strony TABELA DZIAŁY</a>';
        } else {
            echo "Błąd edycji";
        }

    } else {
        echo '<form action="?page=dzialy_edytuj&id='.$Id_dzial.'&Nazwa='.$Nazwa.'" method="post">
            <table>
                <tr><td>Id_dzial</td><td><input type="text" name="Id_dzial" value="'.$Id_dzial.'" disabled </td></tr>
                <tr><td>Nazwa</td><td><input type="text" name="Nazwa" id="Nazwa" value="'.$Nazwa.'"></td></tr>
                <tr><td colspan="2"><center><button type="submit"/>Zapisz<button></center></td></tr>
            </table>
        </form>';}
    ?>
</div>

