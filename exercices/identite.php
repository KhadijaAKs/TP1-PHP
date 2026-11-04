<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #div1{
            width:320px;
            border:2px solid blue;
            border-radius:10px;
            padding:20px;
            margin-top:20px;
            background-color:beige;
        }
        h3{
            text-align:center;
            color:red;
            font-family:verdana;
        }
    </style>


</head>
<body>
    <form method="get">
        <label>Nom :</label>
        <input type="text" name="nom"><br>
         <label>Prénom :</label>
        <input type="text" name="pr"><br>
         <label>Date de naissance :</label>
        <input type="date" name="dn"><br>
         <label>Ville :</label>
        <input type="text" name="ville"><br>
         <label>Profession :</label>
        <input type="text" name="prof"><br>
        <button type="submit">Afficher la carte ID</button>
    </form>
    <?php
        $nom=$_GET['nom'];
        $pr=$_GET['pr'];
        $daten=$_GET['dn'];
        $ville=$_GET['ville'];
        $prof=$_GET['prof'];

        echo "<div id='div1'><h3>Carte ID :</h3>";
        echo "<p>Nom : $nom </p>";
        echo "<p>Prénom : $pr </p>";
        echo "<p>Date de naissance : $daten </p>";
        echo "<p>Ville : $ville </p>";
        echo "<p>Profession : $prof </p>";
        echo "</div>"







    ?>
</body>
</html>