<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="verifica_planos.php" method="post">
            <h4>Nomes Pacientes e Planos de Saúde</h4>
            <?php 
                for($i=0; $i<3; $i++) {
                    $numero_nota = $i+1;
                    echo "<input type='text' name='nomes_pacientes[]' placeholder='Nome paciente $numero_nota'>";
                    echo "<input type='text' name='planos_saude[]' placeholder='Plano de saúde $numero_nota'>";
                    echo "<br>";
                }
            ?>
            <button type="submit">Verificar Plano de Saúde</button>
        </form>
    </body>
</html>
