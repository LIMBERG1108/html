<!DOCTYPE html>
<html>
    <body>
        <div style ="background: black; width: 300px; color:azure;">
        <?php
        
        $variable1 = 10;
        $variable2 = 9;

        if($variable1 > $variable2){

            echo $variable1." es mayor.";
            
        }
        ?> 
        </div>
        <hr>

        <div style ="background: black; width: 300px; color:azure;">
        <?php
        
        $variable1 = 10;
        $variable2 = 9;
        $variable3 = 17;

        if($variable1 < $variable2){
            
            if($variable1 < $variable3){

                echo $variable1."es menor.";
            }
            else{
                echo $variable3."es menor";
            }
        }
        else{

           if($variable2 < $variable3){

            echo $variable2." es menor.";
           }
           else{

            echo $variable3."es menor";

           }
        }
        ?> 
        </div>
    </body>
</html>