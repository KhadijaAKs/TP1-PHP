<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        
    <label >Nombre 1 :</label>
        <input type="number"  name="n"><br>
        <label >Nombre 2 :</label>
        <input type="number"  name="m">
        <br>
        <button type="submit" >Calculer</button>
    </form>
    <?php
        $n=(float)$_GET['n'];
        $m=(float)$_GET['m'];
        echo "<h2>Les résultats :</h2>";
        echo "<p>Somme : ".($n+$m)."</p>" ;   
        echo "<p>Différence : ".($n-$m)."</p>" ;  
        echo "<p>Produit : ".($n*$m)."</p>" ;  
        echo "<p>Quotient : ".($n/$m)."</p>" ; 
        echo "<p>Reste de la division : ".($n%$m)."</p>" ;  
    
    
    
    
    ?>
    
</body>
</html>