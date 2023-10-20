<?php
// Drill exercices for PHP Array //
$recipes = [
    "Pasta",
    "Meatballs",
    "Fries",
    "Chocolate",
    "Sushi",
];
print_r($recipes);

$movies = [
    "La Soupe aux Choux",
    "Schindler's List",
    "The Pianist",
    "Ben-Hur",
    "Trainspotting",
];
print_r($movies[1]);

$mother = array(
    'age' => 54,
    'firstname' => 'Nathalie',
    'lastname' => 'VDNP',
    'hobbies' => [
        'Reading',
        'Cooking'
    ],
);

$me = array(
    'age' => 27,
    'firstname' => 'Antoine',
    'lastname' => 'Lansman',
    'hobbies' => [
        'Music', 'Art', 'Code'
    ],
    'mother' => $mother
);
// Add a hobbies 
$me['hobbies'][] = 'taxidermy';
$me['hobbies'][3] = 'It was a joke!';

echo '<pre>';
print_r($me);
echo '</pre>';

$meHobbies = count($me['hobbies']);
$motherHobbies = count($mother['hobbies']);

echo 'Total : ';
echo $meHobbies + $motherHobbies;

// Array operations // 
$me = [
    'hobbies' => [
        'Art',
        'Music',
        'Code'
    ]
];
$soulmate = [
    'hobbies' => [
        'Art',
        'Drawing',
        'Reading',
    ]
];

// perform array operation
$possible_hobbies_via_intersection = array_intersect($me['hobbies'], $soulmate['hobbies']);
$possible_hobbies_via_merge = array_merge($me['hobbies'], $soulmate['hobbies']);

echo '<pre>';
print_r($possible_hobbies_via_intersection);
print_r($possible_hobbies_via_merge);
echo '</pre>';

// DRILL
$web_dev = [
    'frontend' => [],
    'backend' => []
];
$web_dev['frontend'][] = 'XTML';
$web_dev['frontend'][] = "Ruby on Rails";
$web_dev['backend'][] = "Ruby on Rails";
$web_dev['frontend'][] = 'CSS';
$web_dev['frontend'][] = 'FLASH';
$web_dev['frontend'][] = 'Javascript';
$web_dev['backend'][] = 'Javascript';
$web_dev['frontend'][0] = 'HTML';
unset($web_dev['frontend'][3]);

// fix index
$web_dev['frontend'] = array_values($web_dev['frontend']);


echo '<pre>';
print_r($web_dev);
echo '</pre>';
