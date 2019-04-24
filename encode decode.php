// Encode decode 
// i/p  = javascript 
// o/p  = savajMtpirc -> encode
 //         javascript  -> decode





<?php

    $random_char = '123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $random_len = strlen($random_char);
    $orginal_char = 'javascript';
    $orginal_len=strlen($orginal_char );
    $div=$orginal_len/2;
     //encode
        $first= substr($orginal_char,0,$div);
        $second= substr($orginal_char,$div);
        $first_rev= strrev($first);
        $second_rev=strrev($second);
        $replace = $random_char[rand(0, $random_len-1)];
        
        $d=$first_rev.$second_rev;
        $encode = substr_replace($d, $replace, $div, 0);
        echo $encode . "\n";
        
     //decode  
        
        $d_replace= substr_replace($encode,'',$div,1);
        $f=substr($d_replace,0,$div);
        $s= substr($d_replace,$div);
        $f_rev=strrev($f);
        $s_rev=strrev($s);
        $d_rev=$f_rev.$s_rev;
        echo $d_rev;
        
        