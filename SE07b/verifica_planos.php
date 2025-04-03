<?php 
    $nomes_pacientes = $_POST['nomes_pacientes'];
    $planos_saude = $_POST['planos_saude'];
    $atendimentos_particular=0;
    $atendimentos_plano_saude=0;
    for($i=0;$i<count($nomes_pacientes);$i++) {
        if($planos_saude[$i]=="particular"){
            $atendimentos_particular++;
        } else {
            $atendimentos_plano_saude++;
        }
    }
    echo "Atendimento particular: ".$atendimentos_particular . "<br>";
    echo "Atendimentos plano de saúde: " . $atendimentos_plano_saude;
    echo "<h4>Atendimentos com plano de saúde</h4>";
    for($i=0;$i<count($nomes_pacientes);$i++) {
        if($planos_saude[$i]!="particular") {
            echo $nomes_pacientes[$i] . " - " . $planos_saude[$i] . "<br>";
        }
    }
?>