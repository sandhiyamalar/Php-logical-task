Write a PHP script to sort the following associative array :
array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40") in 
a) ascending order sort by value
b) ascending order sort by Key
c) descending order sorting by Value
d) descending order sorting by Key



<?php

   $arr = array("Peter"=>"35", "Ben"=>"35", "Joe"=>"43");
   
   //value sort 
   
   asort($arr);    //ascending order
    print_r($arr);
    echo "\n";
    arsort($arr);    //decending order
     print_r($arr);
    echo "\n";
    
    //key sort
    
    ksort($arr);   // ascending order
     print_r($arr);
    echo "\n";
    krsort($arr);   //decending order
     print_r($arr);
    echo "\n";