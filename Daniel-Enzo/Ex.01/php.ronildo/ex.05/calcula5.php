<?php

function fatorial($n) {
    $fat = 1;

    for ($i = 1; $i <= $n; $i++) {
        $fat *= $i;
    }

    return $fat;
}

function somaFatoriais($numeros) {
    $soma = 0;

    foreach ($numeros as $n) {
        $soma += fatorial($n);
    }

    return $soma;
}

?>