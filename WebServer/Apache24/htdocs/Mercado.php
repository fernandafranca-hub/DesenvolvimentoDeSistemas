<?php
class Produto
{
    private string $nome;
    private float $preco;
    private int $quantidade;

    public function cadastrarProduto($nomeProduto, $precoProduto, $quantidadeProduto)
    {
        $this->nome = $nomeProduto;
        $this->preco = $precoProduto;
        $this->quantidade = $quantidadeProduto;

        require_once("Connect.php");
        $obj = new Connect();
        $pdo = $obj->conectarBanco();

        $sql = "INSERT INTO produtos(nome, preco, quantidade) VALUES(:nome, :preco, :quantidade);";

        $stmt = $pdo->prepare($sql);

        $stmt->bindValue(':nome', $this->nome);
        $stmt->bindValue(':preco', $this->preco);
        $stmt->bindValue(':quantidade', $this->quantidade);

        if($stmt->execute())
            return TRUE;
        else
            return FALSE;
    }

    public function listarProdutos()
    {
        require_once("Connect.php");

        $obj = new Connect();
        $pdo = $obj->conectarBanco();

        $sql = "SELECT * FROM produtos;";

        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        $tuplas = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $tuplas;
    }
}
?>