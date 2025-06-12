<?php
require_once 'db.php';

$alunosController=new AlunosController();

$acao = $_GET['acao'] ?? 'index';
switch ($acao) {
    case 'novo':
        $alunosController->novo();
        break;
    case 'salvar':
        $alunosController->salvar();
        break;
    default:
        $alunosController->index();
}

class AlunosController {

    public function index() {
        $pdo = getConnection();
        $stmt = $pdo->query("SELECT * FROM alunos");
        $alunos = [];
        while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $alunos[] = [
                            'id' => $linha['id'], 
                            'nome' => $linha['nome'], 
                            'serie' => $linha['serie'],
                            'media' => $linha['media'],
                            'faltas' => $linha['faltas'],
            ];
        }
        include '_cabecalho.php';
        include 'listaAlunos.php';
        include '_rodape.php';
    }

    public function novo() {
        include '_cabecalho.php';
        include 'formAlunos.php';
        include '_rodape.php';
    }

    public function salvar() {
        $pdo = getConnection();
        $stmt = $pdo->prepare(
                            "INSERT INTO 
                            alunos (nome, serie, media, faltas) 
                            VALUES (:nome, :serie, :media, :faltas)"
        );
        $stmt->execute([
            ':nome' => $_POST['nome'],
            ':serie' => $_POST['serie'],
            ':media' => $_POST['media'],
            ':faltas' => $_POST['faltas']
        ]);
        header("Location: AlunosController.php?acao=index");
    }    


}
