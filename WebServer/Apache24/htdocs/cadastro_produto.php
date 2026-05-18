<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produtos</title>
</head>
<body>

<h1>Cadastro de Produtos</h1>
<form method="post" action="SalvarProduto.php">
    <label>Nome do Produto</label>
    <input type="text" name="nome" placeholder="Digite o Produto" />
    <br />
    <label>Preço</label>
    <input type="text" name="preco" placeholder="Digite o Preço" />
   <br />
    <label>Quantidade</label>
    <input type="number" name="quantidade" />
    <br />
    <input type="submit" value="Cadastrar" />
</form>
<form method="post" action="visualizar_produtos.php">
    <input type="submit" value="Listar Produtos" />
</form>
</body>
</html>