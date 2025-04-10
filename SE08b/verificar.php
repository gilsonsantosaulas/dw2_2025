<?php 
    $carros = $_POST['nomes_carros'];
    $consumo = $_POST['consumo_carros'];
    $maior_consumo=0;
    $indice_maior=0;
    for($i=0;$i<count($carros);$i++) {
        if($consumo[$i]>$maior_consumo) {
            $maior_consumo = $consumo[$i];
            $indice_maior = $i;
        }
    }
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
                Carros
            </td>
            <td>
                Consumo
            </td>
        </tr>
        <?php 
            for($i=0;$i<count($carros);$i++) {
                echo "<tr>";
                if($i == $indice_maior) {
                    echo "<td><strong>$carros[$i]</strong></td>";
                } else {
                    echo "<td>$carros[$i]</td>";
                }
                echo "<td>$consumo[$i]</td>";
                echo "</tr>";
            }
        ?>
    </table>

</body>
</html>