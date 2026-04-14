<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> Exercício 7 </title>
    </head>
    <body>
        <h1> Números positivos e Negativos <h1>
            <form action="calcula.php" method="POST">
                <label> Digite 8 números inteiros: </label>
                <br><br>

                 <?php
    for ($i = 1; $i <= 8; $i++) {
        echo "Número $i: <input type='number' name='n[]' required><br><br>";
    }
    ?>

    <button type="submit">Separar</button>
</form>

    </body>
</html>