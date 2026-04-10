/* Alunos: Bruno Bandeira Marques e Heitor de Lima Dias
verificar se o número esculhido pelo usuário está entre 100 e 200
*/

<?php

$nv = $_GET["nv"];

if($nv >= 100 && $nv <= 200){
    echo"O numero esta entre esses valores";
}else{
    echo"O numero nao esta entre esses valores";
}

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>
<title> Verificado</title>

</head>

<body>

<a href="index.php">Voltar</a>

</body>

</html>
