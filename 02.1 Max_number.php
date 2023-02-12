<?php
//Variable declaration
$value1 = 12;
$value2 = 45;
$value3 = 56;

//Functions section()
function finder($value1,$value2, $value3){
    if($value1 > $value2 && $value1 > $value3)
        echo "$value1 is greather than all given values.";
    else if ($value2 > $value1 && $value2 > $value3)
        echo "$value2 is greather than all given values.";
    else
        echo "$value3 is greather than all given values.";
}
//Calling the function
finder($value1, $value2, $value3);
?>