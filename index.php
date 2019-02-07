<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>

<body>
    <p id="hW">hello world</p>
    <!-- PHP start -->
    <?php
        // Declaring variables
        $greeting = "Hello ";
        $fName = "Nathan ";
        $sName = "Byrne ";
        $age = 22;

        //outputting message
        echo ("blah $greeting world<br> My name is $fName $sName");

        //Make variables global INSIDE the function
        function userGreet(){
            global $fName, $sName, $age;
            echo "<br>Hello $fName $sName <br>";
        }
        userGreet();

        //using GLOBALS to grab global variables and create variables (concatonate with .)
        function globalsTest(){
            $GLOBALS["fullName"] = $GLOBALS["fName"] . $GLOBALS["sName"];
        }
        globalsTest();
        echo $fullName;

        // using STATIC to ammend variables permanently
        function ageCount(){
            static $fAge = 22;
            echo "$fAge <br>";
            $fAge+=10;
        }
        ageCount();
        ageCount();
        ageCount();

        // output data to the screen by using echo or print
        // echo has NO return value
        // print has a return value of 1

        // DATA TYPES - string, integer, float, boolean, array, 
        // object, null, resource
        $myString = "string";
        $myInt = 12;
        $myFloat = 12.5;
        $myBoolean = TRUE;
        $myArray = array("car", "bike", "truck");
        $myNull = NULL;
        // creating a class and an object
        class Phone{
            function Phone(){
                $this ->model = "Apple";
            }
        }
        $iPhone = new Phone();
        echo $iPhone->model . "<br>";
        // use var_dump(variable) to display the variables data type
        echo var_dump($iPhone);

        // string length using strlen()
        echo "<br>String length of $myString is: " . strlen($myString);
        // string word count using str_word_count()
        $myString .= " is a string";
        echo str_word_count("this is a string");
        

    ?>
    <!-- PHP end -->
</body>

</html>