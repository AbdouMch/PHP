<?php
    $t = array(14,33,27,10,35,2);
    $n = count($t);

    echo "<pre>";
    print_r($t);
    echo "</pre>";
    echo "before sorting <br />";

    for ($i=1; $i < $n; $i++) { 
        $holePosition = $i;
        $value2Insert = $t[$i];
        while (($holePosition>0) && ($t[$holePosition-1]>$value2Insert)){
            $t[$holePosition] = $t[$holePosition-1];
            $holePosition--;
        }
        $t[$holePosition] = $value2Insert;
    }

    echo "final sort result <br />";

    echo "<pre>";
    print_r($t);
    echo "</pre>";
?>