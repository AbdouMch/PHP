<?php
    $t1 = array(20,21,30,65,100);
    $t2 = array(0,25,45,71,92,120,150);
    $t3 = array();
    
    echo "first array : <br />";
    echo "<pre>";
    print_r($t1);
    echo "</pre>";

    echo "second array : <br />";
    echo "<pre>";
    print_r($t2);
    echo "</pre>";


    if(count($t1)<=count($t2)) {
        $t3 = $t1;
        $toSort = $t2;
        $finalLength =  count($t2);
        $start = count($t1);
    }
    else {
        $t3 = $t2;
        $toSort = $t1;
        $finalLength =  count($t1);
        $start = count($t2);
    }

    for ($i=0; $i < count($toSort); $i++) {
        $t3[]=$toSort[$i];
        $selectedPosition = count($t3)-1;
        $selectedValue = $t3[$selectedPosition];
        while(($selectedPosition>0) && ($t3[$selectedPosition-1]>$selectedValue)){
            $t3[$selectedPosition]=$t3[$selectedPosition-1];
            $selectedPosition--;
        }
        $t3[$selectedPosition]=$selectedValue;
    }

    echo "final array : <br />";
    echo "<pre>";
    print_r($t3);
    echo "</pre>";
    
?>