<?php
function generateWord($min, $max)
{
    $length = rand($min, $max);
    $char = 'abcdefghijklmnopqrstuvxyz';
    $word = '';

    for ($ym = 0; $ym < $length; $ym++) {
        $randomChar = $char[rand(0, strlen($char) - 1)];
        $word .= $randomChar;
    }
    return $word;
}
if (isset($_GET['gen'])) {
    $word1 = generateWord(1, 5);
    $word2 = generateWord(7, 15);
} else {
    $word1 = '<h1>Generate a new word !</h1>';
    $word2 = " ";
}

echo '<h1>Random Word Generator<h1>
<p>' . $word1 . '</p>
<p>' . $word2 . '</p>
<form method="get">
<input type="submit" name="gen" value="gen">
</form>';
