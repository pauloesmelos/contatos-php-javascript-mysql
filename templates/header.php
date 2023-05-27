<?php
    include_once("./config/url.php");
?>
<head>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<header>
    <nav class="nav">
        <h2 style="color: #fff; position: absolute; font-weight: lighter">Contatos Online</h2>
        <ul class="ul">
            <li><a href="<?= $URL ?>index.php">Home</a></li>
            <li><a href="<?= $URL ?>create.php">Novo contato</a></li>
            <li><a href="https://www.github.com" target="_blank">Código fonte</a></li>
        </ul>
    </nav>
</header>