<?php

function findFrequency()
{
    $rawInput = file_get_contents('input.txt');
    $input = explode(PHP_EOL, $rawInput);
    $result = 0;
    $resultArr = [];
    while (true) { 
        foreach ($input as $i) {
            $result += intval($i);
            if (in_array($result, $resultArr)) {
                print_r($result);
                return false;
            } else {
                $resultArr[] = $result;
            }
            
        }
    }

}

findFrequency();