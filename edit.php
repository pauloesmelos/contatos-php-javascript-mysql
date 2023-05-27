<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatos - Editar</title>
</head>
<body>
    <?php 
        include_once("templates/header.php");
        include_once("config/process.php");
    ?>
    <section class="sec-new">
        <div class="text">
            <h1 class="title">Editar contato</h1>
            <p>Preencha os campos para editar um contato</p>
        </div>
        <form action="config/process.php" method="POST">
            <input type="hidden" name="type" value="edit"/>
            <input type="hidden" name="id" value="<?= $contact["id"] ?>"/>
            <input type="text" name="name" placeholder="Digite o nome" value="<?= $contact["name"] ?>" />
            <input type="text" name="number" placeholder="Digite o telefone" value="<?= $contact["number"] ?>" />
            <textarea name="description" placeholder="Digite a descrição"><?= $contact["description"] ?></textarea>
            <button class="btn-cadastro">Editar contato</button>
        </form>
    </section>
    <?php include_once("templates/footer.php") ?>
</body>
</html>