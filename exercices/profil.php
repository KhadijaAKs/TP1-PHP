<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $prenom="Ahmed";
    $nom="Ali";
    $age=20;
    $formation="Informatique";
    $annee="2 eme annee";
    $moyenne=14.5;
     if($moyenne>=10){
        $result="Annee validee";
    }
    else $result="Annee non validee";

    echo "Prfoil etudiant <br> <p>Nom Complet : $prenom $nom </p> 
    <p>Age : $age ans</p>
    <p>Formation : $formation</p>
    <p>Annee : $annee </p> 
    <p>Moyenne : $moyenne </p>
    <p>Resultat : $result </p>";
   
   

    
    ?>
</body>
</html>