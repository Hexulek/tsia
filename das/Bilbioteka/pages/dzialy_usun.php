<h1>Edytuj dane tabeli działy</h1>

<?php
$Id_dzial = $_GET['id'];
$Nazwa = $_GET['Nazwa'];
if ($_SERVER["REQUEST_METHOD"] == "POST") // Zapisz dane z formularza do bazy [INSERT]
{

    $query = "DELETE FROM dzialy WHERE `dzialy`.`Id_dzial` = '$Id_dzial'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "Udało Ci się usunąć rekord";
        echo '<br><br><a href="?page=dzialy">Wróć do strony TABELA DZIAŁY</a>';
    } else {
        echo "Błąd usuwania";
    }
} else {
    echo '<form action="?page=dzialy_usun&id='.$Id_dzial.'" method="post">
       <center><br><p><b>Jesteś pewien, że chcesz usunąć ten rekord?</b></p>
       <form action="?page=dzialy_edytuj&id='.$Id_dzial.'&Nazwa='.$Nazwa.'" method="post">
            <table>
                <tr><td>Id_dzial</td><td><input type="text" name="Id_dzial" value="'.$Id_dzial.'" disabled </td></tr>
                <tr><td>Nazwa</td><td><input type="text" name="Nazwa" id="Nazwa" value="'.$Nazwa.'" disabled></td></tr>
                
            </table>
        </form>
    
       <table>
        <br><br><tr><td colspan="2" style="text-align: center"><button type="submit">USUŃ</button></td>
       </table></center>
    </form>';}
?>