<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Ex1</title>
</head>
<body>

<?php 
$name="Roberto";
$age="22";
$eyeColor="basic brown";
$family = array(
    0 => 'Antoine', 
    1 => 'Lisa', 
    2 => 'Mousse (cat)', 
    3 => 'Léo (cat)', 
    4 => 'Jimmy (fish)');
$isHungry = true;
$isHungryText = $isHungry ? "Yes" : "No";


    echo "
    <p>Hi. My name is {$name}!</p> 
    <p>I'm {$age} years old</p>
    <p>My eyes are {$eyeColor} </p>
    <p>The first person in my family is {$family[1]} </p>
    <p>Am I Hungry ? {$isHungryText} ! </p>

    "
      ?>



</body>
</html>



