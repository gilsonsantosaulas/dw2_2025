<?php

	$numero1 = $_GET["n1"];
	$numero2 = $_GET["n2"];
	$resSoma = $numero1+$numero2;
	$resMul = $numero1*$numero2;
	$resDiv = $numero1/$numero2;
	$resSub = $numero1-$numero2;
?>
<body>
	<h1>
		Resultado Soma: 
		<?php echo $resSoma; ?>
	</h1>
	<h1>
		Resultado Subtração: 
		<?php echo $resSub; ?>
	</h1>
	<h1>
		Resultado Multiplicação: 
		<?php echo $resMul; ?>
	</h1>
	<h1>
		Resultado Divisão: 
		<?php echo $resDiv; ?>
	</h1>
</body>