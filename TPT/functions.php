<?php
    #FUNCTION - block of code that can repeatedly be called

    //creating a function
    function simpleFunction(){
        echo "hello world";
    }
    //calling a function
    simpleFunction();

    //function with parameters
    function ageCalc($birthYear = NULL){
        $year = 2019;
        $age = $year - $birthYear;
        //echo $age;
        return $age;
    }

    echo ageCalc(1973);

    # By reference.. this will permanantly change the value of the variable used
    $myNum = 10;
    
    //this will not change the variable
    function addFive($num){
        $num += 5;
    }
    //using the & sign means that the variable used will permantly be modified
    function addTen(&$num){
        $num += 10;
    }
    
    addFive($myNum);
    echo "$myNum <br>";

    addTen($myNum);
    echo "$myNum <br>";









?>