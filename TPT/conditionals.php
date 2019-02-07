<?php
    #CONDITIONALS

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

?>