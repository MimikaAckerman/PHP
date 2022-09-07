<?php
//This file as its name indicates will be used to work with text strings:
    

//Print a text string
print("hello world!");

echo"<br>";
//Print a text string that interpret variables
$temp = "hello world";
var_dump($temp);

echo"<br>";
//Concatenate a previously declared variable in a text string
$hello = "hello";
echo $world = $hello . "world!";

echo"<br>";

//Execute the function that allows you to replace text in a string (case sensitive)
echo $p ='hello evErYbody';
echo"<br>";
echo $p = str_ireplace('evErYbody','you',$p);
echo"<br>";
// Execute the function that allows you to replace text in a string (without taking into account upper / lower case)

$example = "One Day I Get Up So Calm";
echo $example; echo "<br>";
$example = strtolower($example);
echo $example;
echo"<br>";

//Execute the function that allows you to write a text N times
echo str_repeat('i want to sleep',4);
echo"<br>";

//Execute the function that allows to obtain the length of a text string
$good = 'good morning';
echo strlen($good);
echo"<br>";

//Executes the function that allows to obtain the position of the first occurrence of a text within a text string

$newstring ='abcdef abcdef';
echo $result = strpos($newstring,'c'); 
echo"<br>";

//Execute the function that allows a text string to be capitalized

echo strtoupper('hello WORLD!');
echo"<br>";


// Execute the function that allows you to transform a text string to lowercase
echo strtolower('HELLO WORLD!');
echo"<br>";

//Execute the function that allows to obtain a text substring from a given position 
echo $position = substr('abcdefg', -3);

?>