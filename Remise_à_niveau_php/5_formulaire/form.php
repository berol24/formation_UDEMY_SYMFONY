<?php 
// if(isset($_POST["nom"]) && isset($_POST["prenom"])){
//     if(!empty($_POST["nom"]) && !empty($_POST["prenom"])){
//      echo "<h1> Bonjour " . $_POST["prenom"] . " " . $_POST["nom"] ."</h1>";
//     }else{
//         echo "Veuillez renseigner les champs";
//     }
// }
echo "test";

$nom = strip_tags($_POST["nom"]);
if($nom != ""){
    echo "<h1> Bonjour " . $nom ."</h1>";
    echo "<a href='index.php'>Retour au formulaire</a>"; 
}
?>