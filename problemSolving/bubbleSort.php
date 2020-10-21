<?php
    // $t = array(14,33,27,10,35,2);
    $t = array(14,1,2,3,4,5);
    $n = count($t);
    $k=0;

    echo "<pre>";
    print_r($t);
    echo "</pre>";
    echo "before sorting <br />";

    for ($i=0; $i < $n; $i++) {
        $swapped = false;
        for ($j=0; $j < ($n-1); $j++) { 
            if($t[$j]>$t[$j+1]){
                $a = $t[$j];
                $t[$j] = $t[$j+1];
                $t[$j+1] = $a;
                $swapped = true;
            } 
            $k++;
            echo "<pre>";
            print_r($t);
            echo "</pre>";
        }
        if (!$swapped) break;
        $k++;
        echo "<pre>";
        print_r($t);
        echo "</pre>";
    }

    echo "final sort result <br />";

    echo "<pre>";
    print_r($t);
    echo "</pre>";

    echo "number of iterations is " . $k;
?>