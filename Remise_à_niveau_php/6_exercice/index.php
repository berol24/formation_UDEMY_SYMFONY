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

<h1>TD QUIZZ </h1>
<form action="form.php" method="post">
    <h4> 1 + 1 ?</h4>
    <label for="1">1</label>
    <input type="radio" name="q1" value="1">
    <label for="">2</label>
    <input type="radio" name="q1" value="2">
    <label for="">3</label>
    <input type="radio" name="q1" value="3">
<hr/>
    <br><br> 
   <h4> 6 * 2 ?</h4>
    <label for="1">12</label>
    <input type="radio" name="q2" value="12" >
    <label for="">22</label>
    <input type="radio" name="q2" value="22">
    <label for="">32</label>
    <input type="radio" name="q2" value="32">

    <input type="submit" value="Valider">
</form>



</body>
</html>