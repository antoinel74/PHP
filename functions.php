<?php
// String shuffle
$str = 'This is going to be shuffled !';
$str = str_shuffle($str);

// Mixing letters"

echo '<h2>Mixing Letter exercice</h2>';
$text = "According to a researcher (sic) at Cambridge University , it doesn't matter in what order the letters in a word are , the only important thing is that the first and last letter be at the right place . The rest can be a total mess and you can still read it without problem . This is because the human mind does not read every letter by itself but the word as a whole .";

$words = explode(" ", $text);
/* print_r($words); */

function shuffleWord($word)
{
    $wLength = strlen($word);

    if ($wLength <= 3) {
        return $word;
    }

    $firstLetter = $word[0];
    $lastLetter = $word[$wLength - 1];
    $midLetters = substr($word, 1, -1);
    $midLetters = str_shuffle($midLetters);

    $output = $firstLetter . $midLetters . $lastLetter;
    return $output;
}
/* TESTING : shuffleWord("Michele"); */

foreach ($words as $key => $word) {
    $words[$key] = shuffleWord($word);
}

$finalOutput = implode(' ', $words);
echo $finalOutput;
echo '<br>';

// Capitalize the first letter 

$uncap = "émile";

function capitalize($word)
{
    /* return ucfirst($word); */
    return mb_convert_case($word, MB_CASE_TITLE, "utf-8");
}

echo capitalize($uncap);
