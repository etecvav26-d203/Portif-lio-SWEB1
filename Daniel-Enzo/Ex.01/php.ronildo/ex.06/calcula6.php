<?php

function fibonacci($n) {
    $sequencia = [];

    if ($n >= 1) $sequencia[] = 0;
    if ($n >= 2) $sequencia[] = 1;

    for ($i = 2; $i < $n; $i++) {
        $sequencia[] = $sequencia[$i-1] + $sequencia[$i-2];
    }

    return $sequencia;
}

?>
