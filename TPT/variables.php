<?php 
// Single line comment
# Single line comment
/* 
Multi line comment 
*/

# VARIABLES --
/*
    - Prefix with $
    - Start with a letter or an underscore
    - Only letters, numbers and underscores
    - Case sensitive
*/
$name;
$name = "Nathan";

# OUTPUT --
// echo "" or print "" can be used
echo "hello world<br>"; //echo returns no value
print "hello world<br>"; //print returns a value of 1
echo "$name<br>";


# DATA TYPES --
/*
    - string
    - integer
    - float
    - boolean
    - array
    - object
    - NULL
    - resource
*/

// adding numeric data types together
$num1 = 30;
$num2 = 20.5;
$num3 = 10;
$num4 = 15.5;

$sum = $num1 + $num2; // use the + sign to perform addition
echo "$sum<br>";

$sum2 = $num3 . $num4; // use the . sign to perform concatonation
echo "$sum2<br>";

// concatonating strings
$fName = "Nathan";
$sName = "Byrne";

$fullName = $fName . " " . $sName . "<br>"; // use . to concatonate strings
$fullName2 = "$fName $sName"; // wrap the strings in double quotes to concatonate and parse variables
$fullName3 = '$fName $sName <br>'; // using single quotes will treat everthing as is

echo "$fullName3";

$quote = 'they\'re here';
echo $quote;

# CONSTANTS -- 
// it is best practice to define constant names by using capitals
define('GREETING', 'Hello Everyone'); // define('[CONSTANT NAME]', '[constant content]');
echo GREETING;

// Constants are case sensitive by default, this can be changed by adding "true"
define("FAREWELL", "Goobye Everyone", true);
echo farewell;

?>