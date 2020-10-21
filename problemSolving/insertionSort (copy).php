<?php
    $t = array(14,33,27,10,35,2);
    $n = count($t);

    echo "<pre>";
    print_r($t);
    echo "</pre>";
    echo "before sorting <br />";

    // for ($i=1; $i < $n; $i++) { 
    //     $j=$i;
    //     while (($j>0) && ($t[$j]<$t[$j-1])){
    //         if ($t[$j]<$t[$j-1]) {
    //             $a = $t[$j];
    //             $t[$j] = $t[$j-1];
    //             $t[$j-1] = $a;
    //         }
    //         $j--;
    //         echo "<pre>";
    //         print_r($t);
    //         echo "</pre>";
    //     }

    //     echo "<pre>";
    //     print_r($t);
    //     echo "</pre>";
    // }

    for ($i=0; $i < $n; $i++) { 
        $j = $i;
        $value2Insert = $t[$i];
        while(($j>0) && ($t[$j-1]>$value2Insert)){
            $t[$j] = $t[$j-1];
            $j--; 
        }
        $t[$j] = $value2Insert;
    }

    echo "final sort result <br />";

    echo "<pre>";
    print_r($t);
    echo "</pre>";
?>