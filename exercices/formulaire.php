
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        <label for="nom">Votre nom : </label>
        <input type="text" id="nom" name="nom">
        <button type="submit" >Envoyer</button>
    </form>
    <?php
        if(isset($_GET['nom'])){
            $nom=$_GET['nom'];
            echo "<p>Bonjour $nom </p>";
        }
    ?>
</body>
</html>