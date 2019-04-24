Write a PHP script to get the shortest/longest string length from an array.

Sample arrays : ("abcd","abc","de","hjjj","g","wer")




<?php

    $arr = array("abcde","abc","dddd","hj","a","was");
    $length = array_map('strlen', $arr);
    echo "min length  " . min($length) ."\n";
     echo "max length  " . max($length);