<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Transformar temperatura</title>
</head>
<body>

  <h1>Tranforme Celcius e Farenhrait</h1>

  <form action="calcula.php" method="get">
    <label>diga qual a temperatura:</label>
    <input type="number" name="tm" step="any" required>
    <br><br>

    <label>informe o tipo:</label>
    <input type="char" name="tt" step="any" required>
    <br><br>

    <input type="submit" value="Calcular soma">
  </form>

</body>
</html>