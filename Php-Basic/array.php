<?php
    //This file as its name indicates will be used to work with arrays:

//Define a simple array composed of text strings

$i = array('hello','world','morning');
var_dump($i);
echo'<br>';

//Define a simple array consisting of whole numbers and decimal numbers
$i = array(10,2,10.4,8.9);
var_dump($i);
echo'<br>';

//Define a multidimensional array
$country = array(
    array('venezuela',10,21),
    array('argentina',11,20),
    array('spain',15,10)
);

//Execute the function that allows to obtain the length of an array

$country = array(
    array('venezuela',10,21),
    array('argentina',11,20),
    array('spain',15,10)
);
echo sizeof($country);
echo'<br>';
//Execute the function that allows to obtain the combination of two arrays

$country = array('venezuela',10,21);
$cities = array('bolivar',10,10,3);

$result = array_merge($country,$cities);

print_r($result);
echo'<br>';
//Execute the function that once is given an array return the last element of it

$cities = array('bolivar','barquisimeto','caracas','merida');
print end($cities);

//Execute the function that once is given an array add a new element to the array in question
$cities = array('bolivar','barquisimeto','caracas','merida');
array_push($cities,'valencia');
print_r($cities);


?>