<?php

// Questão 6
// Dada uma matriz de strings, 
// retorna outra matriz contendo
// todas as suas strings mais longas.

//Exemplo

// Se inputArray = ["aba", "aa", "ad", "vcd", "aba"], 
// o valor de retorno ["aba", "vcd", "aba"].

function allLongestStrings($inputArray)
{
    $tamMax = 0;

    foreach ($inputArray as $string) {

        if (strlen($string) > $tamMax) {
            $tamMax = strlen($string);
        }
    }

    $outputArray = [];

    foreach ($inputArray as $string) {
        if (strlen($string) == $tamMax) {
            array_push($outputArray, $string);
        }
    }
    return $outputArray;
}

$inputArray = ["a", "abc", "cbd", "zzzzzz", "a", "abcdef", "asasa", "aaaaaa"];

var_dump(allLongestStrings($inputArray));