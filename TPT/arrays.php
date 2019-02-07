<?php

#Array - variable that holds multiple values
/*
 - Indexed
 - Associative
 - Multi-dimensional
*/

#Indexed array -----------------------
//Creating an array
$people = array('john', 'bob', 'chris');
$ids = array(22, 33, 42);
$gpus = ['1050', '1060', '1070', '1080', '1080Ti'];

//Adding to an array
$people[3] = "bill";
$people[] = "nathan"; //use empty brackets to add on to the end of an array

//return the length of an array
#echo count($people);

//return human readable info about a variable
#print_r($people);

//return extended information about a variable
#var_dump($people);


//echo $people[4];
//echo $ids[2];
//echo $gpus[3];


#Associative arrays ----------------------
// Creating associative arrays
$userAge = array('nathan' => 22, 'aaron' => 25, 'wiki' => 20);
$userGender = ['nathan' => 'm', 'aaron' => 'm', 'wiki' => 'f'];

// adding to associative arrays
$userAge['martin'] = 47;

//echo $userAge['martin'];
//echo $userGender['aaron'];
//print_r($userAge);


#Multi-dimensional arrays --------------------
// creating multi-dimensional array
$games = array(
    array('COD: BO4', 40, 39.99), //[0]
    array('fortnite', 99, 0), //[1]
    array('BF: 5', 29, 39.99) //[2]
);

//outputting values from multi-dimensional arrays
echo $games[2][0];

?>