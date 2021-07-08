<?php


$counter        = 0;
$segundoCounter = 0;
$max            = 5;

/**
 * incrimento ++ a esquerda adiciona o valor antes da compração ++$counter
 *
 * It will output
 * counter 1
 * counter 2
 * counter 3
 * counter 4
 */
while (++$counter < $max) {
    echo "counter $counter" . PHP_EOL;
}

/**
 * incrimento ++ a direita adiciona o valor depois da compração $counter++
 *
 * It will output
 * Segundo counter 1
 * Segundo counter 2
 * Segundo counter 3
 * Segundo counter 4
 * Segundo counter 5
 */
while ($segundoCounter++ < $max) {
    echo "Segundo counter $segundoCounter" . PHP_EOL;
}