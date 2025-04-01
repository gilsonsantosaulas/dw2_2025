<?php
  $nome = $_POST["nome"];
  $nota1 = $_POST["nota1"];
  $nota2 = $_POST["nota2"];
  $media = ($nota1+$nota2)/2;
  $situacao = "";
  if($media >= 6) {
    $situacao = "Aprovado";
  } else {
    $situacao = "Reprovado";
  }

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
                <td>Nota 1</td>
                <td>Nota 2</td>
                <td>Média</td>
                <td>Situação</td>
            </tr>
        </thead>
        <tbody>
        <tr>
                <td><?php echo $nome; ?></td>
                <td><?php echo $nota1; ?></td>
                <td><?php echo $nota2; ?></td>
                <td><?php echo $media; ?></td>
                <td><?php echo $situacao; ?></td>
            </tr>
        </tbody>
    </table>

</body>

</html>