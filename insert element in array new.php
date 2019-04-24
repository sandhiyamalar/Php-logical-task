/*Write a PHP script that inserts a new item in an array in any position
Expected Output :
Original array : 
1 2 3 4 5 
After inserting '$' the array is :
1 2 3 $ 4 5*/


<?php

    $arr=array("1","2","3","4","5");
    //array_push($arr,"6","7");
   
    array_splice( $arr, 2, 0, 100 );     
    foreach ($arr as $x)  { 
        echo "$x "; 
    }  