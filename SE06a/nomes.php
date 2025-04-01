<?php
  $nome = $_POST["nome"];
  $sobre_nome = $_POST["sobre_nome"];

?>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>

<body>
    <table class="table table-bordered">
        <thead>
            <tr>
                <td>Nome</td>
                <td>Sobre Nome</td>
            </tr>
        </thead>
        <tbody>
        <tr>
                <td><?php echo $nome; ?></td>
                <td><?php echo $sobre_nome; ?></td>
            </tr>
        </tbody>
    </table>

</body>

</html>