<!doctype html>
<html>
<table>
    <style>
        table {
            border-collapse: collapse;
        }
        td, tr {
            border: 2px solid black;
            padding: 20px;
        }
        td:nth-child(even), th:nth-child(even) {
            background-color: cyan;
        }
</style>
<?php
$day = array('pon', 'wto', 'śro', 'czw', 'pią', 'sob', 'nie');
foreach ($day as $value);
?>
<tr>
    <?php
    foreach ($day as $day) {
        echo '<td>'. $day. '</td>';
    }
    ?>
</tr>
</table>
<br>
<br>
<body>
<table>
    <caption> <?php echo date("t") . "<br>"; ?> </caption>
    <?php
    for($i=1;$i<=31;$i++)
    {
        if ($i%7==1) echo "<tr>";
        echo "<td>$i</td>";
        if ($i%7==0) echo "</tr>";
    }
    ?>
</table>
</body>
</html>
