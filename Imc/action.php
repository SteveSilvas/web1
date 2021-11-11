<?php
$imc;
$altura;
$peso;



if (isset($_POST['btnImc'])){
   
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $imc = $peso/($altura*$altura);
    
    echo "Seu IMC está em: ".$imc."<br>";

    //Magreza, quando o resultado é menor que 18,5 kg/m2;
    if ($imc<18.5){
        echo "Abaixo do Peso Ideal";
    }
    //Normal, quando o resultado está entre 18,5 e 24,9 kg/m2;
    if($imc<24.9 &&$imc>18.5){
        echo "Dentro do Peso Ideal";
    }
    //Sobrepeso, quando o resultado está entre 24,9 e 30 kg/m2;
    if ($imc <30 && $imc > 24.9){
        echo "Em Sobrepeso";
    }
    //Obesidade, quando o resultado é maior que 30 kg/m2.
    if( $imc >30){
        echo "Obesidade";
    }
    
}
?>