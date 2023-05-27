<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="paulo melos">
    <meta name="description" content="site para armazenar contatos - feito com php, mysql e js">
    <meta name="keywords" content="contatos, full stack, php, mysql, js">
    <link rel="stylesheet" href="view.css">
    <title>Contatos - Visualizar</title>
</head>
<body>
    <?php
        include_once("templates/header.php");
        include_once("config/process.php");
    ?>
    <section class="view">
        <h1 class="title">Visualizar</h1>
        <p>Visualizando os dados do contato</p>
    </section>
    <section class="card">
        <h2>Nome: <?= $contact["name"] ?></h2>
        <p>Telefone: <?= $contact["number"] ?></p>
        <p>Descrição: <?= $contact["description"] ?></p>
    </section>
</body>
<?php include_once("templates/footer.php") ?>
</html>