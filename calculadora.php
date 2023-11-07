<?php

$nro1=0;
$nro2=0;
$resultado=0;
$calcular='somar';


if(isset($_GET['nro1'], $_GET['nro2'], $_GET['calcular'])) {
$nro1= floatval($_GET['nro1']);
$nro2= floatval($_GET['nro2']);
$calcular=$_GET['calcular'];

switch($calcular){
    case 'somar':
        $resultado= $nro1 +$nro2;
        break;

        case 'subtrair':
            $resultado= $nro1 - $nro2;
            break;

            case 'dividir':
                $resultado= $nro1/$nro2;
                break;

                case 'multiplicar':
                    $resultado= $nro1 * $nro2;
}

}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora</title>
</head>
<body>
    <form method='GET'>
        <h1 class="numero01">Primeiro Número</h1> <br />
       <input type="text" name="nro1" value= <?= $nro1;?>  required/>  <br/>

        <h2 class="numero02">Segundo Número</h2> <br/>
        <input type="text" name="nro2" value=<?= $nro2;?> required/> <br/> <br/>

        <select name="calcular">
        <option value="somar">Somar</option>
        <option value="dividir">dividir</option>
        <option value="subtrair">subtrair</option>
        <option value="multiplicar">multiplicar</option>
        </select>
        <br/> <br/>

        <input type="submit" value= 'calcular'>
        <br/> <br/>
        
        <p> O Resultado é <?= $resultado; ?> </p>

    </form>
</body>
</html>

