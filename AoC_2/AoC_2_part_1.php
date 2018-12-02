<?php

function checksum()
{
    $rawInput = file_get_contents('input.txt');
    $input = explode(PHP_EOL, $rawInput);
    $twoLetters = $threeLetters = 0;
    foreach ($input as $i) {
        $i = str_split($i);
        $letterCount = array_count_values($i);
        if (in_array(2, $letterCount)) {
            $twoLetters++;
        }
        if (in_array(3, $letterCount)) {
            $threeLetters++;
        }
    }
    $result = $twoLetters * $threeLetters;
    echo $result . PHP_EOL;
}

checksum();