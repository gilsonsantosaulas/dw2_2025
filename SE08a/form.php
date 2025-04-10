<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="verificar_respostas.php" method="post">
            <h4>Respostas da Prova</h4>
            <?php 
                for($i=0; $i<10; $i++) {
                    $numero_nota = $i+1;
                    echo "<input type='text' name='respostas[]' placeholder='Resposta $numero_nota'>";
                }
            ?>

            <h4>Gabarito da Prova</h4>
            <?php 
                for($i=0; $i<10; $i++) {
                    $numero_nota = $i+1;
                    echo "<input type='text' name='gabarito[]' placeholder='Gabarito $numero_nota'>";
                }
            ?>
            <button type="submit">Resultado</button>
        </form>
    </body>
</html>
