<?php
    //loops 

    echo "<br>";
    print("esto es un for");  echo "<br>";

for($i=0; $i <= 10; $i++){
    echo $i;
}
echo"<br>";

//example two with for
echo "<br>";
print("esto es un otro ejemplo con for");  echo "<br>";

for($j=1, $x=0; $j <=10; $j += $x, print $j, $j++)
echo "<br>";


//foreach
echo "<br>";
print("esto es un foreach");


$array =[
    [1,2],
    [3,4],
];

foreach ($array as list($a,$b)) {
    #$a contiene el primer elemento del array y $b los elementos de abajo
    echo"<br>";
    echo "A: $a; B: $b";
}


//loops while
echo "<br>";
print("esto un bucle while");

$i =1;
while($i <=10){
    echo"<br>";
    echo $i++;
}

//loops do while
echo "<br>";
print("esto es un bucle do while"); echo"<br>";
$i =1;
do{
    echo "the number is: $i <br>";
    $i++;

}while($i <= 5);


?>