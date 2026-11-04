<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        <label>Nombre 1 :</label>
        <input type="number" name="n1"><br>
         <label>Nombre 2 :</label>
        <input type="number" name="n2"><br>
        <label>Nombre 3 :</label>
        <input type="number" name="n3"><br>
        <button type="submit">Affichage</button>
    </form>
    <?php
        $n1=(float)$_GET['n1'];
        $n2=(float)$_GET['n2'];
        $n3=(float)$_GET['n3'];
        $moy=($n1+$n2+$n3)/3;
        echo "<p> Moyenne : $moy</p>";
        if($moy<10){
            echo "<p>Insuffisant </p>";
        }
        else if($moy>=10 && $moy<12){
             echo "<p>Passable </p>";
        }
        else if($moy>=12 && $moy<14){
             echo "<p>Assez bien</p>";
        }
        else if($moy>=14 && $moy<16){
             echo "<p>Bien </p>";
        }
        else if($moy>=16){
             echo "<p>Trés bien </p>";
        }
    
    
    ?>
</body>
</html>