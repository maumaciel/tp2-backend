<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP 2 Backend </title>
</head>
<body>
    <h1>Trabajo práctico n°2</h1>
    <h2>Backend</h2>
    <p>1. Crear una variable n y validar que sea un número positivo.</p>
    <?php
        $var = 7;
        if ($var > 0) {
            echo "$var es positivo";
        }
        else {echo "$var no es positivo";}
    ?>
    <hr>
    <p>2. Crear una variable n y validar que sea un número mayor a 1 y menor a 10.</p>
    <?php
        $var2 = 45;
        if ($var2 < 10 && $var2 > 1) {
            echo "$var2 es mayor a 1 y menor a 10";
        }
        else {echo "$var2 no es mayor a 1 y menor a 10";}
    ?>
    <hr>
    <p>3. Crear una variable n y validar que sea un número mayor a 10 o menor a 2.</p>
    <?php
        $var3 = -4;
        if ($var3 > 10 || $var3 < 2) {
            echo "$var3 entra en el rango especificado";
        }
        else {echo "$var3 no entra en el rango especificado";}
    ?>
    <hr>
    <p> 4. Crear dos variables, una con nombre numero1 y otra con el nombre de numero2. Si numero1 es
        mayor a numero2, mostrar por pantalla, la suma y la resta. Si numero2 es mayor a numero1,
        mostrar por pantalla la multiplicación, la división entera y el resto de la división. Si numero1 y
        numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales”.
    </p>
    <?php
        $numero1 = -4 ;
        $numero2 = 0;
        echo "NúMERO 1 : $numero1 <br>";
        echo "NúMERO 2 : $numero2 <br>";
        if ($numero1 > $numero2) {
            $suma = $numero1 + $numero2;
            $resta = $numero1 - $numero2;
            echo "SUMA: $suma <br>";
            echo "RESTA: $resta";  
        }
        elseif ($numero1 < $numero2) {
            $mult = $numero1 * $numero2;
            echo "MULTIPLICACIóN: $mult<br>";
            if ($numero2 != 0) {
            $div = floor($numero1 / $numero2);
            $resto = $numero1 % $numero2;
            echo "DIVISIóN ENTERA: $div <br>";
            echo "RESTO: $resto";
            }
            else {echo"No se puede hacer la division entera y el resto porque el número de mayor valor es 0";}
        }
        else {
            echo "Los números ingresados son iguales";
        }
    ?>
</body>
</html>