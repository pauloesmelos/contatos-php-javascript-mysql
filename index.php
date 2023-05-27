<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="paulo melos">
    <meta name="description" content="site para armazenar contatos - feito com php, mysql e js">
    <meta name="keywords" content="contatos, full stack, php, mysql, js">
    <link rel="stylesheet" href="style.css"/>
    <title>Contatos - Home</title>
</head>
<body>
    <?php 
        include_once("templates/header.php");
        include_once("config/process.php");
    ?>
    <section class="section-table">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Número</th>
                    <th>Descrição</th>
                    <th>Editar</th>
                    <th>Visualizar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody class="tbody">
                <?php foreach($contacts as $contato) : ?>
                    <tr class="tr-tbody">
                        <td> <?= $contato["id"] ?> </td>
                        <td> <?= $contato["name"] ?> </td>
                        <td> <?= $contato["number"] ?> </td>
                        <td> <?= $contato["description"] ?> </td>
                        <td>
                            <a href="edit.php?id=<?= $contato["id"] ?>">
                                <img src="imgs/edit.svg" width="20px" style="cursor: pointer">
                            </a>
                        </td><!--tive que colocar css in js pois não renderizava o css-->
                        <td>
                            <a href="view.php?id=<?= $contato["id"] ?>">
                                <img src="imgs/view.svg" width="20px" style="cursor: pointer" class="icon">
                            </a>
                        </td>
                        <td>
                            <form action="config/process.php" method="POST">
                                <input type="hidden" name="id" value="<?= $contato["id"] ?>"/>
                                <input type="hidden" name="type" value="delete"/>
                                <button type="submit" style="background-color: transparent; border: none">
                                    <img src="imgs/delete.svg" width="20px" style="cursor: pointer">
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</body>
    <?php include_once("templates/footer.php") ?>
</html>