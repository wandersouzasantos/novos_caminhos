<?php

// Questão 9

// Algumas pessoas estão em uma fila no parque.
// As pessoas e as arvores no parque serão representadas
// por um vetor.

// O valor -1 representa uma árvore
// valor positivo representa a altura de uma pessoa

// Existem árvores entre as pessoas e as árvores 
// não não podem ser movidas.

// Sua tarefa é reorganizar as pessoas por suas alturas
// em uma ordem não decrescente, sem mover as árvores.

// Considere que as pessoas podem ser muito altas!

//Exemplo

//Se $a = [-1, 150, 190, 170, -1, -1, 160, 180], 
// o retorno deve ser [-1, 150, 160, 170, -1, -1, 180, 190].

function sortByHeight($a)
{
    asort($a);
    $arvores = [];
    $pessoas = [];
    $output = [];
    foreach ($a as $key => $value) {

        if ($value == -1) {

            array_push($arvores, $key);
        } else {

            array_push($pessoas, $value);
        }
    }
    ksort($a);

    for ($i = 0; $i < count($a); $i++) {

        if ($i == current($arvores)) {
            array_push($output, -1);
            next($arvores);
            continue;
        }
        array_push($output, current($pessoas));
        next($pessoas);
    }
    return $output;
}

echo implode(sortByHeight([23, 54, -1, 43, 1, -1, -1, 77, -1, -1, -1, 3]), ", ");