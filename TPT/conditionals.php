<?php
    #CONDITIONALS ---------------------

    /*
        ==      equals
        ===     matches value & data type (identical to)
        <       less than
        >       greater than
        <=      less than or equal to
        >=      more than or equal to
        !=      not equals to
        !==     not identical
    */

    $num = 5;

    if($num === 5){
        echo "$num is identical to";
    }
    elseif($num == 5){
        echo "$num is equal to";
    }
    else{
        echo "the number is: $num";
    }


    #LOGICAL OPERATORS --------------------

    /*
        and     &&      all conditions must be met
        or      ||      any condition can be met
        xor             only one condition can be met
    */

    $num = 11;

    if ($num > 4 && $num < 10){
        echo "$num passed: and";
    }

    if ($num > 4 || $num < 10){
        echo "$num passed: or";
    }

    if ($num > 4 xor $num < 10){
        echo "$num passed: xor";
    }

    echo "<br>";


    #SWITCH CASE ----------------------------

    $faveGame = "cod bo4";

    switch($faveGame){
        case "apex legends":
            echo "$faveGame is the best BR game!!";
            break;
        case "fortnite":
            echo "$faveGame is overated, nice map tho";
            break;
        case "PUBG":
            echo "$faveGame isn't a bad game, runs like shit tho";
            break;
        default:
            echo "$faveGame is shit lol";
    }

?>