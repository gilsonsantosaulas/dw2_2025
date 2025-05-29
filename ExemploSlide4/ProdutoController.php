<?php
require_once 'db.php';

$produtosController=new ProdutoController();

$acao = $_GET['acao'] ?? 'index';
switch ($acao) {
    case 'novo':
        $produtosController->novo();
        break;
    case 'salvar':
        $produtosController->salvar();
        break;
    default:
        $produtosController->index();
}


class ProdutoController {

    public function index() {
        $pdo = getConnection();
        $stmt = $pdo->query("SELECT * FROM produtos");
        $produtos = [];
        while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $produtos[] = [
                            'id' => $linha['id'], 
                            'nome' => $linha['nome'], 
                            'preco' => $linha['preco']
            ];
        }
        include '_cabecalho.php';
        include 'listaProduto.php';
        include '_rodape.php';
    }

    public function novo() {
        include '_cabecalho.php';
        include 'formProduto.php';
        include '_rodape.php';
    }

    public function salvar() {
        $pdo = getConnection();
        $stmt = $pdo->prepare(
                            "INSERT INTO 
                            produtos (nome, preco) 
                            VALUES (:nome, :preco)"
        );
        $stmt->execute([
            ':nome' => $_POST['nome'],
            ':preco' => $_POST['preco']
        ]);
        header("Location: ProdutoController.php?acao=index");
    }    


}
