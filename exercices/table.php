<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=*, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
    <label>Saisie le nombre :</label>
    <input type="number" name="a">
    <button type="submit">Afficher</button>
    </form>
    <?php
        $a=(float)$_GET['a'];
        echo "<table><th> Table de multiplication $a:</th> ";
        for($i=0;$i<=10;$i++){
            $res=$a*$i;
            echo "<tr>";
            echo "<td>$a * $i = $res</td>";
            echo "</tr>";
        }
        echo "</table>";
    
    ?>
</body>
</html>