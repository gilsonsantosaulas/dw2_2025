<?php
    
    index();

    function criar() {
       $produtos = [
            ['id' => 1, 'nome' => 'Mouse', 'preco' => 50],
            ['id' => 2, 'nome' => 'Teclado', 'preco' => 100],
            ['id' => 3, 'nome' => 'Monitor', 'preco' => 700],
            ['id' => 4, 'nome' => 'Notebook', 'preco' => 3500],
            ['id' => 5, 'nome' => 'Cabo HDMI', 'preco' => 30],
            ['id' => 6, 'nome' => 'Pen Drive', 'preco' => 40],
            ['id' => 7, 'nome' => 'HD Externo', 'preco' => 300],
            ['id' => 8, 'nome' => 'Webcam', 'preco' => 150],
            ['id' => 9, 'nome' => 'Fone de Ouvido', 'preco' => 80],
            ['id' => 10, 'nome' => 'Caixa de Som', 'preco' => 120],
        ];
        return $produtos;
    }

    function index() {
        $produtos = criar();
        include '_cabecalho.php';
        include 'listaProduto.php';
        include '_rodape.php';
    }



