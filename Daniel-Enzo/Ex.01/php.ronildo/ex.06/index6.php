<?php
require_once "calcula.php";

$resultado = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = intval($_POST["n"]);
    $resultado = fibonacci($n);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci</title>
</head>
<body>

<h2>Digite um número n:</h2>

<form method="post">
    <input type="number" name="n" required>
    <input type="submit" value="Calcular">
</form>

<?php if (!empty($resultado)): ?>
    <h3>Resultado:</h3>
    <p>
        <?php
        foreach ($resultado as $num) {
            echo $num . " ";
        }
        ?>
    </p>
<?php endif; ?>

</body>
</html>