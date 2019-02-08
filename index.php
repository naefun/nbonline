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


        #STRINGS ----------------------------------------
        // string length using strlen()
        echo "<br>String length of $myString is: " . strlen($myString) . "<br>";

        // string word count using str_word_count()
        $myString .= " is a string";
        echo str_word_count("this is a string")."<br>";

        // string reverse using strrev()
        echo strrev("This is a reversed string") . "<br>";

        // search for specific text within a string using strpos()
        echo "The position of nathan is: " . strpos("i am looking for nathan, have you seen him?", "nathan") . "<br>";

        //replace specific characters with other characters using str_replace()
        echo str_replace("string", "very nice string", $myString) . "<br>";
        

        #ARRAY -------------------------------------------
        $names = array("nathan", "wiki", "john", "bob");
        $names[] = "junior";
        foreach ($names as $name){
            echo $name . " <br>";
        }

        #PHP Class & Object -------------------------------
        class Game{
            function gameDetails(){
                $this->title = NULL;
                $this->stock = NULL;
                $this->price = NULL;
            }
        }

        $cod = new Game();
        $cod->title = "Call of Duty Black Ops 4";
        $cod->stock = 12;
        $cod->price = 39.99;

        echo "$cod->title <br>$cod->stock <br>$cod->price <br>";


        #CONSTANTS -----------------------------------------
        define("AUTHOR", "This website was made by Nathan Byrne &copy", TRUE);
        echo author . "<br>";

        //constant arrays can be created
        define("GAMES",[
            "cod",
            "bf",
            "fifa",
            TRUE
        ]);
        echo GAMES[2];

        //constants are global, therefore can be used within functions aswell as the rest of the entire script
        function constantTest(){
            echo GAMES[1];
        }
        constantTest();


        #OPERATORS --------------------------------------------

        //arithmetic
        /*
            +       addition
            -       subtraction
            *       multiplication
            /       division
            %       modulus
            **      exponentiation
        */

        //assignment
        /* 
            x = y
            x += y
            x -= y
            x *= y
            x /= y
            x %= y
        */

        //comparison
        /*
            ==      equal                           Returns true if $x is equal to $y
            ===     identical                       Returns true if $x is equal to $y, and they are of the same type
            !=      not equal                       Returns true if $x is not equal to $y
            <>      not equal                       Returns true if $x is not equal to $y
            !==     not identical                   Returns true if $x is not equal to $y, or they are not of the same type
            >       greater than                    Returns true if $x is greater than $y
            <       less than                       Returns true if $x is less than $y
            >=      greater than or equal to        Returns true if $x is greater than or equal to $y
            <=      less than or equal to           Returns true if $x is less than or equal to $y
            <=>     spaceship                       Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7.
        */

        //increment decrement
        /*
            ++$x    pre increment
            $x++    post increment
            --$x    pre decrement
            $x--    post decrement
        */

        //logical
        /*
            &&      true if x and y are true
            ||      true if either x or y is true
            !       true if x is not true
            xor     true if only one of x or y is true
        */

        //string
        /*
            .       concatonation
            .=      concatonation asignment
        */

        //conditional assignment
        /*
            ?:      $x = expr1 ? expr2 : expr3      Returns the value of $x. | The value of $x is expr2 if expr1 = TRUE. | The value of $x is expr3 if expr1 = FALSE
            ??      $x = expr1 ?? expr2             Returns the value of $x. | The value of $x is expr1 if expr1 exists, and is not NULL. | If expr1 does not exist, or is NULL, the value of $x is expr2.
        */

        


    ?>
    <!-- PHP end -->
</body>

</html>