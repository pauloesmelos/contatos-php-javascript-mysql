<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="paulo melos">
    <meta name="description" content="site para armazenar contatos - feito com php, mysql e js">
    <meta name="keywords" content="contatos, full stack, php, mysql, js">
    <title>Contatos - Novo</title>
</head>
<body>
    <?php include_once("templates/header.php") ?>
    <section class="sec-new">
        <div class="text">
            <h1 class="title">Novo contato</h1>
            <p>Preencha os campos para cadastrar um novo contato</p>
        </div>
        <form action="config/process.php" method="POST">
            <input type="hidden" name="type" value="create"/>
            <input type="text" name="name" placeholder="Digite o nome" />
            <input type="text" name="number" placeholder="Digite o telefone" />
            <textarea name="description" placeholder="Digite a descrição"></textarea>
            <button class="btn-cadastro">Cadastrar contato</button>
        </form>
    </section>
</body>
<?php include_once("templates/footer.php") ?>
</html>