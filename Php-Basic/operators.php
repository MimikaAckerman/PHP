<?php
/*Create a file called operators.php in this case you will need to use the var_dump PHP function which is to debug variables. 
So you can do: var_dump(1 == 2);  This file as its name indicates will be used for working with operators:

// Create an example of use for arithmetic operators: +, -, *, /, and%*/

$a = 10;
$b = 5;
$result = $a  + $b ;

echo "el resultado total de la suma de $a + $b es  $result";

// resta
echo"<br>";
$c = 50;
$d = 20;
$result = $c - $d;
echo "el resultado de la resta  $c - $d es $result";

//multiplicacion
echo"<br>";
$e = 70;
$f = 110;
$result = $e * $f;
echo "el resultado de la multiplicacion $e * $f  es $result";

//division  and %
echo"<br>";
$result= $num1 = 90 / $num2 = 30;
echo "el resultado de la division es $result";


//php abs(). the function this is the returns the absolute (positive) value of a number:
echo"<br> el planteamiento original es -6.7 pero ahora es ";
echo (abs(-6.7)); //returns 6.7
echo"<br>";


//Create a usage example for comparison operators: ==,! =, <,>, <=,>=
echo"<br>";

$a = 300;
$b = 400;

if($a == $b){
    echo "$a y $b son iguales";
}else{
    echo "$a y $b no son iguales";
}

echo"<br>";

$a = 500;
$b = 450;
if($a != $b ){
    echo " $a y $b not equal";
}else{
    echo "yes $a y $b be equal";
}

echo"<br>";

$a = 350;
$b = 250;

if($a > $b ){
echo"$a es mayor que $b";
}else{
    echo "$b es mayor que $a";
}

echo"<br>";
//Create an example of use for logical operators: &&, And; ||, Or; ! (NOT); Xor */


$e = false || true;
$f = false or true;

if($e && $f == true){
    echo"es true";
}else{
    echo"is false";
}
echo"<br>";

if(! $e == false ){
    echo "is false";
}else{
    echo "is true";
}
echo"<br>";

var_dump($e,$f); 

echo"<br>";


?>