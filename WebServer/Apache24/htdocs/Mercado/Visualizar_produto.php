<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        include_once("Produto.php");
        $obj = new Produto();
        $exec = $obj->listarProdutos();

        if(!$exec)
            {
                $exec = [];
            }
    }
    else
        {
            header("location: cadastro_produto.php");
            exit;
        }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Produtos</title>
    <link rel="stylesheet" href="./CSS/visualizar.style.css">
</head>
<body>

<h1>Lista de Produtos</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Produto</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Descrição</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach($exec as $produto): ?>
        <tr>
            <td><?= $produto["id_produto"]; ?></td>
            <td><?= $produto["nome"]; ?></td>
            <td>R$ <?= $produto["preco"]; ?></td>
            <td><?= $produto["quantidade"]; ?></td>
            <td><?= $produto["descricao"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<a href="cadastro_produto.php">
    <button>VOLTAR</button>
</a>

</body>
</html>