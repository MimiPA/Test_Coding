<?php
function duplicate($string)
{
    $letters = str_split($string);
    $result  = array_fill_keys($letters, 1);
    $previous = '';

    foreach ($letters as $letter) {
        if ($letter == $previous) {
            $result[$letter]++;
        }
        $previous = $letter;
    }
    arsort($result);
    return key($result) . " " . reset($result) . "x";
}

$string = "wellcome";
echo duplicate($string);
