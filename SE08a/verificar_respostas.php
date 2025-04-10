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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <title>Document</title>
</head>
<body>
   
    <table class="table table-bordered">
        <tr>
            <td>
                Respostas
            </td>
            <td>
                Gabarito
            </td>
            <td>
                Correção
            </td>
        </tr>
        <?php 
            for($i=0;$i<count($respostas);$i++) {
                echo "<tr>";
                echo "<td>$respostas[$i]</td>";
                echo "<td>$gabarito[$i]</td>";
                if($respostas[$i]==$gabarito[$i]) {
                    echo "<td>Acertou</td>";
                } else {
                    echo "<td>Errou</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>

</body>
</html>