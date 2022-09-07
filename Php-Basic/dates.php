<?php
    /*Create a file called dates.php. This file as its name indicates will be used for work with dates. We will be using dates from classes in this case from DateTime class forgetting the use of old php functions.
Instance the Date Time class and then invoke the format method with the argument “Y-m-d” to show year-month-day
Get the current date in any format*/

$date = new DateTime('2000-08-21');
echo $date->format('Y-m-d');

echo "<br>";


//Get the current day
echo "today is" . date("D");

//Get the current month in numerical format (1-12)
echo "<br>";
echo date('M - Y')."\n";

//Get the current minute with leading zeros (00 - 59)*/
echo "<br>";
 echo date('00:i');
?>