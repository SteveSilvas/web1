
<?php
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$d = $_POST['d'];
$e = $_POST['e'];
$f = $_POST['f'];

$media = 0;
$qtt =0;
$soma =0;

$num = array();

$num[]= $a;
$num[]= $b;
$num[]= $c;
$num[]= $d;
$num[]= $e;
$num[]= $f;


for($i =0; $i<5; $i++){
    if ($num[$i]>0){
        $soma += $num[$i];
        echo ' Numero'.$num[$i].' positivo <br>';
        $qtt ++;
    }
}
$media = $soma/$qtt;
echo 'A média é: '.$media .'<br> 
A quantidade de números positivos é: '.$qtt;

?>