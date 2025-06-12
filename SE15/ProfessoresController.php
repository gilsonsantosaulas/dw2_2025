<?php
require_once 'db.php';

$professoresController=new ProfessoresController();

$acao = $_GET['acao'] ?? 'index';
switch ($acao) {
    case 'novo':
        $professoresController->novo(); 
        break;
    case 'salvar':
        $professoresController->salvar(); 
        break;
    default:
        $professoresController->index(); 
}

class ProfessoresController {

    public function index() {
        $pdo = getConnection();
        $stmt = $pdo->query("SELECT * FROM professores"); 
        $professores = []; 
        while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $professores[] = [
                            'id' => $linha['id'],  
                            'nome' => $linha['nome'],  
                            'disciplina' => $linha['disciplina'] 
            ];
        }
        include '_cabecalho.php';
        include 'listaProfessores.php'; 
        include '_rodape.php';
    }

    public function novo() {
        include '_cabecalho.php';
        include 'formProfessores.php'; 
        include '_rodape.php';
    }

    public function salvar() {
        $pdo = getConnection();
        $stmt = $pdo->prepare(
                            "INSERT INTO 
                            professores (nome, disciplina) 
                            VALUES (:nome, :disciplina)" 
        ); 
        $stmt->execute([
            ':nome' => $_POST['nome'],
            ':disciplina' => $_POST['disciplina']
        ]); 
        header("Location: ProfessoresController.php?acao=index"); 
    }    


}
