<!DOCTYPE html>
<html>
    <body>
        <div style ="background: black; width: 300px; color:azure;" >
        <hr>
        <?php

        $num1 = 10;
        $num2 = 20;

        echo "La suma de ".$num1." + ".$num2." es igual a = ".$num1 + $num2;
        ?> 
        </div>
        <div style ="background: black; width: 300px; color:azure;" >
        <hr>
        <?php

        $decimal1 = number_format(8.9,2);
        $decimal2 = number_format(9.6,2);

        echo "La suma de ".$decimal1." + ".$decimal2." es igual a = ".$decimal1 + $decimal2;
        ?> 
        </div>
        <div style ="background: black; width: 300px; color:azure;" >
        <hr>
        <?php

        $numero1 = 8;
        $numero2 = 5;

        echo "La multiplicacion de ".$numero1." * ".$numero2." es igual a = ".$numero1 * $numero2;
        ?> 
        </div>
        <div style ="background: black; width: 300px; color:azure;" >
        <hr>
        <?php

        $variable1 = "Universidad ";
        $variable2 = "Tecnologica";

        echo $variable1.$variable2;
        ?> 
        </div>
    </body>
</html>