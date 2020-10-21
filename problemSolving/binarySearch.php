<?php
    $primeNumbers = array(2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 
    37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97, 101);

    $n = count($primeNumbers);

    $toSearch = 102;

    $l = 0;
    $h = $n-1;
    $founded = false;
    $changed = false;

    while(true){
        
        $pos = intdiv($l+$h,2);
    
        if ($primeNumbers[$pos]>$toSearch) $h = $pos-1;
        elseif ($primeNumbers[$pos]<$toSearch) $l = $pos+1;
        else {
            $founded = true;
            break;
        }

        if($l > $h) break;
    }

    $pos++;
    if ($founded) echo $toSearch . " is the " . $pos . " prime number";
    else echo $toSearch . " is not a prime number";
?>