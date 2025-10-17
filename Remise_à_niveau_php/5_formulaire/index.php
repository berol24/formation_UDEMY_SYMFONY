

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-size: 18px;
        }
    </style>
</head>
<body> 

<h1> <?php echo "formulaire";?></h1>

<form action="form.php" method="post">
    <input type="text" name="nom" placeholder="votre nom">
    <input type="text" name="prenom" placeholder="votre prenom">
    <br><br> 
    <input type="submit" value="Valider">
</form>

</body>
</html>