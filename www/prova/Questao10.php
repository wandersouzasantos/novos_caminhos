<?php

// Questão 10

// Escreva uma função que inverta os caracteres
// entre parênteses (possivelmente aninhados)
// na string de entrada.

// As strings de entrada sempre serão bem
// formadas com ()s correspondentes .

// Exemplo

// Para inputString = "(bar)", a saída deve ser "rab"
// Para inputString = "foo(bar)baz", a saída deve ser "foorabbaz"

// Para inputString = "foo(bar)baz(blim)",
// a saída deve ser "foorabbazmilb"

function reverseInParentheses($inputString)
{
    do {

        $inicio = strrpos($inputString, "(") + 1;
        $fim = strrpos($inputString, ")");

        $inputString = substr_replace(
            $inputString,
            strrev(substr($inputString, $inicio, $fim - $inicio)),
            $inicio - 1,
            $fim - $inicio + 2
        );
    } while (strrpos($inputString, "("));


    return $inputString;
}

echo reverseInParentheses("foo(bar(baz))blim");