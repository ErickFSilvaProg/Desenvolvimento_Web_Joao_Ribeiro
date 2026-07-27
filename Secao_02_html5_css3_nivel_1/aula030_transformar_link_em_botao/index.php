<?php

require_once "program.php"

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $tituloPagina ?></title>
    <!-- CSS -->
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    
    <section class="layout">
        <p>Olá, <?= $name ?>!</p>
        <a href="https://google.com" class="link">Visitar Google</a>
    </section>
    
</body>

</html>