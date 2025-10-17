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
    
<h1> <?php echo "les variables";?></h1>
<?php 
$nom = "John";
$age = 30;
$isPremium = True;

echo "<p>".$nom."</p>";
echo "<p>".$age."<p>";

echo "Ton nom est $nom et tu as $age ans.<br>";

$age ++;
echo "L'année prochaine tu auras $age ans.<br>";
$age += 5;
echo "Dans 5 ans tu auras $age ans.<br>";
$age = $age + 4;
echo "Dans 4 ans tu auras $age ans.<br>";

$tab= [11,2 ,25,8,9,12];
$tab[4] = 15; // Ajoute un élément à l'index 4
array_push($tab, 20); // Ajoute un élément à la fin du tableau
var_dump($tab);
echo "<br>";
array_pop($tab); // Supprime le dernier élément du tableau
var_dump($tab);
echo "<br>";
sort($tab); // Trie le tableau par ordre croissant
echo "le tableau trié <br>";
var_dump($tab) ;
echo "<p>".$tab[0]."</p>"; // Affiche le premier élément du tableau
var_dump($tab); // Affiche le type et la valeur de la variable
echo "<br>";
echo "nombre d'elements " .count($tab); // Affiche le nombre d'éléments dans le tableau
?>
</body>
</html>