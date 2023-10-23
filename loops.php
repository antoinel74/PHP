<?php
// While loop
$number = 1;
while ($number <= 120) {
    echo $number . ' ';
    $number++;
}

echo '<br>';

// For loop
for ($number = 1; $number <= 120; $number++) {
    echo $number . ' ';
}

echo '<br>';

// Display array using loops 
$collegues = ["Valentin", "Pierre", "Tom", "Matthias", "Layla", "Elisabeth", "Liwdine", "Jean-Michel"];

foreach ($collegues as $name) {
    echo $name . ' ';
}

echo '<br>';

// Display array loop 
$countries = [
    'BE' => 'Belgium',
    'GER' => 'Germany',
    'LUX' => 'Luxembourg',
    'FR' => 'France',
    'ESP' => 'Spain',
    'SWE' => 'Sweden',
    'NOR' => 'Norway',
    'GR' => 'Greece',
    'POR' => 'Portugal',
    'AUS' => 'Austria',
    'CZ' => 'Czech Republic',
    'SER' => 'Serbia'
];

echo '<h2>Choose your country :</h2>';
echo '<select name="country">';
foreach ($countries as $key => $country) {
    echo '<option value=" ' . $country . '">' . $key . '</option>';
}
echo '</select>';

echo '<br>';
