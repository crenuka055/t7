<?php
//Author: Chetan K. Renuka
//Enroll: 22SOECE13033  
//GLOBLE VARIABLES
global $totalMarks;

//funtions() 
function data_values($totalMarks) {
    $sub_1 = 95;
    $sub_2 = 89;
    $sub_3 = 54;
    $sub_4 = 87;
    $sub_5 = 65;

    //calc the total data(value)
    $totalMarks = ($sub_1 + $sub_2 + $sub_3 + $sub_4 + $sub_5)/5;
    //PRINT THE RESULT (just use if, it's functioning)
        // echo "$totalMarks";
    display_grade($totalMarks);
}
function display_grade($totalMarks) {
    //local_variables
        // $totalMarks=0;
    if($totalMarks >= 60)
        $grade = "First Division";
    else if($totalMarks >= 45)
        $grade = "Second Division";
    else if($totalMarks >= 33)
        $grade = "Third Division";
    else
        $grade = "Fail";

    //final DiplayToConsole
    echo "Student Grade: $grade";
}
//calling the funtions
data_values($totalMarks);
?>