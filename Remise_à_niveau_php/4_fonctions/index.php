<?php require("maths.php")  ?>

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
    <?php include("menu.html") ?>
<h1> <?php echo "les fonctions";?></h1>
<?php 

 
  $res1 = add(15,35);
 $res2 = substract(15,7);
 echo "Résultat 1 : $res1 <br>";
 echo "Résultat 2 : $res2 <br>";

 $noms="alice ,bob ,charlie";
 $liste_noms= explode(",",$noms); // transforme une chaîne de caractères en tableau
 var_dump($liste_noms);
 echo "<br>";
 echo ucfirst($liste_noms[0]); // met la première lettre en majuscule
 $file ="monimage.png";
 echo "<br>";
 echo substr($file, 0, -4); // Retourne un segment de chaîne
echo "<br>";
 $file2= "aba dfh zyi.png";
 echo str_replace(" ","-",$file2); // remplace les espaces par des tirets

?>
</body>
</html>