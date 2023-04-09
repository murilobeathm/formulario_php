<?php 
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $telemovel = $_POST['telemovel'];
    $horas_semana = $_POST['horas_sema'];
    $dia_semana = $_POST['dia_semana'];
    $preco_hora = $_POST['preco_hora'];

    echo "Nome: $nome.<br>";
    echo "Idade: $idade.<br>";
    echo "Telemóvel: $telemovel.<br>";
    echo "Horas por semana: $horas_semana.<br>";
    echo "Dias da semana : $dia_semana.<br>";
    echo "Preço por hora: $preco_hora.<br>";


    $semana= ($dia_semana*$horas_semana)*$preco_hora;

    echo "Pagamento Semanal: $semana";
?>
