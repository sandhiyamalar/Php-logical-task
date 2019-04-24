//Write a PHP script to combine (using one array for keys and another for its values) the following two arrays.
//('x', 'y', 'y'), (10, 20, 30)
o/p=Array
(
    [x] => 10
    [y] => Array
        (
            [0] => 20
            [1] => 30
        )

)



<?php

   $arr1 = array("x", "y", "y"); 
   $arr2 = array('10', '20', '30');
   array_combine($arr1, $arr2);
    $result = array();
    foreach ($arr1 as $i => $k) {
        $result[$k][] = $arr2[$i];
    }
   array_walk($result, function(&$v){
     $v = (count($v) == 1) ? array_pop($v): $v;
     });

      print_r($result);
    //print_r(array_combine($arr1, $arr2)); 
        