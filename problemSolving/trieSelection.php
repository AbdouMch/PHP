<?php
    $t =array(100,20,15,2,7,35,8,1,30);
    $n = count($t);
    echo "<pre>";
    print_r($t);
    echo "</pre>";

    for ($i=0; $i < $n; $i++) { 
        $min = $i;
        for ($j=$i+1; $j < $n; $j++) { 
            if ($t[$min] > $t[$j]) $min = $j;
        }
        if($min != $i){
            $a = $t[$min];
            $t[$min] = $t[$i];
            $t[$i] = $a;
        }
    }
    echo "<pre>";
    print_r($t);
    echo "</pre>";
?>