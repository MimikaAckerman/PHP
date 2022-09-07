<?php
    /*Create a file called conditionals.php
This file as its name indicates will be used for working with conditionals:
Create a simple condition that evaluates whether the current day is Monday. Only in the case that the condition is met, it shows a message of “We are on Monday”.
Create a simple condition that evaluates whether the current month is October. If the condition is met, it shows a message of the type "We are in October". Otherwise, if this condition is not met, show the current month in words as it come from DateTime.
Create a double condition that evaluates:
If the current minute is less than 10. Displays a message of type "the current minute is less than 10", if the current minute is greater than 15, displays a message of the type "the current minute is more than 15". If you do not meet any of the two conditions above: Displays a message of the type "does not meet any conditions”
Create a switch type control structure to display a different message depending on the current day of the week. You can write any type of message, because the important thing is that you understand how it works and in what cases you can use it.
*/


//realizamos una condicion donde si el dia es lunes nos dira que es lunes pero si no , nos dira que es otro dia 

$dia = date('D');

if($dia == 'Mon'){
    echo"we are monday";
}else{
    echo"is other day";
}

echo "<br>";

//condicion que evalue el mes de osctubre
$mes = date('m');
if($mes == 'october'){
    echo "we are october";
}else{
    echo "we aren't october";
}


//condicion doble
echo "<br>";



if($dateTime = date('i') < 10){
    echo "the current minute is less than 10";
}else if($dateTime = date('i') > 15){
    echo "the current minute is more that 15";
}else{
    echo "not meet any conditions";
};
   


//crea una estructura de control
echo "<br>";

$days =rand(1,7);
echo "the day of week is $days es el:";

switch ($days) {

    case 1:
        echo "lunes";
        break;
    case 2;
        echo "martes";
        break;
    case 3;
        echo "miercoles";
        break;
    case 4;
        echo "jueves";
        break;
    case 5;
        echo "viernes";
        break;
    case 6;
        echo "sabado";
        break;
    case 7;
        echo "domingo";
        break;

}





?>
