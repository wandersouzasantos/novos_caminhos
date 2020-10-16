<?php

// Questão 8

// Os números dos ingressos geralmente consistem
// em um número par de dígitos.
// Considere para essa questão que um número
// de bilhete é considerado de sorte
// se a soma da primeira metade dos dígitos
// for igual à soma da segunda metade.

// Dado um número de bilhete n, determine se é sorte ou não.

// Exemplo

// Para $n = 1230, o retorno deve ser  true;
// Para $n = 239017, o retorno deve ser false;

function isLucky($n)
{
    if (strlen($n) % 2 <> 0) {

        echo "Número de bilhete inválido";
        return false;
    }

    $n = strval($n);
    $metade = strlen($n) / 2;

    $n1 = str_split(substr($n, 0, $metade));
    $n2 = str_split(substr($n, $metade, strlen($n)));

    if (array_sum($n1) == array_sum($n2)) {
        return true;
    } else {

        return false;
    }
}

var_dump(isLucky(261534));