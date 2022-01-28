


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>27-01</title>
</head>
<body>
    <style>
        *, body{  
            --cor-bg: black;
            --cor-txt: #c3c3c3;
            margin: 0px;
            padding: 0px;
            background-color: var(--cor-bg);
            color: var(--cor-txt);
        }
        form{
            margin-top: 100px;
            text-align: center;
        }
        #sub-txt{
            color: green;
        }
        form input{
            padding:2px;
            margin: 10px;
            
        }
    </style>
    <form action="acao.php" method="post">
        <h1>Este programa verifica quantos números digitados <br>
        são positivos e calcula a média entre eles</h1>
        <br>
        <h3 id="sub-txt">Digite os seis números (positivos ou negativos)</h3>
        <input type="number" step='0.01' value='0.00'name="a" placeholder="Digite um número">
        <br>
        <input type="number" name="b" placeholder="Digite outro número">
        <br>
        <input type="number" name="c" placeholder="Digite outro número">
        <br>
        <input type="number" name="d" placeholder="Digite outro número">
        <br>
        <input type="number" name="e" placeholder="Digite outro número">
        <br>
        <input type="number" name="f" placeholder="Digite outro número">
        <br>
        <input type="submit" value="Calcular">

    </form>
</body>
</html>
