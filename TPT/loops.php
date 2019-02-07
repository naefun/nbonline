<?php
#LOOPS - execute code for a set number of times

/*
    for
    while
    do..while
    foreach
*/

#FOR LOOP -----------------------------
// @params - init, condition, inc

//creating for loop
for($i = 0; $i < 10; $i++){
    echo $i;
}


#WHILE LOOP -----------------------------
// @params - condition

$x = 0;

while($x < 10){
    echo "nathan $x <br>";
    $x ++;
}


#DO WHILE LOOP ----------------------------
// @params - condition

$y = 8;

do{
    echo $y;
    $y *= 2;
}while($y < 80);


#FOREACH LOOP --------------------------
echo '<br>';
$people = array('john', 'chris', 'bob', 'nigel');
$games = array(
    array('CoD: BO4', 12, 39.99),
    array('GTA: 5', 32, 49.99),
    array('FIFA 19', 99, 39.99),
    array('RDR2', 1, 59.99)
);
$ages = array('nathan' => 22, 'diesel' => 5, 'wiki' => 20);

/*
foreach ($people as $person){
    echo $person;
    echo '<br>';
}
*/

foreach($ages as $person => $age){
    echo "$person: $age <br>";
}



?>