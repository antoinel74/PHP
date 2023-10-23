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
function capitalize($word)
{
    /* return ucfirst($word); */
    return mb_convert_case($word, MB_CASE_TITLE, "utf-8");
}

$uncap = "émile";
echo '<h2>Capitalizer</h2>' . capitalize($uncap);

// Display the current year
echo '<h2>Current year :</h2>' . date('d/m/y h:i:s');

// Make a sum function 
function sum($n1, $n2)
{
    if (is_int($n1) && is_int($n2)) {
        return $n1 + $n2;
    } else {
        echo 'Error! : argument is not a number.';
    }
}

$number1 = 24;
$number2 = 1;

echo '<h2>Sum calculator: </h2>';
echo sum($number1, $number2);

// Acronym maker 
function acronymer($input)
{
    $acronym = '';
    $words = explode(" ", $input);

    foreach ($words as $word) {
        $acronym .= strtoupper($word[0]); // string to upper
    }
    return $acronym;
}

echo '<h2>Acronymer</h2>';
$input = "In Code We Trust";
echo 'Input : ' . $input;
echo ' Output : ' . acronymer($input);


// Replace 'e' with 'æ'
echo '<h2>Replace a with ae</h2>';

function replaceLetter($word)
{
    /*     $wordbreak = str_split($word); */
    $replacedWord = str_replace('a', 'æ', $word);
    /*     $replacedWord = implode('', $replacedLetter); */
    return $replacedWord;
}

$input = "cacotrophie";
echo replaceLetter($input);

// Revert last exercices 
echo '<h2>Replace æ with a</h2>';

function replaceAE($word)
{
    $replacedWord = str_replace('æ', 'ae', $word);
    return $replacedWord;
}

$input2 = "cæcotrophie";
echo replaceAE($input2);

// Add a class and a error msg + info as default value
function showMsg($message, $cssClass)
{
    if ($cssClass === 'info' || $cssClass === 'error' || $cssClass === 'warning') {
        return "<div class='$cssClass'>$message</div>";
    } else {
        return "<div class='info'>$message</div>";
    }
}

echo '<h2>Display a msg error + appropriated class</h2>';
echo showMsg('Incorrect email adress', "error");
echo showMsg('Valid email adress', "info");
echo showMsg('You password has been leaked!', "warning");

// Decapitalize a string 
$capString = "STOP YELLING I CAN'T HEAR MYSELF THINKING!!";
echo '<h2>Decapitalize a string</h2>';
echo strtolower($capString);

// Function to calculate cone volume
echo '<h2>Calculate the volume of a cone</h2>';

function coneVolume($ray, $height)
{
    $volume = $ray * $ray * 3.14 * $height * (1 / 3);
    echo '<p>The volume of a cone which ray is ' . $ray . ' and height is ' . $height . ' is ' . $volume . ' cm3</p>';
    return $volume;
}

coneVolume(5, 2);
coneVolume(3, 4);
