<?php

$valores = $_POST["n"] ?? [];

$listaPositivos = [];
$listaNegativos = [];

foreach ($valores as $valor) {
    if ($valor >= 0) {
        array_push($listaPositivos, $valor);
    } else {
        array_push($listaNegativos, $valor);
    }
}


echo "<h3>Números Positivos:</h3>";
echo implode(" ", $listaPositivos);


echo "<h3>Números Negativos:</h3>";
echo implode(" ", $listaNegativos);

?>