<?php 
    $respostas = $_POST['respostas'];
    $gabarito = $_POST['gabarito'];
    $acertos=0;
    for($i=0;$i<count($respostas);$i++) {
        if($respostas[$i] == $gabarito["$i"]) {
            $acertos++;
        }
    }
    echo "Respostas corretas: " . $acertos;
?>