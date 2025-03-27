<html>
  <head>
    <title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <?php
      $salario_minimo = $_POST["salario_minimo"];
	  $salario_funcionario = $_POST["salario_funcionario"];
      $qtde_salarios = $salario_funcionario/$salario_minimo; 
    ?>
   
    <table class="table table-bordered">
		<thead>
			<tr>
				<td>Salário Mínimo</td>
				<td>Salário Funcionário</td>
				<td>Quantidade de Salários Mínimos</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php echo $salario_minimo; ?></td>
				<td><?php echo $salario_funcionario; ?></td>
				<td><?php echo $qtde_salarios; ?></td>
			</tr>
		</tbody>
    </table>
  </body>
</html>