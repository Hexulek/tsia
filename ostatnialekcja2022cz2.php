<!doctype html>
<html>
<body>
<style>
    table {
        border-collapse: collapse;
    }
    td {
        border: 2px solid black;
        padding: 20px;
    }
</style>
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
