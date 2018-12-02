<?php

function checksum()
{
    $rawInput = file_get_contents('input.txt');
    $input = explode(PHP_EOL, $rawInput);
    $result = [];
    foreach ($input as $element) {
        foreach ($input as $compare) {
            if (levenshtein($element, $compare) == 1) {
                $result[] = [
                    $element,
                    $compare
                ];
            }
        }
    }
    $result = $result[0];
    $result = array_unique($result);

    $lettersA = str_split($result[0]);
    $lettersB = str_split($result[1]);

    $diffChars = array_unique(array_diff($lettersA, $lettersB));

    $finChars = str_replace($diffChars, '', $result[0]);
    echo $finChars . PHP_EOL;

}

checksum();