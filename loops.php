<?php

// While loop
$number = 1;
while ($number <= 120) {
    echo $number . ' ';
    $number++;
}


// For loop
for ($number = 1; $number <= 120; $number++) {
    echo $number . ' ';
}

// Display array using loops 
$collegues = ["Valentin", "Pierre", "Tom", "Matthias", "Layla", "Elisabeth", "Liwdine", "Jean-Michel"];

foreach ($collegues as $value) {
    echo $value . ' ';
}
