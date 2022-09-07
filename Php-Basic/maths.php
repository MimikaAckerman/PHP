<?php
 /*   This file as its name properly indicates will be used for working with mathematical operators and the specific PHP functions for:
        
        Define a variable whose value is the result of the function that returns a rounded value to the next highest integer.
        Define a variable whose value is the result of the function that returns the highest value of a series of values ​​that are received by parameter.
        Define a variable whose value is the result of the function that returns the lowest value of a series of values ​​that are received by parameter.
        Define a variable whose value is the result of the function that returns a random number*/


       // Define a variable whose value is the result of the function that returns an absolute value.

$num = -10.9;
echo (abs($num));

echo "<br>";
//Define a variable whose value is the result of the function that returns a rounded value to the next highest integer.
                            
echo $num1 = round(10.21);
echo "<br>";
    
//Define a variable whose value is the result of the function that returns the highest value of a series of values ​​that are received 
echo $num2 = max(10,21,5,2,3);
echo "<br>";
//Define a variable whose value is the result of the function that returns the lowest value of a series of values ​​that are received by parameter.

echo $num3 = min(10,21,5,80,1);
echo "<br>";

//Define a variable whose value is the result of the function that returns a random number

echo $num4 = rand();
echo "<br>";



?>