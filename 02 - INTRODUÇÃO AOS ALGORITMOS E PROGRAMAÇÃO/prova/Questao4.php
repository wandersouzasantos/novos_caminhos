<?php

// Questão 4

// Gisifruno ganhou estátuas de diferentes tamanhos como
// presente da Mária de aniversário,
// cada estátua tendo um tamanho inteiro não negativo.
// Como ele gosta de fazer as coisas perfeitas, ele quer
// organizá-las da menor para a maior, de forma que cada
// estátua seja maior que a anterior exatamente em 1.
// Ele pode precisar de algumas estátuas adicionais 
// para conseguir isso. 
// Ajude-o a descobrir o número mínimo de estátuas
// adicionais necessárias.

//Exemplo

//Se statues = [6, 2, 3, 8], o valor
// de retorno deve ser 3.
// Gisifruno precisa de estátuas de tamanhos 4, 5 e 7
// ou seja de três estátuas

function makeArrayConsecutive2($statues)
{

    $needed = array();

    for ($i = 0; $i < count($statues) - 1; $i++) {
        sort($statues);
        if ($statues[$i] + 1 <> $statues[$i + 1]) {
            array_push($statues, $statues[$i] + 1);
            array_push($needed, $statues[$i] + 1);
        }
    }
    var_dump($needed);
    return count($needed);
}

echo "Quantidade de estátuas necessárias: " .
    makeArrayConsecutive2(array(6, 3));