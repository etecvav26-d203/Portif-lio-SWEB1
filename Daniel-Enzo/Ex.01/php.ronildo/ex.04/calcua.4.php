<?php

function gerarLinhas($n) {
    $linhas = [];

    for ($i = 1; $i <= $n; $i++) {
        $linha = [];

        for ($j = 1; $j <= $i; $j++) {
            $linha[] = $j;
        }

        $linhas[] = $linha;
    }

    return $linhas;
}

?>