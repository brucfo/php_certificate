<?php
/*
 * Combined Comparison (Spaceship Operator)
 *
 *  1 is returned if A is greater than B.
 *  0 is return if A is equal to B
 *  -1 is returned if B is greater than A
 *
 * Nas comparações de string é utilizada a tabela ASCII para deternimar qual é o maior valor.
 * A ordenação das strings segue o padrão de lexical order, comparando string por string até encontrar qual tem a maior
 * diferença.
 *
 * Exemplo
 *  a <=> b = -1
 *  - 'a' equivale 97 na tabela ASCII
 *  - 'b' equivale 98 na tabela ASCII
 *  - Portanto 'b' é maior que 'a', resultando no valor '-1' de acordo com as regras do combined comparison
 *
 */
$users = [
    'Bruno',
    'Diogo',
    'Brito',
    'Ane',
    'Ana',
];

/**
 * Ordena lista em ordem crescente
 *
 * @param array $list
 * @return array
 */
function orderAsc(array $list): array
{
    usort($list, function($currentName, $nextName) {
        /**
         * Exemplo:
         * Bruno <=> Diogo
         * 'B' é menor que 'D', portanto, o resultado desta comparação é '-1'
        */
        $result = $currentName <=> $nextName;
        echo "{$currentName} <=> {$nextName} = {$result}" . PHP_EOL;

        return $result;
    });

    return $list;
}

var_dump(orderAsc($users));
