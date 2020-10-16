<?php

// Questão 7
// Dadas duas strings, encontre o
// número de caracteres comuns entre elas.

//Exemplo

//Para $s1 = "aabcc"e $s2 = "adcaa", o retorno deve ser 3.
//As strings têm 3 caracteres comuns 2 "a" e 1"c".

function commonCharacterCount($s1, $s2)
{

    $common = 0;

    $s1 = str_split($s1);
    $s2 = str_split($s2);

    /**
     * Tentei usar essa função de intersecção, mas não deu certo.
     */
    // $common = count(array_intersect($s1, $s2));

    foreach ($s1 as $value1) {
        $aux = 0;

        foreach ($s2 as $value2) {

            if ($value1 == $value2) {
                $common += 1;
                echo $s2[$aux] . PHP_EOL;
                array_splice($s2, $aux, 1);
                break;
            }
            $aux++;
        }
    }

    return $common;
}

var_dump(commonCharacterCount("zzzz", "zzzzzzz"));