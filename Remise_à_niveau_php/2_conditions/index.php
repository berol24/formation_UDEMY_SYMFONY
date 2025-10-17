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
    
<h1> <?php echo "les conditions";?></h1>
<?php 
$isPremium = true;
$age = 20;

if($isPremium && $age >= 18){
    echo "<h2>contenu premium</h2>";
} else {
    echo "<h2>Créer un compte  premium</h2>
      <button>S'inscrire</button>
    ";
}

if($age >= 18){
    echo "<p>Vous êtes majeur</p>";
} else {
    echo "<p>Vous êtes mineur</p>";
}
?>
</body>
</html>