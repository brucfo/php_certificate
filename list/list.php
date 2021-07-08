<?php

$fruits = ['maça', 'uva', 'melancia'];

list(2 => $a , 0 => $b, 1 => $c) = $fruits;

/**
 * PHP 7.1+
 * [2 => $d , 0 => $e, 1 => $f] = $fruits;
 * [, , $j] = $fruits;
 */

list(, $g, $h) = $fruits;

echo "$a - $b - $c" . PHP_EOL;

echo "$g - $h" . PHP_EOL;


