<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="verificar.php" method="post">
            <h4>Nomes de carros e seus consumos por km</h4>
            <?php 
                for($i=0; $i<3; $i++) {
                    echo "<p>";
                    echo "<input type='text' name='nomes_carros[]' placeholder='Carro'>";
                    echo "<input type='text' name='consumo_carros[]' placeholder='Consumo'>";
                    echo "</p>";
                }
            ?>
            <button type="submit">Resultado</button>
        </form>
    </body>
</html>
