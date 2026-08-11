<?php
if (!isset($pageTitle)) {
    $pageTitle = "Criptografia em PHP";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Página educativa sobre criptografia em PHP">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header class="site-header">
    <div class="header-content">
        <div class="brand">
            <span class="brand-icon">🔒</span>
            <span>CriptoPHP</span>
        </div>
        <nav>
            <a href="index.php">Início</a>
            <a href="index.php#tipos">Tipos</a>
            <a href="index.php#atividade">Atividade</a>
        </nav>
    </div>
</header>
