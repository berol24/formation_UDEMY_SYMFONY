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
    
<h1> <?php echo "les boucles";?></h1>
<?php 

echo "<h2> boucle for </h2>";

$tab= [11,2 ,25,8,9,12];
for($i=0; $i < count($tab); $i++){
    echo "<p>Element $i : ".$tab[$i]."</p>";
}

echo "<h2>boucle foreach</h2>";
foreach($tab as $index => $value){
    echo "<p>Element $index : $value</p>";
}
// foreach($tab as $value){
//     echo "<p> $value</p>";
// }


echo "<h2>boucle while</h2>";
$i = 0;
while($i < count($tab)){
    echo "<p>Element $i : ".$tab[$i]."</p>";
    $i++;
}
?>
</body>
</html>