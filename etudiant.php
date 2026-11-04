<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        <label for="nom">Nom : </label>
        <input type="text" id="nom" name="nom">
        <label for="prenom">Prenom :</label>
        <input type="text" id="prenom" name="prenom">
        <label for="age">Age : </label>
        <input type="text" id="age" name="age">
        <label for="formation">Formation :</label>
        <input type="text" id="formation" name="formation">
         <label for="moyenne">Moyenne :</label>
        <input type="text" id="moyenne" name="moyenne">
        <button type="submit">Afficher la fiche</button>
    </form>
    <?php
        if(isset($_GET['nom'],$_GET['prenom'],$_GET['age'],$_GET['formation'],$_GET['moyenne'])){
            $nom=$_GET['nom'];
            $prenom=$_GET['prenom'];
             $age=$_GET['age'];
            $formation=$_GET['formation'];
             $moyenne=$_GET['moyenne'];
            if($moyenne<10){
                $resultat="Ajourné";
            }else{
                $resultat="Admis";
            }
            echo "<h2>Fiche Etudiant</h2>";
            echo "<p>Nom : $nom </p>";
        
            echo "<p>prenom : $prenom </p>";
            echo "<p>Age : $age ans</p>";
            echo "<p>Formation : $formation </p>";
            echo "<p>moyenne : $moyenne </p>";
            echo "<p>Resultat : $resultat </p>";
        }
    
    
    ?>
</body>
</html>