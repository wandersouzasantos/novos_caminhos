<?php

// Questão 2
// Considere a function incompleta abaixo e escreva um código que
// resolva o seguinte problema

//Dada uma váriavel $inputString, verifique se é um palíndromo .

//Exemplo

//Para inputString = "aabaa", o valor de retorno deve ser true;

//Para inputString = "abac", o valor de retorno deve ser false;

//Resultado booleano
// true se inputString é um palíndromo,
// false se caso contrário.

function checkPalindrome($inputString)
{

    for ($i = 0; $i < strlen($inputString); $i++) {

        if ($inputString[$i] <> $inputString[strlen($inputString) - 1 - $i]) {
            return false;
        }
        // if (substr($inputString, $i, 1) <> substr($inputString, -$i - 1, 1)) {
        //     return false;
        // }
    }

    return true;
}

$inputString = "zzzazzazz";

if (checkPalindrome($inputString)) {

    echo "A palavra {$inputString} é um palíndromo";
} else {

    echo "A palavra {$inputString} não é um palíndromo";
}