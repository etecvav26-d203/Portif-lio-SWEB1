<?php

$tm = $_GET ["tm"];
$tt = $_GET ["tt"];
$rsC = $_GET ["rsC"];
$rsF = $_GET ["rsF"];

?>



<!DOCTYPE html>

<html lang="pt-br">

<head>

<meta charset="UTF-8">

<title>Tranformacao</title>

</head>

<body>

<h1>Resultado da conversao</h1>
<?php
if ($tt = "C" ){
    $rsC = $tm * 1.8 + 32;
echo"A conversao de $tm$tt para fahrenheit é $rsC";


}else if($tt = "F"){
    $rsF = $tm / 1.8 -32;
    echo"A conversao de $tm$tt para Celcius é $rsF";
}
?>

<a href="index.php">Voltar</a>

</body>

</html>