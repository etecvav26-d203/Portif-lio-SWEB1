<?php
require_once "calcula.php";

$resultado = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = intval($_POST["n"]);
    $resultado = gerarLinhas($n);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Linhas Numéricas</title>
</head>
<body>

<h2>Digite um número n:</h2>

<form method="post">
    <input type="number" name="n" required>
    <input type="submit" value="Gerar">
</form>

<?php if (!empty($resultado)): ?>
    <h3>Resultado:</h3>
    <pre>
<?php
foreach ($resultado as $linha) {
    echo implode(" ", $linha) . "\n";
}
?>
    </pre>
<?php endif; ?>

</body>
</html>