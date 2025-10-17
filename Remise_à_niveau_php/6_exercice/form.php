<?php 

$q1 = strip_tags($_POST['q1']);
$q2 = strip_tags($_POST['q2']);

$score = 0;

if($q1 == 2){
    $score++;
}
if($q2 == 12){
    $score++;
}

echo "votre score est : " . $score."/2";
echo "<a href='index.php'> Recommencer</a>";
?>