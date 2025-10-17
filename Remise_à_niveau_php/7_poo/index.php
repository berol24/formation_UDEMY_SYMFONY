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
<?php

include ('video.php');
// public string $title; // propriété accessible partout
//   protected string $desc ; // propriété accessible dans la classe et les classes héritées
//   private int $price ;// propriété accessible uniquement dans la classe



class Formation extends Video{
  public string $title; 
  private string $desc ; 
  private int $price ;

  public function __construct($t, $d, $p){
    $this->title = $t;
    $this->desc = $d;
    $this->price = $p;
    $this->url = "https://google.fr"; // Erreur : la propriété url est protégée

  }

  public function SetTitle($t){ // modifie le titre
    $this->title = $t;
  }

  public function GetTitle(){ // retourne le titre
    return $this->title;
  }

  public function SetPrice($p){ // modifie le prix
    if ($p < 10) {
        $p = 10;
    } 
    $this->price = $p;
  }

   public function GetPrice(){ // retourne le titre
    return $this->price;
  }
  
  public function SetUrl($u){
    //$this->url = "berol"; // si tu as dejà defini une methode SetUrl dans la classe mere tu peux la redéfinir ici , ça prend le dessus
    parent::SetUrl($u); // appelle la méthode SetUrl de la classe parente
    
}
    public function GetUrl(){
    return $this->url;
  }



}

$tuto1 = new Formation("HTML", "Apprenez le HTML", 199);
$tuto2 = new Formation("CSS", "Apprenez le CSS", 299);

var_dump($tuto1);
echo "<br>";
var_dump($tuto2);
echo "<br>";
echo "Titre du tuto 1 : " . $tuto1->title; 
echo "<br>";
echo "Titre du tuto 2 : " . $tuto2->title;
echo "<br>";
$tuto1->title = "HTML5"; // modification directe du titre

echo "Nouveau titre du tuto 1 : " . $tuto1->title;

echo "<br>";
echo $tuto1->GetTitle();
echo "<br>";
$tuto1->SetTitle("Nouveau HTML");
echo $tuto1->GetTitle();
echo "<br>";

$tuto1->SetPrice(5); // essaie de définir un prix inférieur à 10
echo "Prix du tuto 1 : " . $tuto1->GetPrice(); // affiche 10 car le setter impose un minimum
echo "<br>";
$tuto1->SetPrice(150); // définit un prix valide
echo "Nouveau prix du tuto 1 : " . $tuto1->GetPrice(); // affiche 150
echo "<br>";
$tuto1->SetUrl("https://exemple.com/video-html");
echo "URL de la vidéo du tuto 1 définie via le setter : ". $tuto1->GetUrl();
echo "<br>";
var_dump($tuto1);
?>    

</body>
</html>