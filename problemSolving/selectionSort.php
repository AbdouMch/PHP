<?php
$t = array(10,33,5,20,14,45,6);
$n = count($t);

echo "before sorting <br />";
echo "<pre>";
print_r($t);
echo "</pre>";

for ($i=0; $i < $n-1; $i++) { 
    $min = $i;
    for ($j=$i+1; $j < $n; $j++) { 
        if ($t[$min]>$t[$j]) $min = $j;
    }
    if ($min != $i){
        $a = $t[$min];
        $t[$min] = $t[$i];
        $t[$i] = $a;
    }
}

echo "after sorting <br />";
echo "<pre>";
print_r($t);
echo "</pre>";
?>